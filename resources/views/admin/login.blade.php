<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login | Rahat Live</title>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>
<body class="admin-body">
<div class="admin-login-wrap">
  <div class="login-box">
    <div class="login-logo">
      <span class="logo-3">3Sixty</span><span class="logo-s">shows</span>
    </div>
    <h2>Admin Panel</h2>
    <p class="sub">rahatlive.com</p>

    @if(session('error'))
    <div class="alert alert-error" style="margin-bottom:1rem;">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.login.post') }}">
      @csrf
      <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email" value="{{ old('email') }}" required autofocus />
        @error('email') <span class="input-error">{{ $message }}</span> @enderror
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" required />
      </div>
      <button type="submit" class="login-btn">Sign In</button>
    </form>
    <p style="text-align:center;margin-top:1.2rem;font-size:0.78rem;color:#888;">
      <a href="{{ route('home') }}" style="color:#C9973A;">← Back to Site</a>
    </p>
  </div>
</div>
</body>
</html>
