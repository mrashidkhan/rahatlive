<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('title', 'Rahat Fateh Ali Khan live')</title>
  <meta name="description" content="@yield('description', 'Rahat Fateh Ali Khan — Sufi legend, Qawwali master, Bollywood icon.')">

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon_io/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon_io/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon_io/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('images/favicon_io/site.webmanifest') }}">

  <meta property="og:title"       content="@yield('title', 'Rahat Fateh Ali Khan | Live Shows')" />
  <meta property="og:description" content="@yield('description', 'Sufi legend. Qawwali master. The voice of a generation.')" />
  <meta property="og:image"       content="{{ asset('images/og/rahatliveog.png') }}" />
  <meta property="og:url"         content="{{ url()->current() }}" />
  <meta name="twitter:card"       content="summary_large_image" />

  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Lato:wght@300;400;700&family=Cormorant:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

  <style>
  /* ══════════════════════════════════════════════════════════
     NAV — Exact match to shreyaghoshal.com
     Color-picker confirmed: text #7A3B1E, bg #FFEBCD
     Font: Raleway 700 Bold uppercase — bold & crisp
     Size: 13.5px  Letter-spacing: 0.18em
     Nav height: 100px
  ══════════════════════════════════════════════════════════ */

  #site-header,
  #site-header.scrolled,
  #site-header.solid {
    position:      fixed !important;
    top:           0 !important;
    left:          0 !important;
    right:         0 !important;
    z-index:       9999 !important;
    background:    #FFEBCD !important;
    height:        100px !important;
    display:       flex !important;
    align-items:   center !important;
    padding:       0 clamp(1.5rem, 5vw, 5rem) !important;
    box-shadow:    0 2px 12px rgba(100,50,20,0.10) !important;
    transition:    none !important;
  }

  .header-inner {
    display:         flex !important;
    align-items:     center !important;
    justify-content: space-between !important;
    max-width:       1280px !important;
    margin:          0 auto !important;
    width:           100% !important;
  }

  /* ── Logo ── */
  #site-header .site-logo {
    display:     flex !important;
    align-items: center !important;
    flex-shrink: 0 !important;
  }
  #site-header .logo-img {
    height:  66px !important;
    width:   auto !important;
    display: block !important;
  }
  #site-header .logo-fallback {
    font-family:    'Raleway', sans-serif !important;
    font-size:      18px !important;
    font-weight:    800 !important;
    letter-spacing: 0.2em !important;
    color:          #7A3B1E !important;
    text-transform: uppercase !important;
    display:        none !important;
  }
  #site-header .logo-img[style*="display:none"]  + .logo-fallback,
  #site-header .logo-img[style*="display: none"] + .logo-fallback {
    display: block !important;
  }

  /* ── Desktop nav links
       Raleway 700 Bold — same weight Shreya uses
       #7A3B1E — darker richer brown = bold & visible on cream
       13.5px — slightly larger for crispness
       0.18em letter-spacing — wide, airy like Shreya ── */
  #site-header .main-nav ul {
    display:     flex !important;
    align-items: center !important;
    gap:         3.2rem !important;
    list-style:  none !important;
    margin:      0 !important;
    padding:     0 !important;
  }

  #site-header .main-nav a {
    font-family:     'Raleway', sans-serif !important;
    font-size:       13.5px !important;
    font-weight:     700 !important;
    letter-spacing:  0.18em !important;
    text-transform:  uppercase !important;
    color:           #7A3B1E !important;
    text-decoration: none !important;
    position:        relative !important;
    padding-bottom:  4px !important;
    white-space:     nowrap !important;
    -webkit-font-smoothing: antialiased !important;
    transition:      color 0.22s !important;
  }

  /* Underline slide on hover */
  #site-header .main-nav a::after {
    content:    '' !important;
    position:   absolute !important;
    bottom:     0 !important;
    left:       0 !important;
    width:      0 !important;
    height:     1.5px !important;
    background: #7A3B1E !important;
    transition: width 0.28s ease !important;
  }
  #site-header .main-nav a:hover         { color: #4A1E08 !important; }
  #site-header .main-nav a:hover::after  { width: 100% !important; }

  /* ── Contact Us — same style, slightly stronger ── */
  #site-header .main-nav .nav-tribe {
    font-family:    'Raleway', sans-serif !important;
    font-size:      13.5px !important;
    font-weight:    800 !important;
    letter-spacing: 0.18em !important;
    text-transform: uppercase !important;
    color:          #7A3B1E !important;
    background:     transparent !important;
    border:         none !important;
    padding-bottom: 4px !important;
    white-space:    nowrap !important;
  }
  #site-header .main-nav .nav-tribe:hover        { color: #4A1E08 !important; }
  #site-header .main-nav .nav-tribe::after       { background: #7A3B1E !important; }

  /* ── Hamburger ── */
  #site-header .hamburger {
    display:        none !important;
    flex-direction: column !important;
    gap:            6px !important;
    background:     none !important;
    border:         none !important;
    cursor:         pointer !important;
    padding:        6px !important;
  }
  #site-header .hamburger span {
    display:       block !important;
    width:         26px !important;
    height:        2px !important;
    background:    #7A3B1E !important;
    border-radius: 1px !important;
  }

  /* ── Mobile menu ── */
  .mobile-menu {
    background:  #FFEBCD !important;
    padding-top: 100px !important;
  }
  .mobile-menu nav a {
    font-family:    'Raleway', sans-serif !important;
    font-size:      1.8rem !important;
    font-weight:    700 !important;
    letter-spacing: 0.12em !important;
    color:          #7A3B1E !important;
  }
  .mobile-menu nav a:hover { color: #4A1E08 !important; }
  .mobile-socials a        { color: #7A3B1E !important; }

  /* ── Lock horizontal scroll/drag globally ── */
  html, body {
    overflow-x: hidden !important;
    max-width:  100% !important;
  }
  body { touch-action: pan-y !important; }

  /* ── Wider scrollbar ── */
  html {
    scrollbar-width: auto !important;
    scrollbar-color: #C8A45A #FFEBCD !important;
  }
  ::-webkit-scrollbar             { width: 12px !important; }
  ::-webkit-scrollbar-track       { background: #FFEBCD !important; }
  ::-webkit-scrollbar-thumb       { background: #C8A45A !important; border-radius: 0 !important; }
  ::-webkit-scrollbar-thumb:hover { background: #7A3B1E !important; }

  /* ── Hero below nav ── */
  .hero {
    margin-top: 100px !important;
    height:     calc(100vh - 100px) !important;
  }

  /* ── Mobile ── */
  @media (max-width: 768px) {
    #site-header, #site-header.scrolled { height: 70px !important; }
    #site-header .main-nav  { display: none !important; }
    #site-header .hamburger { display: flex !important; }
    .mobile-menu            { padding-top: 70px !important; }
    .hero { margin-top: 70px !important; height: calc(100vh - 70px) !important; }
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
