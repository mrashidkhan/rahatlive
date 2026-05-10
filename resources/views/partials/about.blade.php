{{-- ═══════════════════════════════════════════════════════
     ABOUT SECTION
     resources/views/partials/about.blade.php
     Included in home.blade.php via:
       @include('partials.about')
     ═══════════════════════════════════════════════════════ --}}
<section class="about-section" id="about">
  <div class="about-inner">

    {{-- ── Artist photo ── --}}
    <div class="about-photo-wrap reveal-left">
      <img src="{{ asset('images/about/rahatabout.jpg') }}"
           alt="Rahat Fateh Ali Khan"
           class="about-photo"
           loading="lazy" />
    </div>

    {{-- ── Text column ── --}}
    <div class="about-text-col reveal-right">

      <span class="eyebrow">The Artist</span>

      <h2 class="section-title">
        Global Recognition &amp;<br>
        <em>Digital Footprint</em>
      </h2>

      <p class="about-intro">
        Rahat Fateh Ali Khan's influence extends far beyond South Asia's borders,
        making him one of the most celebrated voices in world music.
      </p>

      <div class="about-logo-wrap">
        <img src="{{ asset('images/rahat-logo-dark.png') }}"
             alt="Rahat Fateh Ali Khan"
             class="about-logo-img"
             onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
        <span class="about-logo-fallback">RAHAT FATEH ALI KHAN</span>
      </div>

      <p>
        Having stepped behind the microphone as a child, Rahat's career now
        <strong>spans over three decades</strong>. He has reigned as the defining voice
        of Sufi and South Asian music, yet his artistry remains as fresh and captivating as ever.
      </p>

      <p>
        Known as the <strong>Voice of Love</strong>, his songs transcend languages, genres,
        and generations. With over <strong>50 million monthly listeners on Spotify</strong>
        and hundreds of millions of views on YouTube, Rahat has touched hearts worldwide.
      </p>

      <a href="#tour" class="btn-primary mt-6">Know More</a>

    </div>
  </div >
</section>

{{-- <section id="stats"> </section> --}}
{{-- ═══════════════════════════════════════════════════════
     STATS ROW
     Kept in about.blade.php — it sits directly after About
     and shares the same thematic context.
     ═══════════════════════════════════════════════════════ --}}


<section class="stats-row" id="stats" aria-label="Key statistics">



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

</section>
