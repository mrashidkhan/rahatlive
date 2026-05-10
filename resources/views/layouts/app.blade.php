<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('title', 'Rahat Fateh Ali Khan | Official Website')</title>
  <meta name="description" content="@yield('description', 'Official website of Rahat Fateh Ali Khan — Sufi legend, Qawwali master, Bollywood icon.')">
  <meta property="og:title"       content="@yield('title', 'Rahat Fateh Ali Khan | Official Website')" />
  <meta property="og:description" content="@yield('description', 'Sufi legend. Qawwali master. The voice of a generation.')" />
  <meta property="og:image"       content="{{ asset('images/og.jpg') }}" />
  <meta property="og:url"         content="{{ url()->current() }}" />
  <meta name="twitter:card"       content="summary_large_image" />

  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Lato:wght@300;400;700&family=Cormorant:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

  <style>
  /* ═══════════════════════════════════════════════════
     NAV — matches shreyaghoshal.com layout exactly:
     • Single row, ~90px tall
     • Background: #FFEBCD cream, always
     • Logo: left, ~60px tall, transparent PNG on cream
     • Links: right, Lato Bold uppercase
     • "Join the Tribe": maroon, stands out from other links
  ═══════════════════════════════════════════════════ */

  /* ── Container ── */
  #site-header,
  #site-header.scrolled,
  #site-header.solid {
    position:    fixed !important;
    top:         0 !important;
    left:        0 !important;
    right:       0 !important;
    z-index:     9999 !important;
    background:  #FFEBCD !important;
    height:      90px !important;
    display:     flex !important;
    align-items: center !important;
    padding:     0 clamp(1.5rem, 5vw, 5rem) !important;
    box-shadow:  0 2px 18px rgba(59,35,16,0.08) !important;
    border-bottom: 1px solid rgba(139,90,43,0.10) !important;
    transition:  none !important;
  }

  .header-inner {
    display:         flex !important;
    align-items:     center !important;
    justify-content: space-between !important;
    max-width:       1200px !important;
    margin:          0 auto !important;
    width:           100% !important;
  }

  /* ── Logo — left side, exactly like shreyaghoshal.com ── */
  #site-header .site-logo {
    display:     flex !important;
    align-items: center !important;
    flex-shrink: 0 !important;
    line-height: 1 !important;
  }

  #site-header .logo-img {
    height:     62px !important;
    width:      auto !important;
    display:    block !important;
    /* The PNG has transparent bg so it sits cleanly on #FFEBCD */
  }

  #site-header .logo-fallback {
    font-family:    'Cinzel', serif !important;
    font-size:      20px !important;
    font-weight:    600 !important;
    letter-spacing: 0.18em !important;
    text-transform: uppercase !important;
    color:          #2C1810 !important;
    display:        none !important;
  }
  /* Show fallback text only when image fails */
  #site-header .logo-img[style*="display:none"] + .logo-fallback,
  #site-header .logo-img[style*="display: none"] + .logo-fallback {
    display: block !important;
  }

  /* ── Nav links — right side ── */
  #site-header .main-nav ul {
    display:     flex !important;
    align-items: center !important;
    gap:         2.6rem !important;
    list-style:  none !important;
    margin:      0 !important;
    padding:     0 !important;
  }

  #site-header .main-nav a {
    font-family:    'Lato', sans-serif !important;
    font-size:      12.5px !important;
    font-weight:    700 !important;
    letter-spacing: 0.16em !important;
    text-transform: uppercase !important;
    color:          #3B2310 !important;
    text-decoration: none !important;
    position:       relative !important;
    padding-bottom: 3px !important;
    transition:     color 0.2s !important;
  }

  /* Gold underline on hover */
  #site-header .main-nav a::after {
    content:    '' !important;
    position:   absolute !important;
    bottom:     0 !important;
    left:       0 !important;
    width:      0 !important;
    height:     1.5px !important;
    background: #B8893A !important;
    transition: width 0.25s ease !important;
  }
  #site-header .main-nav a:hover { color: #7A4020 !important; }
  #site-header .main-nav a:hover::after { width: 100% !important; }

  /* ── "Join the Tribe" — maroon, exactly like Shreya's site ── */
  #site-header .main-nav .nav-tribe {
    font-family:    'Lato', sans-serif !important;
    font-size:      12.5px !important;
    font-weight:    700 !important;
    letter-spacing: 0.16em !important;
    text-transform: uppercase !important;
    color:          #8B1A2B !important;
    background:     transparent !important;
    border:         none !important;
    padding-bottom: 3px !important;
  }
  #site-header .main-nav .nav-tribe:hover {
    color: #6A1020 !important;
  }
  #site-header .main-nav .nav-tribe::after {
    background: #8B1A2B !important;
  }

  /* ── Hamburger ── */
  #site-header .hamburger {
    display:        none !important;
    flex-direction: column !important;
    gap:            5px !important;
    background:     none !important;
    border:         none !important;
    cursor:         pointer !important;
    padding:        6px !important;
  }
  #site-header .hamburger span {
    display:       block !important;
    width:         24px !important;
    height:        2px !important;
    background:    #3B2310 !important;
    border-radius: 1px !important;
  }

  /* ── Mobile menu ── */
  .mobile-menu {
    background:  #FFEBCD !important;
    padding-top: 90px !important;
  }
  .mobile-menu nav a {
    font-family: 'Cinzel', serif !important;
    font-size:   2rem !important;
    color:       #2C1810 !important;
  }
  .mobile-menu nav a:hover { color: #8B1A2B !important; }
  .mobile-socials a { color: #B8893A !important; }

  /* ── Hero sits directly below 90px nav ── */
  .hero {
    margin-top: 90px !important;
    height:     calc(100vh - 90px) !important;
  }

  /* ── Mobile ── */
  @media (max-width: 768px) {
    #site-header, #site-header.scrolled { height: 68px !important; }
    #site-header .main-nav { display: none !important; }
    #site-header .hamburger { display: flex !important; }
    .hero { margin-top: 68px !important; height: calc(100vh - 68px) !important; }
  }
  </style>

  @stack('styles')
</head>
<body>

  @include('layouts.nav')

  <main>@yield('content')</main>

  @include('layouts.footer')

  <script src="{{ asset('js/app.js') }}"></script>
  @stack('scripts')

</body>
</html>
