@extends('layouts.app')
@section('title', 'Privacy Policy | Rahat Fateh Ali Khan')

@section('content')
<div class="privacy-wrap">
  <a href="{{ route('home') }}" class="back-link">
    <i class="fa-solid fa-arrow-left"></i>&nbsp; Back to Home
  </a>
  <h1>Privacy Policy</h1>
  <p class="date">Last updated: {{ date('F Y') }}</p>

  <h2>Introduction</h2>
  <p>This Privacy Policy explains how rahatlive.com ("we," "our," or "us") collects, uses, and safeguards your personal information when you visit this website.</p>

  <h2>1. Information We Collect</h2>
  <p>We collect information you voluntarily provide — your name, email address, and city — when you join the Tribe or submit an inquiry via the contact form.</p>

  <h2>2. How We Use Your Information</h2>
  <p>Your information is used solely to: (a) send you notifications about upcoming Rahat Fateh Ali Khan concerts and events, (b) respond to your inquiries, and (c) improve our understanding of fan interest by city.</p>

  <h2>3. Data Storage</h2>
  <p>All form submissions are stored securely. City poll votes are tracked by anonymous session ID — no personal data is linked to poll votes.</p>

  <h2>4. Third-Party Platforms</h2>
  <p>This site links to Spotify, YouTube, Apple Music, Instagram, Facebook, TikTok, and other platforms. We are not responsible for their privacy practices. Please review each platform's policy independently.</p>

  <h2>5. Cookies</h2>
  <p>We use minimal session cookies required for form security (CSRF protection) and to remember your poll vote. We do not use advertising cookies or third-party tracking pixels.</p>

  <h2>6. Your Rights</h2>
  <p>You may request deletion of your data at any time by emailing us at <a href="mailto:privacy@rahatlive.com">privacy@rahatlive.com</a>. We will respond within 30 days.</p>

  <h2>7. Contact</h2>
  <p>Questions about this policy? Email <a href="mailto:privacy@rahatlive.com">privacy@rahatlive.com</a>.</p>
</div>
@endsection
