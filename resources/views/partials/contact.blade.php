{{-- ═══════════════════════════════════════════════════════
     CONTACT SECTION
     resources/views/partials/contact.blade.php
     Included in home.blade.php via:
       @include('partials.contact')
     ═══════════════════════════════════════════════════════ --}}
<section class="contact-section" id="contact" aria-label="Contact">
  <div class="contact-inner">

    {{-- ── Left: info ── --}}
    <div class="contact-info reveal-left">
      <span class="eyebrow">Get in Touch</span>
      <h2 class="section-title">Contact Us</h2>
      <p>
        For booking inquiries, media requests, or general questions,
        reach out below.
      </p>
      <div class="contact-details">
        <p>
          <i class="fa-regular fa-envelope"></i>
          <a href="mailto:booking@rahatlive.com">booking@rahatlive.com</a>
        </p>
      </div>
    </div>

    {{-- ── Right: form ── --}}
    <form id="contact-form" class="contact-form reveal-right" novalidate>
      @csrf

      <div class="cf-two">
        <div class="cf-group">
          <label for="c-name">Full Name *</label>
          <input type="text"
                 id="c-name" name="name"
                 placeholder="Your name"
                 required autocomplete="name" />
        </div>
        <div class="cf-group">
          <label for="c-email">Email *</label>
          <input type="email"
                 id="c-email" name="email"
                 placeholder="your@email.com"
                 required autocomplete="email" />
        </div>
      </div>

      <div class="cf-two">
        <div class="cf-group">
          <label for="c-phone">Phone</label>
          <input type="tel"
                 id="c-phone" name="phone"
                 placeholder="+1 (000) 000-0000"
                 autocomplete="tel" />
        </div>
        <div class="cf-group">
          <label for="c-city">City</label>
          <input type="text"
                 id="c-city" name="city"
                 placeholder="Your city" />
        </div>
      </div>

      <div class="cf-group">
        <label for="c-message">Message *</label>
        <textarea id="c-message" name="message"
                  rows="5"
                  placeholder="Your message…"
                  required></textarea>
      </div>

      <button type="submit"
              class="btn-primary"
              style="width:100%; justify-content:center; margin-top:0.5rem">
        Send Message
      </button>

      <div class="form-msg" id="contact-msg"></div>

    </form>

  </div>
</section>
