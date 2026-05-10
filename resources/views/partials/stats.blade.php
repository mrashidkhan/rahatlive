{{-- ═══════════════════════════════════════════════════════
     STATS / LEGACY SECTION
     resources/views/partials/stats.blade.php
     Included in home.blade.php via:
       @include('partials.stats')
     ═══════════════════════════════════════════════════════ --}}
<section class="stats-section" id="stats" aria-label="Global reach and legacy">

  {{-- ── Section heading ── --}}
  <div class="stats-heading">
    <span class="eyebrow light">By the Numbers</span>
    <h2 class="stats-title">
      A Legacy Written<br>
      <em>in Music</em>
    </h2>
    <p class="stats-subtitle">
      Three decades of devotion — heard by millions, felt by all.
    </p>
  </div>

  {{-- ── Stat counters ── --}}
  <div class="stats-row">

    <div class="stat-item reveal" style="--d:0s">
      <div class="stat-num-wrap">
        <span class="stat-num" data-target="50">0</span>
        <span class="stat-suffix">M+</span>
      </div>
      <p class="stat-label">Monthly listeners<br>on Spotify</p>
    </div>

    <div class="stat-item reveal" style="--d:0.12s">
      <div class="stat-num-wrap">
        <span class="stat-num" data-target="100">0</span>
        <span class="stat-suffix">M+</span>
      </div>
      <p class="stat-label">Monthly listeners<br>on YouTube Music</p>
    </div>

    <div class="stat-item reveal" style="--d:0.24s">
      <div class="stat-num-wrap">
        <span class="stat-num" data-target="5">0</span>
        <span class="stat-suffix">B+</span>
      </div>
      <p class="stat-label">YouTube<br>views</p>
    </div>

    <div class="stat-item reveal" style="--d:0.36s">
      <div class="stat-num-wrap">
        <span class="stat-num" data-target="500">0</span>
        <span class="stat-suffix">+</span>
      </div>
      <p class="stat-label">Songs<br>Recorded</p>
    </div>

  </div>

</section>

@push('styles')
<style>
/* ── Stats section wrapper ─────────────────────────────── */
.stats-section {
  background: var(--stats-bg, #1A1A1A);
  padding: 0;
}

/* ── Heading block ─────────────────────────────────────── */
.stats-heading {
  text-align:  center;
  padding:     clamp(3rem, 6vw, 5rem) var(--gutter) clamp(1.5rem, 3vw, 2.5rem);
  max-width:   var(--max, 1200px);
  margin:      0 auto;
}

.stats-heading .eyebrow.light {
  color: rgba(200, 164, 90, 0.75);
}

.stats-title {
  font-family: var(--display, 'Cormorant', Georgia, serif);
  font-size:   clamp(2.2rem, 5vw, 3.8rem);
  font-weight: 600;
  color:       #fff;
  line-height: 1.15;
  margin:      0.4rem 0 1rem;
}

.stats-title em {
  font-style:  italic;
  font-weight: 300;
  color:       #C8A45A;
}

.stats-subtitle {
  font-family: var(--body, 'Montserrat', sans-serif);
  font-size:   0.92rem;
  font-weight: 300;
  letter-spacing: 0.06em;
  color:       rgba(255, 255, 255, 0.38);
  margin:      0;
}

/* ── Counters row (existing .stats-row styles preserved) ── */
.stats-row {
  display:     grid;
  grid-template-columns: repeat(4, 1fr);
  border-top:  1px solid rgba(255, 255, 255, 0.06);
}

@media (max-width: 768px) {
  .stats-heading {
    padding-bottom: 1.5rem;
  }
  .stats-row {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 480px) {
  .stats-title { font-size: 2rem; }
}
</style>
@endpush
