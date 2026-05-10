<header id="site-header" class="site-header">
  <div class="header-inner">

    {{-- Logo: left-aligned, vertically centred — matches shreyaghoshal.com layout --}}
    <a href="{{ route('home') }}" class="site-logo" aria-label="Rahat Live Home">
      <img src="{{ asset('images/logo/logo2.png') }}"
           alt="Rahat Live"
           class="logo-img"
           onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" />
      {{-- Cinzel text fallback if image missing --}}
      <span class="logo-fallback">RAHAT LIVE</span>
    </a>

    {{-- Desktop nav links: right side --}}
    <nav class="main-nav" role="navigation" aria-label="Primary">
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('home') }}#about">About Rahat</a></li>
        <li><a href="{{ route('home') }}#tour">Tour</a></li>
        <li><a href="{{ route('home') }}#poll">Voting</a></li>
        <li><a href="{{ route('home') }}#stats">Legacy</a></li>
        <li><a href="{{ route('home') }}#contact" class="nav-tribe">Contact Us</a></li>
      </ul>
    </nav>

    {{-- Hamburger: mobile only --}}
    <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>

  </div>

  {{-- Mobile Menu --}}
  <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
    <button class="mobile-close" id="mobile-close" aria-label="Close menu">
      <i class="fa-solid fa-xmark"></i>
    </button>
    <nav>
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('home') }}#about">About Rahat</a></li>
        <li><a href="{{ route('home') }}#tour">Tour</a></li>
        <li><a href="{{ route('home') }}#poll">Voting</a></li>
        <li><a href="{{ route('home') }}#stats">Legacy</a></li>
        {{-- <li><a href="{{ route('home') }}#tribe">Join the Tribe</a></li> --}}
        <li><a href="{{ route('home') }}#contact">Contact Us</a></li>
      </ul>
    </nav>
    <div class="mobile-socials">
      <a href="https://www.instagram.com/ustadrahatalikhan2026" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
      {{-- <a href="https://www.youtube.com/@RahatFatehAliKhanOfficial"  target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a> --}}
      <a href="https://open.spotify.com/artist/7uIbLdzzSEqnX0Pkrb56cR" target="_blank" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a>
      <a href="https://www.facebook.com/profile.php?id=61589380986354"  target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
    </div>
  </div>

</header>
