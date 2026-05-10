/**
 * RAHATLIVE.COM v3 — app.js
 * Pure artist site. No promoter branding.
 * Header · Hero slider · Countdown · Stat counters
 * Poll · Notify form · Contact form · Scroll reveals
 */
(function () {
  'use strict';

  const cfg = window.RFAK || {};
  const $   = (s, c = document) => c.querySelector(s);
  const $$  = (s, c = document) => [...c.querySelectorAll(s)];
  const pad = n => String(n).padStart(2, '0');

  /* ── POST JSON ────────────────────────────────────────── */
  async function postJSON(url, data) {
    const res = await fetch(url, {
      method:  'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept':       'application/json',
        'X-CSRF-TOKEN': cfg.csrfToken || document.querySelector('meta[name="csrf-token"]')?.content || '',
      },
      body: JSON.stringify(data),
    });
    return { ok: res.ok, data: await res.json() };
  }

  function showMsg(el, text, type) {
    if (!el) return;
    el.textContent = text;
    el.className   = 'form-msg ' + type;
    if (type === 'success') setTimeout(() => { el.textContent = ''; el.className = 'form-msg'; }, 7000);
  }

  function setLoading(btn, on) {
    btn.disabled      = on;
    btn.dataset.orig  = btn.dataset.orig || btn.innerHTML;
    btn.innerHTML     = on ? '<i class="fa-solid fa-spinner fa-spin"></i>&nbsp; Please wait…' : btn.dataset.orig;
  }

  /* ── HEADER SCROLL ────────────────────────────────────── */
  function initHeader() {
    // Nav bg is always #FFEBCD — no scroll toggling needed
    // Hamburger → mobile menu
    const burger = $('#hamburger');
    const menu   = $('#mobile-menu');
    const close  = $('#mobile-close');

    burger?.addEventListener('click', () => {
      menu.classList.add('open');
      burger.setAttribute('aria-expanded', 'true');
      menu.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    });
    const closeMenu = () => {
      menu.classList.remove('open');
      burger.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    };
    close?.addEventListener('click', closeMenu);
    menu?.addEventListener('click', e => { if (e.target.tagName === 'A') closeMenu(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMenu(); });
  }

  /* ── HERO SLIDER ──────────────────────────────────────── */
  function initHeroSlider() {
    /* Hero slider is self-contained in herosection.blade.php */

  }

  /* ── COUNTDOWN ────────────────────────────────────────── */
  function initCountdown() {
    const el = $('#countdown');
    if (!el || !cfg.countdownTarget) return;

    const target = new Date(cfg.countdownTarget).getTime();
    const dEl = $('#cd-days'), hEl = $('#cd-hours'), mEl = $('#cd-mins'), sEl = $('#cd-secs');

    function tick() {
      const diff = target - Date.now();
      if (diff <= 0) { [dEl,hEl,mEl,sEl].forEach(e => e && (e.textContent = '00')); return; }
      if (dEl) dEl.textContent = pad(Math.floor(diff / 86400000));
      if (hEl) hEl.textContent = pad(Math.floor((diff % 86400000) / 3600000));
      if (mEl) mEl.textContent = pad(Math.floor((diff % 3600000) / 60000));
      if (sEl) sEl.textContent = pad(Math.floor((diff % 60000) / 1000));
    }
    tick();
    setInterval(tick, 1000);
  }

  /* ── STAT COUNTERS ────────────────────────────────────── */
  function initStats() {
    const nums = $$('.stat-num[data-target]');
    if (!nums.length) return;

    const io = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const el     = entry.target;
        const target = parseInt(el.dataset.target, 10);
        const dur    = 1800;
        const step   = 16;
        const inc    = target / (dur / step);
        let   cur    = 0;
        const t = setInterval(() => {
          cur = Math.min(cur + inc, target);
          el.textContent = Math.floor(cur);
          if (cur >= target) clearInterval(t);
        }, step);
        io.unobserve(el);
      });
    }, { threshold: 0.5 });

    nums.forEach(n => io.observe(n));
  }

  /* ── POLL ─────────────────────────────────────────────── */
  function initPoll() {
    const widget = $('#poll-widget');
    if (!widget) return;

    let userVote   = widget.dataset.userVote || cfg.userVote || null;
    const voteUrl  = widget.dataset.voteUrl  || cfg.pollVoteUrl;
    const noteEl   = $('#poll-note');

    function rows() { return $$('.poll-row', widget); }

    function applyResults(results) {
      const sorted = [...results].sort((a, b) => b.votes - a.votes);
      const winner = sorted[0]?.city;
      const total  = results.reduce((s, r) => s + r.votes, 0);

      rows().forEach(row => {
        const city  = row.dataset.city;
        const r     = results.find(x => x.city === city) || { pct: 0, votes: 0 };
        const bg    = $('.pr-bg',   row);
        const fill  = $('.pr-fill', row);
        const pct   = $('.pr-pct',  row);
        const name  = $('.pr-city', row);

        row.classList.toggle('voted',  city === userVote);
        row.classList.toggle('leader', city === winner && !!userVote);
        if (bg)   bg.style.width   = userVote ? r.pct + '%' : '0%';
        if (fill) fill.style.width = userVote ? r.pct + '%' : '0%';
        if (pct)  pct.textContent  = userVote ? r.pct + '%' : '';
        if (name) {
          const tag   = city === winner && userVote ? '<span class="pr-tag">Leading</span>' : '';
          const check = city === userVote ? '<i class="fa-solid fa-check pr-check"></i>' : '';
          name.innerHTML = city + ' ' + tag + check;
        }
        if (!userVote) { row.setAttribute('tabindex','0'); row.style.cursor = 'pointer'; }
        else { row.removeAttribute('tabindex'); row.style.cursor = 'default'; }
      });

      if (noteEl) {
        noteEl.textContent = userVote
          ? `Voted for ${userVote} · ${total.toLocaleString()} total votes`
          : 'Select your city';
      }
      const resetBtn = $('#poll-reset');
      if (resetBtn) resetBtn.style.display = userVote ? '' : 'none';
    }

    async function castVote(city) {
      if (userVote) return;
      try {
        const { ok, data } = await postJSON(voteUrl, { city });
        if (ok && data.success) { userVote = city; if (data.results) applyResults(data.results); }
      } catch {}
    }

    rows().forEach(row => {
      row.addEventListener('click',   () => castVote(row.dataset.city));
      row.addEventListener('keydown', e => { if (e.key==='Enter'||e.key===' ') { e.preventDefault(); castVote(row.dataset.city); } });
    });

    $('#poll-reset')?.addEventListener('click', async () => {
      userVote = null;
      try {
        const res  = await fetch(widget.dataset.resultsUrl || cfg.pollResultsUrl);
        const data = await res.json();
        applyResults(Array.isArray(data) ? data : []);
      } catch { applyResults([]); }
    });
  }

  /* ── TRIBE / NOTIFY FORM ──────────────────────────────── */
  function initNotifyForm() {
    const form = $('#notify-form');
    if (!form) return;
    form.addEventListener('submit', async e => {
      e.preventDefault();
      const btn = $('[type=submit]', form);
      const msg = $('#notify-msg');
      setLoading(btn, true);
      try {
        const { ok, data } = await postJSON(cfg.notifyUrl, {
          name:  $('#n-name')?.value?.trim(),
          email: $('#n-email')?.value?.trim(),
          city:  $('#n-city')?.value,
        });
        if (ok && data.success) { showMsg(msg, data.message, 'success'); form.reset(); }
        else { showMsg(msg, data.errors ? Object.values(data.errors).flat()[0] : (data.message || 'Something went wrong.'), 'error'); }
      } catch { showMsg(msg, 'Network error. Please try again.', 'error'); }
      finally  { setLoading(btn, false); }
    });
  }

  /* ── CONTACT FORM ─────────────────────────────────────── */
  function initContactForm() {
    const form = $('#contact-form');
    if (!form) return;
    form.addEventListener('submit', async e => {
      e.preventDefault();
      const btn = $('[type=submit]', form);
      const msg = $('#contact-msg');
      setLoading(btn, true);
      try {
        const { ok, data } = await postJSON(cfg.contactUrl, {
          name:    $('#c-name')?.value?.trim(),
          email:   $('#c-email')?.value?.trim(),
          phone:   $('#c-phone')?.value?.trim(),
          city:    $('#c-city')?.value?.trim(),
          message: $('#c-message')?.value?.trim(),
        });
        if (ok && data.success) { showMsg(msg, data.message, 'success'); form.reset(); }
        else { showMsg(msg, data.errors ? Object.values(data.errors).flat()[0] : (data.message || 'Something went wrong.'), 'error'); }
      } catch { showMsg(msg, 'Network error. Please try again.', 'error'); }
      finally  { setLoading(btn, false); }
    });
  }

  /* ── SCROLL REVEAL ────────────────────────────────────── */
  function initReveal() {
    const els = $$('.reveal, .reveal-left, .reveal-right');
    if (!els.length) return;
    const io = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) { entry.target.classList.add('in'); io.unobserve(entry.target); }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
    els.forEach(el => io.observe(el));
  }

  /* ── INIT ─────────────────────────────────────────────── */
  document.addEventListener('DOMContentLoaded', () => {
    initHeader();
    initHeroSlider();
    initCountdown();
    initStats();
    initPoll();
    initNotifyForm();
    initContactForm();
    initReveal();
  });

})();
