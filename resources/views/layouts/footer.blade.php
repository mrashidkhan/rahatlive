<footer class="site-footer">
  <div class="footer-inner">

    <div class="footer-logo-area">
      <img src="{{ asset('images/rahat-logo-white.png') }}"
           alt="Rahat Fateh Ali Khan"
           class="footer-logo-img"
           onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" />
      <span class="footer-logo-fallback">RAHAT FATEH ALI KHAN</span>
    </div>

    <nav class="footer-nav" aria-label="Footer">
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('home') }}#tour">Tour</a></li>
        <li><a href="{{ route('home') }}#about">About Rahat</a></li>
        <li><a href="{{ route('home') }}#contact">Contact</a></li>
        <li><a href="{{ route('home') }}#tribe">Join the Tribe</a></li>
        <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
      </ul>
    </nav>

    <div class="footer-socials">
      <a href="https://www.instagram.com/ustadrahatalikhan2026" target="_blank" rel="noopener" aria-label="Instagram">
        <i class="fa-brands fa-instagram"></i>
      </a>
      <a href="https://x.com/RLive54532" target="_blank" rel="noopener" aria-label="X / Twitter">
        <i class="fa-brands fa-x-twitter"></i>
      </a>
      {{-- <a href="https://www.youtube.com/@RahatFatehAliKhanOfficial" target="_blank" rel="noopener" aria-label="YouTube">
        <i class="fa-brands fa-youtube"></i>
      </a> --}}
      <a href="https://www.facebook.com/profile.php?id=61589380986354" target="_blank" rel="noopener" aria-label="Facebook">
        <i class="fa-brands fa-facebook-f"></i>
      </a>
      {{-- <a href="https://whatsapp.com/channel/rahatfatehali" target="_blank" rel="noopener" aria-label="WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
      </a> --}}
    </div>

    <p class="footer-copy">&copy; {{ date('Y') }}. All Rights Reserved.</p>

  </div>
</footer>
