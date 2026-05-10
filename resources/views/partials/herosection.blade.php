{{-- ═══════════════════════════════════════════════════════════════
     HERO SECTION  —  resources/views/partials/herosection.blade.php
     4 slides using hero1–hero4.png
     Slider behaviour matches shreyaghoshal.com exactly:
       • Left / Right arrow buttons (< >)
       • Dot navigation (bottom-centre)
       • Auto-rotate every 6 seconds
       • Crossfade transition (opacity)
       • Text content on LEFT side (left 40% empty for text overlay)
       • Each image is a full-bleed background
     ═══════════════════════════════════════════════════════════════ --}}

<section class="hero" id="hero" aria-label="Hero banner">

  {{-- ─────────────────────── SLIDE 1 ─────────────────────── --}}
  <div class="hero-slide active" data-slide="0">
    <div class="hero-slide-bg"
         style="background-image:url('{{ asset('images/herosection/hero1.png') }}')">
    </div>
    <div class="hero-slide-content">
      <p class="hero-eyebrow">North America Tour 2026</p>
      <h1 class="hero-headline">
        The Voice<br>
        <em>of Eternity</em>
      </h1>
      <p class="hero-sub">
        What can't be felt in words…<br>
        must be experienced in person.
      </p>
      <div class="hero-cta-row">
        <a href="#tour"  class="hero-btn hero-btn--filled">View Shows</a>
        <a href="#contact" class="hero-btn hero-btn--ghost">Contact Us</a>
      </div>
    </div>
  </div>

  {{-- ─────────────────────── SLIDE 2 ─────────────────────── --}}
  <div class="hero-slide" data-slide="1">
    <div class="hero-slide-bg"
         style="background-image:url('{{ asset('images/herosection/hero2.png') }}')">
    </div>
    <div class="hero-slide-content">
      <p class="hero-eyebrow">Sufi · Qawwali · Bollywood</p>
      <h1 class="hero-headline">
        The Journey.<br>
        <em>Unfiltered &amp; Unseen.</em>
      </h1>
      <p class="hero-sub">
        Be a part of my inner circle.<br>
        Get exclusive access &amp; updates.
      </p>
      <div class="hero-cta-row">
        <a href="#tour" class="hero-btn hero-btn--filled">View Shows</a>
        <a href="#about" class="hero-btn hero-btn--ghost">Know More</a>
      </div>
    </div>
  </div>

  {{-- ─────────────────────── SLIDE 3 ─────────────────────── --}}
  <div class="hero-slide" data-slide="2">
    <div class="hero-slide-bg"
         style="background-image:url('{{ asset('images/herosection/hero3.png') }}')">
    </div>
    <div class="hero-slide-content">
      <p class="hero-eyebrow">50 M+ Monthly Listeners</p>
      <h1 class="hero-headline">
        A Voice That<br>
        <em>Touches Souls.</em>
      </h1>
      <p class="hero-sub">
        Three decades of music.<br>
        Millions of hearts across the world.
      </p>
      <div class="hero-cta-row">
        <a href="#tour"  class="hero-btn hero-btn--ghost">Tour Dates</a>
        <a href="#about" class="hero-btn hero-btn--filled">About Rahat</a>

      </div>
    </div>
  </div>

  {{-- ─────────────────────── SLIDE 4 ─────────────────────── --}}
  <div class="hero-slide" data-slide="3">
    <div class="hero-slide-bg"
         style="background-image:url('{{ asset('images/herosection/hero4.png') }}')">
    </div>
    <div class="hero-slide-content">
      <p class="hero-eyebrow">Live in Concert — USA 2026</p>
      <h1 class="hero-headline">
        Experience<br>
        <em>The Maestro Live.</em>
      </h1>
      <p class="hero-sub">
        Dallas · Houston · New York<br>
        Chicago · Los Angeles · Atlanta
      </p>
      <div class="hero-cta-row">
        <a href="#tour"    class="hero-btn hero-btn--filled">View Shows</a>
        <a href="#contact" class="hero-btn hero-btn--ghost">Contact Us</a>
      </div>
    </div>
  </div>

  {{-- ─── LEFT arrow (prev) — matches shreyaghoshal.com ─── --}}
  <button class="hero-arrow hero-arrow--prev" id="hero-prev" aria-label="Previous slide">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <polyline points="15 18 9 12 15 6"></polyline>
    </svg>
  </button>

  {{-- ─── RIGHT arrow (next) ─── --}}
  <button class="hero-arrow hero-arrow--next" id="hero-next" aria-label="Next slide">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <polyline points="9 18 15 12 9 6"></polyline>
    </svg>
  </button>

  {{-- ─── Dot navigation — bottom centre ─── --}}
  <div class="hero-dots" role="tablist" aria-label="Slide navigation">
    <button class="hero-dot active" data-slide="0"
            role="tab" aria-selected="true"  aria-label="Slide 1"></button>
    <button class="hero-dot"        data-slide="1"
            role="tab" aria-selected="false" aria-label="Slide 2"></button>
    <button class="hero-dot"        data-slide="2"
            role="tab" aria-selected="false" aria-label="Slide 3"></button>
    <button class="hero-dot"        data-slide="3"
            role="tab" aria-selected="false" aria-label="Slide 4"></button>
  </div>

  {{-- ─── Scroll indicator ─── --}}
  <div class="hero-scroll-hint" aria-hidden="true">
    <div class="hero-scroll-bar"></div>
  </div>

</section>

{{-- ═══════════════════════════════════════════════════════════════
     HERO CSS  —  scoped to .hero only, won't bleed into other sections
     ═══════════════════════════════════════════════════════════════ --}}
@push('styles')
<style>
/* ── Hero container ───────────────────────────────────────── */
.hero {
  position:   relative;
  width:      100%;
  overflow:   hidden;
  background: #0C1F0E;  /* dark green fallback while images load */
  /* height and margin-top set in app.blade.php <style> block */
}

/* ── Each slide ───────────────────────────────────────────── */
.hero-slide {
  position:       absolute;
  inset:          0;
  opacity:        0;
  transition:     opacity 1s ease;
  pointer-events: none;
  z-index:        0;
}
.hero-slide.active {
  opacity:        1;
  z-index:        1;
  pointer-events: auto;
}

/* ── Full-bleed background image ──────────────────────────── */
.hero-slide-bg {
  position:            absolute;
  inset:               0;
  background-size:     cover;
  background-position: center right;  /* keeps artist face on right */
  background-repeat:   no-repeat;
  background-color:    #0C1F0E;
}

/* ── Text content — left side ─────────────────────────────── */
.hero-slide-content {
  position:        relative;
  z-index:         2;
  height:          100%;
  display:         flex;
  flex-direction:  column;
  justify-content: center;
  padding:         0 clamp(2rem, 8vw, 8rem);
  max-width:       52%;     /* text lives in left 52% — right 48% shows artist */
}

/* ── Eyebrow label ────────────────────────────────────────── */
.hero-eyebrow {
  font-family:    'Lato', sans-serif;
  font-size:      11px;
  font-weight:    700;
  letter-spacing: 0.28em;
  text-transform: uppercase;
  color:          #C8A45A;
  margin-bottom:  1.2rem;
  opacity:        0;
  transform:      translateY(12px);
  transition:     opacity 0.7s ease 0.15s, transform 0.7s ease 0.15s;
}

/* ── Main headline ────────────────────────────────────────── */
.hero-headline {
  font-family:    'Cormorant', Georgia, serif;
  font-size:      clamp(2.6rem, 5.5vw, 5.2rem);
  font-weight:    600;
  line-height:    1.12;
  color:          #fff;
  margin-bottom:  1.4rem;
  opacity:        0;
  transform:      translateY(16px);
  transition:     opacity 0.75s ease 0.3s, transform 0.75s ease 0.3s;
}
.hero-headline em {
  font-style:  italic;
  font-weight: 300;
  color:       #E8D5A3;   /* warm gold-cream */
}

/* ── Sub-text ─────────────────────────────────────────────── */
.hero-sub {
  font-family:    'Lato', sans-serif;
  font-size:      clamp(0.85rem, 1.3vw, 1.05rem);
  font-weight:    300;
  line-height:    1.8;
  color:          rgba(255,255,255,0.72);
  margin-bottom:  2.2rem;
  opacity:        0;
  transform:      translateY(12px);
  transition:     opacity 0.7s ease 0.45s, transform 0.7s ease 0.45s;
}

/* ── CTA buttons ──────────────────────────────────────────── */
.hero-cta-row {
  display:    flex;
  gap:        1rem;
  flex-wrap:  wrap;
  opacity:    0;
  transform:  translateY(12px);
  transition: opacity 0.7s ease 0.6s, transform 0.7s ease 0.6s;
}

.hero-btn {
  font-family:    'Lato', sans-serif;
  font-size:      11px;
  font-weight:    700;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  padding:        0.85rem 2.2rem;
  border:         none;
  cursor:         pointer;
  transition:     background 0.25s, color 0.25s, transform 0.2s;
  display:        inline-block;
  text-decoration: none;
}

.hero-btn--filled {
  background: #FFEBCD;
  color:      #1A0800;
}
.hero-btn--filled:hover {
  background: #fff;
  transform:  translateY(-2px);
}

.hero-btn--ghost {
  background: transparent;
  color:      rgba(255,255,255,0.85);
  border:     1.5px solid rgba(255,255,255,0.4);
}
.hero-btn--ghost:hover {
  border-color: #C8A45A;
  color:        #C8A45A;
}

/* ── Animate content in when slide becomes active ─────────── */
.hero-slide.active .hero-eyebrow,
.hero-slide.active .hero-headline,
.hero-slide.active .hero-sub,
.hero-slide.active .hero-cta-row {
  opacity:   1;
  transform: translateY(0);
}

/* ── Arrow buttons ────────────────────────────────────────── */
.hero-arrow {
  position:    absolute;
  top:         50%;
  transform:   translateY(-50%);
  z-index:     10;
  width:       48px;
  height:      48px;
  display:     flex;
  align-items: center;
  justify-content: center;
  background:  rgba(255,255,255,0.12);
  border:      1.5px solid rgba(255,255,255,0.3);
  border-radius: 50%;
  color:       #fff;
  cursor:      pointer;
  transition:  background 0.25s, border-color 0.25s, transform 0.25s;
  backdrop-filter: blur(4px);
}
.hero-arrow svg { width: 20px; height: 20px; }
.hero-arrow:hover {
  background:   rgba(200,164,90,0.3);
  border-color: #C8A45A;
  transform:    translateY(-50%) scale(1.08);
}

.hero-arrow--prev { left:  clamp(1rem, 3vw, 2.5rem); }
.hero-arrow--next { right: clamp(1rem, 3vw, 2.5rem); }

/* ── Dot navigation ───────────────────────────────────────── */
.hero-dots {
  position:    absolute;
  bottom:      1.8rem;
  left:        50%;
  transform:   translateX(-50%);
  z-index:     10;
  display:     flex;
  gap:         0.6rem;
  align-items: center;
}

.hero-dot {
  width:         9px;
  height:        9px;
  border-radius: 50%;
  border:        1.5px solid rgba(200,164,90,0.55);
  background:    transparent;
  cursor:        pointer;
  transition:    background 0.3s, border-color 0.3s, transform 0.25s;
  padding:       0;
}
.hero-dot:hover  { border-color: #C8A45A; transform: scale(1.25); }
.hero-dot.active {
  background:   #C8A45A;
  border-color: #C8A45A;
  transform:    scale(1.15);
}

/* ── Scroll indicator ─────────────────────────────────────── */
.hero-scroll-hint {
  position:  absolute;
  bottom:    1.8rem;
  right:     clamp(1rem, 3vw, 2.5rem);
  z-index:   10;
}
.hero-scroll-bar {
  width:      1px;
  height:     52px;
  background: linear-gradient(to bottom, rgba(200,164,90,0.7), transparent);
  animation:  scrollPulse 2.2s ease infinite;
}
@keyframes scrollPulse {
  0%,100% { opacity: 0.25; transform: translateY(-6px); }
  50%     { opacity: 1;    transform: translateY(0); }
}

/* ── Mobile adjustments ───────────────────────────────────── */
@media (max-width: 768px) {
  .hero-slide-content {
    max-width:       90%;
    padding:         0 1.5rem;
    justify-content: flex-end;
    padding-bottom:  5rem;
    /* On mobile: content at bottom, image fills above */
  }
  .hero-slide-bg {
    background-position: right center;
  }
  .hero-headline { font-size: clamp(2rem, 7vw, 3rem); }
  .hero-sub      { font-size: 0.85rem; }
  .hero-arrow    { width: 38px; height: 38px; }
  .hero-scroll-hint { display: none; }
}

@media (max-width: 480px) {
  .hero-btn { padding: 0.75rem 1.6rem; font-size: 10px; }
  .hero-cta-row { gap: 0.7rem; }
}
</style>
@endpush

{{-- ═══════════════════════════════════════════════════════════════
     HERO JAVASCRIPT  —  self-contained slider
     Left/right arrows + dot clicks + auto-rotate 6s + keyboard nav
     Exactly matches shreyaghoshal.com slider behaviour
     ═══════════════════════════════════════════════════════════════ --}}
@push('scripts')
<script>
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {

    const slides   = document.querySelectorAll('.hero-slide');
    const dots     = document.querySelectorAll('.hero-dot');
    const btnPrev  = document.getElementById('hero-prev');
    const btnNext  = document.getElementById('hero-next');

    if (!slides.length) return;

    let current = 0;
    let timer;
    const INTERVAL = 6000;

    /* ── Go to slide i ── */
    function goTo(i) {
      // Clamp / wrap
      i = ((i % slides.length) + slides.length) % slides.length;

      // Remove active from current
      slides[current].classList.remove('active');
      if (dots[current]) {
        dots[current].classList.remove('active');
        dots[current].setAttribute('aria-selected', 'false');
      }

      // Activate new slide
      current = i;
      slides[current].classList.add('active');
      if (dots[current]) {
        dots[current].classList.add('active');
        dots[current].setAttribute('aria-selected', 'true');
      }
    }

    function next() { goTo(current + 1); }
    function prev() { goTo(current - 1); }

    /* ── Auto-rotate ── */
    function startTimer() {
      clearInterval(timer);
      timer = setInterval(next, INTERVAL);
    }
    function resetTimer() {
      startTimer();
    }

    /* ── Arrow buttons ── */
    btnPrev?.addEventListener('click', function () { prev(); resetTimer(); });
    btnNext?.addEventListener('click', function () { next(); resetTimer(); });

    /* ── Dot clicks ── */
    dots.forEach(function (dot, i) {
      dot.addEventListener('click', function () {
        goTo(i);
        resetTimer();
      });
    });

    /* ── Keyboard navigation ── */
    document.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowLeft')  { prev(); resetTimer(); }
      if (e.key === 'ArrowRight') { next(); resetTimer(); }
    });

    /* ── Touch/swipe support ── */
    var touchStartX = 0;
    var touchEndX   = 0;

    var heroEl = document.getElementById('hero');
    if (heroEl) {
      heroEl.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
      }, { passive: true });

      heroEl.addEventListener('touchend', function (e) {
        touchEndX = e.changedTouches[0].screenX;
        var diff  = touchStartX - touchEndX;
        if (Math.abs(diff) > 50) {          // min swipe distance
          if (diff > 0) { next(); }          // swipe left → next
          else          { prev(); }          // swipe right → prev
          resetTimer();
        }
      }, { passive: true });
    }

    /* ── Pause on hover ── */
    if (heroEl) {
      heroEl.addEventListener('mouseenter', function () { clearInterval(timer); });
      heroEl.addEventListener('mouseleave', function () { startTimer(); });
    }

    /* ── Start ── */
    startTimer();
  });

})();
</script>
@endpush
