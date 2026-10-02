{{-- ═══════════════════════════════════════════════════════════════
     HERO SECTION  —  resources/views/partials/herosection.blade.php
     Desktop : full-bleed bg, text overlaid on left
     Mobile  : full image shown (contain, no crop) + text below
     ═══════════════════════════════════════════════════════════════ --}}

<section class="hero" id="hero" aria-label="Hero banner">

  {{-- ─────────────────────── SLIDE 1 ─────────────────────── --}}
  <div class="hero-slide active" data-slide="0">
    <div class="hero-slide-bg"
         style="background-image:url('{{ asset('images/herosection/hero1.png') }}')">
    </div>
    <div class="hero-slide-overlay"></div>
    <div class="hero-slide-content">
      <p class="hero-eyebrow">North America Tour 2026</p>
      <h1 class="hero-headline">The Voice<br><em>of Eternity</em></h1>
      <p class="hero-sub">
        What can't be felt in words…<br>must be experienced in person.
      </p>
      <div class="hero-cta-row">
        <a href="#tour"    class="hero-btn hero-btn--filled">View Shows</a>
        <a href="#contact" class="hero-btn hero-btn--ghost">Contact Us</a>
      </div>
    </div>
  </div>

  {{-- ─────────────────────── SLIDE 2 ─────────────────────── --}}
  <div class="hero-slide" data-slide="1">
    <div class="hero-slide-bg"
         style="background-image:url('{{ asset('images/herosection/hero2.png') }}')">
    </div>
    <div class="hero-slide-overlay"></div>
    <div class="hero-slide-content">
      <p class="hero-eyebrow">Sufi · Qawwali · Bollywood</p>
      <h1 class="hero-headline">The Journey.<br><em>Unfiltered &amp; Unseen.</em></h1>
      <p class="hero-sub">
        Be a part of my inner circle.<br>Get exclusive access &amp; updates.
      </p>
      <div class="hero-cta-row">
        <a href="#tour"  class="hero-btn hero-btn--filled">View Shows</a>
        <a href="#about" class="hero-btn hero-btn--ghost">Know More</a>
      </div>
    </div>
  </div>

  {{-- ─────────────────────── SLIDE 3 ─────────────────────── --}}
  <div class="hero-slide" data-slide="2">
    <div class="hero-slide-bg"
         style="background-image:url('{{ asset('images/herosection/hero3.png') }}')">
    </div>
    <div class="hero-slide-overlay"></div>
    <div class="hero-slide-content">
      <p class="hero-eyebrow">50 M+ Monthly Listeners</p>
      <h1 class="hero-headline">A Voice That<br><em>Touches Souls.</em></h1>
      <p class="hero-sub">
        Three decades of music.<br>Millions of hearts across the world.
      </p>
      <div class="hero-cta-row">
        <a href="#about" class="hero-btn hero-btn--filled">About Rahat</a>
        <a href="#tour"  class="hero-btn hero-btn--ghost">Tour Dates</a>
      </div>
    </div>
  </div>

  {{-- ─────────────────────── SLIDE 4 ─────────────────────── --}}
  <div class="hero-slide" data-slide="3">
    <div class="hero-slide-bg"
         style="background-image:url('{{ asset('images/herosection/hero4.png') }}')">
    </div>
    <div class="hero-slide-overlay"></div>
    <div class="hero-slide-content">
      <p class="hero-eyebrow">Live in Concert — USA 2026</p>
      <h1 class="hero-headline">Experience<br><em>The Maestro Live.</em></h1>
      <p class="hero-sub">
        Dallas · Houston · New York<br>Chicago · Los Angeles · Atlanta
      </p>
      <div class="hero-cta-row">
        <a href="#tour"    class="hero-btn hero-btn--filled">View Shows</a>
        <a href="#contact" class="hero-btn hero-btn--ghost">Contact Us</a>
      </div>
    </div>
  </div>

  {{-- ─── Arrows ─── --}}
  <button class="hero-arrow hero-arrow--prev" id="hero-prev" aria-label="Previous slide">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <polyline points="15 18 9 12 15 6"></polyline>
    </svg>
  </button>
  <button class="hero-arrow hero-arrow--next" id="hero-next" aria-label="Next slide">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <polyline points="9 18 15 12 9 6"></polyline>
    </svg>
  </button>

  {{-- ─── Dots ─── --}}
  <div class="hero-dots" role="tablist" aria-label="Slide navigation">
    <button class="hero-dot active" data-slide="0" role="tab" aria-selected="true"  aria-label="Slide 1"></button>
    <button class="hero-dot"        data-slide="1" role="tab" aria-selected="false" aria-label="Slide 2"></button>
    <button class="hero-dot"        data-slide="2" role="tab" aria-selected="false" aria-label="Slide 3"></button>
    <button class="hero-dot"        data-slide="3" role="tab" aria-selected="false" aria-label="Slide 4"></button>
  </div>

  {{-- ─── Scroll hint (desktop only) ─── --}}
  <div class="hero-scroll-hint" aria-hidden="true">
    <div class="hero-scroll-bar"></div>
  </div>

</section>

@push('styles')
<style>
/* ════════════════════════════════════════════════════════════
   DESKTOP BASE  (all screens, overridden for mobile below)
   ════════════════════════════════════════════════════════════ */
.hero {
  position:   relative;
  width:      100%;
  overflow:   hidden;
  background: #0C1F0E;
  /* height & margin-top set by app.blade.php */
}

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

/* Desktop: cover, artist at 75% from left */
.hero-slide-bg {
  position:            absolute;
  inset:               0;
  background-size:     cover;
  background-position: 75% center;
  background-repeat:   no-repeat;
  background-color:    #0C1F0E;
}

/* Desktop overlay: dark on left where text sits */
.hero-slide-overlay {
  position: absolute;
  inset:    0;
  z-index:  1;
  background: linear-gradient(
    to right,
    rgba(6,14,8,0.90) 0%,
    rgba(6,14,8,0.68) 36%,
    rgba(6,14,8,0.20) 60%,
    rgba(6,14,8,0.03) 100%
  );
}

/* Desktop: text on left 50% */
.hero-slide-content {
  position:        relative;
  z-index:         2;
  height:          100%;
  display:         flex;
  flex-direction:  column;
  justify-content: center;
  padding:         0 clamp(2rem, 8vw, 8rem);
  max-width:       50%;
}

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
.hero-headline em { font-style: italic; font-weight: 300; color: #E8D5A3; }

.hero-sub {
  font-family:    'Lato', sans-serif;
  font-size:      clamp(0.85rem, 1.3vw, 1.05rem);
  font-weight:    300;
  line-height:    1.8;
  color:          rgba(255,255,255,0.78);
  margin-bottom:  2.2rem;
  opacity:        0;
  transform:      translateY(12px);
  transition:     opacity 0.7s ease 0.45s, transform 0.7s ease 0.45s;
}

.hero-cta-row {
  display:    flex;
  gap:        1rem;
  flex-wrap:  wrap;
  opacity:    0;
  transform:  translateY(12px);
  transition: opacity 0.7s ease 0.6s, transform 0.7s ease 0.6s;
}

.hero-btn {
  font-family:     'Lato', sans-serif;
  font-size:       11px;
  font-weight:     700;
  letter-spacing:  0.22em;
  text-transform:  uppercase;
  padding:         0.85rem 2.2rem;
  border:          none;
  cursor:          pointer;
  transition:      background 0.25s, color 0.25s, transform 0.2s;
  display:         inline-block;
  text-decoration: none;
  white-space:     nowrap;
}
.hero-btn--filled       { background: #FFEBCD; color: #1A0800; }
.hero-btn--filled:hover { background: #fff; transform: translateY(-2px); }
.hero-btn--ghost        { background: transparent; color: rgba(255,255,255,0.85); border: 1.5px solid rgba(255,255,255,0.4); }
.hero-btn--ghost:hover  { border-color: #C8A45A; color: #C8A45A; }

/* Animate in */
.hero-slide.active .hero-eyebrow,
.hero-slide.active .hero-headline,
.hero-slide.active .hero-sub,
.hero-slide.active .hero-cta-row { opacity: 1; transform: translateY(0); }

/* Arrows */
.hero-arrow {
  position:        absolute;
  top:             50%;
  transform:       translateY(-50%);
  z-index:         10;
  width:           48px;
  height:          48px;
  display:         flex;
  align-items:     center;
  justify-content: center;
  background:      rgba(255,255,255,0.12);
  border:          1.5px solid rgba(255,255,255,0.3);
  border-radius:   50%;
  color:           #fff;
  cursor:          pointer;
  transition:      background 0.25s, border-color 0.25s, transform 0.25s;
  backdrop-filter: blur(4px);
}
.hero-arrow svg   { width: 20px; height: 20px; }
.hero-arrow:hover { background: rgba(200,164,90,0.3); border-color: #C8A45A; transform: translateY(-50%) scale(1.08); }
.hero-arrow--prev { left:  clamp(1rem, 3vw, 2.5rem); }
.hero-arrow--next { right: clamp(1rem, 3vw, 2.5rem); }

/* Dots */
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
  width: 9px; height: 9px;
  border-radius: 50%;
  border:        1.5px solid rgba(200,164,90,0.55);
  background:    transparent;
  cursor:        pointer;
  padding:       0;
  transition:    background 0.3s, border-color 0.3s, transform 0.25s;
}
.hero-dot:hover  { border-color: #C8A45A; transform: scale(1.25); }
.hero-dot.active { background: #C8A45A; border-color: #C8A45A; transform: scale(1.15); }

/* Scroll hint */
.hero-scroll-hint { position: absolute; bottom: 1.8rem; right: clamp(1rem,3vw,2.5rem); z-index: 10; }
.hero-scroll-bar  { width: 1px; height: 52px; background: linear-gradient(to bottom, rgba(200,164,90,0.7), transparent); animation: scrollPulse 2.2s ease infinite; }
@keyframes scrollPulse {
  0%,100% { opacity: 0.25; transform: translateY(-6px); }
  50%     { opacity: 1;    transform: translateY(0); }
}

/* Tablet */
@media (max-width: 1100px) and (min-width: 769px) {
  .hero-slide-content { max-width: 60%; padding: 0 clamp(2rem,5vw,4rem); }
}

/* ════════════════════════════════════════════════════════════
   MOBILE  ≤ 768px
   ────────────────────────────────────────────────────────────
   Strategy: show the FULL image using background-size:contain
   so nothing is ever cropped. The image sits at the top of the
   slide on the dark green (#0C1F0E) background. Text sits below.

   Layout per slide (portrait phone):
   ┌──────────────────────────┐  ← slide top
   │                          │
   │   full image (contain)   │  ~50vw tall  (image aspect 2:1,
   │   centered horizontally  │   so at 100vw width = 50vw tall)
   │                          │
   ├──────────────────────────┤
   │   eyebrow                │
   │   headline               │  text panel on solid dark bg
   │   sub                    │
   │   [btn] [btn]            │
   └──────────────────────────┘  ← dots + bottom
   ════════════════════════════════════════════════════════════ */
@media (max-width: 768px) {

  /* Hero section: natural height = image + text, no fixed height */
  .hero {
    height:         auto !important;
    min-height:     unset !important;
    overflow:       visible;
  }

  /* Each slide stacks vertically; hidden slides use display:none */
  .hero-slide {
    position:   static !important;      /* out of absolute flow   */
    inset:      unset !important;
    opacity:    1 !important;
    transition: none !important;
    display:    none;
    flex-direction: column;
    width:      100%;
  }
  .hero-slide.active {
    display: flex;
  }

  /* ── Image zone ──
     background-size: contain  → full image always visible, never cropped
     background-position: center top → image sits at top, centred          */
  .hero-slide-bg {
    width:               100%;
    /* Height = width × (736/1449) — the image's natural aspect ratio.
       Using padding-top trick so the box is exactly the right height. */
    height:              0;
    padding-top:         50.8%;   /* 736/1449 × 100 = 50.8% */
    background-size:     contain;
    background-position: center top;
    background-color:    #0C1F0E;
    position:            relative;
    flex-shrink:         0;
    /* Override the absolute inset:0 from desktop */
    inset:               unset !important;
  }

  /* No overlay on mobile — image is fully visible, no text on top */
  .hero-slide-overlay { display: none; }

  /* ── Text panel ── */
  .hero-slide-content {
    position:        static !important;
    height:          auto !important;
    max-width:       100% !important;
    width:           100%;
    display:         flex;
    flex-direction:  column;
    align-items:     center;
    text-align:      center;
    padding:         1.6rem 1.4rem 4.8rem;
    background:      #0C1F0E;
    /* Reset desktop animation so text is visible immediately */
    opacity:         1 !important;
    transform:       none !important;
  }

  /* Force all text children visible immediately on mobile */
  .hero-slide.active .hero-eyebrow,
  .hero-slide.active .hero-headline,
  .hero-slide.active .hero-sub,
  .hero-slide.active .hero-cta-row {
    opacity:    1 !important;
    transform:  none !important;
    transition: none !important;
  }
  .hero-eyebrow, .hero-headline, .hero-sub, .hero-cta-row {
    opacity:    1 !important;
    transform:  none !important;
    transition: none !important;
  }

  .hero-eyebrow  { font-size: 10px; letter-spacing: 0.22em; margin-bottom: 0.7rem; }
  .hero-headline { font-size: clamp(1.9rem, 7.5vw, 2.6rem); line-height: 1.15; margin-bottom: 0.8rem; }
  .hero-sub      { font-size: 0.84rem; line-height: 1.75; margin-bottom: 1.4rem; color: rgba(255,255,255,0.82); }
  .hero-cta-row  { justify-content: center; gap: 0.8rem; flex-wrap: wrap; }
  .hero-btn      { font-size: 10px; padding: 0.78rem 1.8rem; min-height: 44px; }

  /* ── Arrows: shown at top-centre of image zone ── */
  .hero-arrow {
    position: absolute;
    /* Arrows float at 25% of the image zone height (50.8vw × 0.5 ≈ 25vw) */
    top:      25vw;
    transform: translateY(-50%);
    width:    38px;
    height:   38px;
    background: rgba(0,0,0,0.35);
    border:   1px solid rgba(255,255,255,0.3);
    z-index:  20;
  }
  .hero-arrow svg   { width: 16px; height: 16px; }
  .hero-arrow--prev { left:  0.5rem; }
  .hero-arrow--next { right: 0.5rem; }
  .hero-arrow:hover { background: rgba(200,164,90,0.45); border-color: #C8A45A; transform: translateY(-50%); }

  /* ── Dots: absolute to the whole section ── */
  .hero-dots { bottom: 1.6rem; }
  .hero-dot  { width: 10px; height: 10px; }

  /* Scroll hint: hidden */
  .hero-scroll-hint { display: none; }
}

/* ════════════════════════════════════════════════════════════
   SMALL PHONES  ≤ 430px
   ════════════════════════════════════════════════════════════ */
@media (max-width: 430px) {
  .hero-slide-content { padding: 1.4rem 1.2rem 4.4rem; }
  .hero-eyebrow       { font-size: 9.5px; letter-spacing: 0.18em; }
  .hero-headline      { font-size: clamp(1.75rem, 8vw, 2.2rem); }
  .hero-sub           { font-size: 0.80rem; margin-bottom: 1.2rem; }
  .hero-cta-row       { flex-direction: column; align-items: center; gap: 0.6rem; width: 100%; }
  .hero-btn           { width: 100%; max-width: 260px; text-align: center; }
  .hero-arrow         { width: 32px; height: 32px; top: 25vw; }
  .hero-arrow svg     { width: 14px; height: 14px; }
}

/* ════════════════════════════════════════════════════════════
   VERY SMALL  ≤ 360px
   ════════════════════════════════════════════════════════════ */
@media (max-width: 360px) {
  .hero-headline { font-size: 1.65rem; }
  .hero-sub      { font-size: 0.76rem; }
}

/* ════════════════════════════════════════════════════════════
   LANDSCAPE PHONES  height ≤ 500px  (wide, short screen)
   Revert to cover + overlay since no top-crop issue in landscape
   ════════════════════════════════════════════════════════════ */
@media (max-height: 500px) and (max-width: 900px) {
  .hero { height: 100svh !important; overflow: hidden; }

  .hero-slide {
    position:   absolute !important;
    inset:      0 !important;
    display:    none !important;
    opacity:    1 !important;
    transition: none !important;
  }
  .hero-slide.active { display: block !important; }

  .hero-slide-bg {
    position:            absolute !important;
    inset:               0 !important;
    height:              unset !important;
    padding-top:         0 !important;
    background-size:     cover !important;
    background-position: 75% center !important;
  }
  .hero-slide-overlay {
    display: block !important;
    background: linear-gradient(to right, rgba(6,14,8,0.88) 0%, rgba(6,14,8,0.60) 40%, rgba(6,14,8,0.10) 70%, transparent 100%);
  }
  .hero-slide-content {
    position:        absolute !important;
    inset:           0 !important;
    height:          100% !important;
    max-width:       58% !important;
    padding:         0 1.5rem !important;
    justify-content: center !important;
    align-items:     flex-start !important;
    text-align:      left !important;
    background:      transparent !important;
  }
  .hero-eyebrow, .hero-headline, .hero-sub, .hero-cta-row {
    opacity:    1 !important;
    transform:  none !important;
    transition: none !important;
  }
  .hero-headline { font-size: clamp(1.4rem, 4vw, 2rem) !important; margin-bottom: 0.4rem !important; }
  .hero-sub      { font-size: 0.72rem !important; margin-bottom: 0.8rem !important; line-height: 1.5 !important; }
  .hero-cta-row  { justify-content: flex-start !important; }
  .hero-btn      { padding: 0.55rem 1.3rem !important; min-height: 38px !important; font-size: 10px !important; width: auto !important; }
  .hero-arrow    { top: 50% !important; transform: translateY(-50%) !important; width: 36px !important; height: 36px !important; }
  .hero-dots     { bottom: 1rem; }
  .hero-scroll-hint { display: none; }
}
</style>
@endpush

@push('scripts')
<script>
(function () {
  'use strict';
  document.addEventListener('DOMContentLoaded', function () {

    const slides  = document.querySelectorAll('.hero-slide');
    const dots    = document.querySelectorAll('.hero-dot');
    const btnPrev = document.getElementById('hero-prev');
    const btnNext = document.getElementById('hero-next');

    if (!slides.length) return;

    let current  = 0;
    let timer;
    const INTERVAL = 6000;

    function goTo(i) {
      i = ((i % slides.length) + slides.length) % slides.length;
      slides[current].classList.remove('active');
      if (dots[current]) { dots[current].classList.remove('active'); dots[current].setAttribute('aria-selected','false'); }
      current = i;
      slides[current].classList.add('active');
      if (dots[current]) { dots[current].classList.add('active'); dots[current].setAttribute('aria-selected','true'); }
    }

    function next() { goTo(current + 1); }
    function prev() { goTo(current - 1); }
    function startTimer() { clearInterval(timer); timer = setInterval(next, INTERVAL); }
    function resetTimer() { startTimer(); }

    btnPrev?.addEventListener('click', function () { prev(); resetTimer(); });
    btnNext?.addEventListener('click', function () { next(); resetTimer(); });
    dots.forEach(function (dot, i) {
      dot.addEventListener('click', function () { goTo(i); resetTimer(); });
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowLeft')  { prev(); resetTimer(); }
      if (e.key === 'ArrowRight') { next(); resetTimer(); }
    });

    var touchStartX = 0, touchStartY = 0;
    var heroEl = document.getElementById('hero');
    if (heroEl) {
      heroEl.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
        touchStartY = e.changedTouches[0].screenY;
      }, { passive: true });
      heroEl.addEventListener('touchend', function (e) {
        var dx = touchStartX - e.changedTouches[0].screenX;
        var dy = touchStartY - e.changedTouches[0].screenY;
        if (Math.abs(dx) > 50 && Math.abs(dx) > Math.abs(dy) * 1.5) {
          dx > 0 ? next() : prev();
          resetTimer();
        }
      }, { passive: true });
      heroEl.addEventListener('mouseenter', function () { clearInterval(timer); });
      heroEl.addEventListener('mouseleave', function () { startTimer(); });
    }

    startTimer();
  });
})();
</script>
@endpush
