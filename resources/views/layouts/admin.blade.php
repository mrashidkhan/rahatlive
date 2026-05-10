<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Admin — @yield('title', 'Dashboard') | Rahat Live</title>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>
<body class="admin-body">

  <aside class="sidebar">
    <div class="sidebar-logo">
      <a href="{{ route('admin.dashboard') }}">
        <span class="logo-3">3Sixty</span><span class="logo-s">shows</span>
      </a>
      <span class="admin-badge">Admin</span>
    </div>
    <nav class="sidebar-nav">
      <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <i class="fa-solid fa-gauge"></i> Dashboard
      </a>
      <a href="{{ route('admin.shows.index') }}" class="{{ request()->routeIs('admin.shows.*') ? 'active' : '' }}">
        <i class="fa-solid fa-calendar-days"></i> Shows
      </a>
      <a href="{{ route('admin.subscribers.index') }}" class="{{ request()->routeIs('admin.subscribers.*') ? 'active' : '' }}">
        <i class="fa-solid fa-users"></i> Subscribers
      </a>
      <a href="{{ route('admin.inquiries.index') }}" class="{{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}">
        <i class="fa-solid fa-envelope"></i> Inquiries
        @php $unread = \App\Models\Inquiry::unread()->count(); @endphp
        @if($unread > 0)
        <span class="badge-pill">{{ $unread }}</span>
        @endif
      </a>
      <hr class="sidebar-sep" />
      <a href="{{ route('home') }}" target="_blank">
        <i class="fa-solid fa-arrow-up-right-from-square"></i> View Site
      </a>
      <form method="POST" action="{{ route('admin.logout') }}" class="sidebar-logout">
        @csrf
        <button type="submit"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
      </form>
    </nav>
  </aside>

  <div class="admin-main">
    <header class="admin-header">
      <h1>@yield('title', 'Dashboard')</h1>
      <div class="admin-user">
        <i class="fa-solid fa-user-circle"></i>
        <span>{{ session('admin_email', 'Admin') }}</span>
      </div>
    </header>

    <div class="admin-content">
      @if(session('success'))
      <div class="alert alert-success"><i class="fa-solid fa-circle-check"></i> {{ session('success') }}</div>
      @endif
      @if(session('error'))
      <div class="alert alert-error"><i class="fa-solid fa-circle-xmark"></i> {{ session('error') }}</div>
      @endif

      @yield('admin-content')
    </div>
  </div>

  <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
