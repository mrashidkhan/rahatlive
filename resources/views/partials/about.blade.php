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
