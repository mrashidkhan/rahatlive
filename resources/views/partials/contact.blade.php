{{-- ═══════════════════════════════════════════════════════
     CONTACT SECTION
     resources/views/partials/contact.blade.php
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
          <a href="mailto:info@rahatlive.com">info@rahatlive.com</a>
        </p>
      </div>
    </div>

    {{-- ── Right: form ── --}}
    <div class="contact-form-wrap reveal-right">

      {{-- ✅ SUCCESS / ERROR MESSAGE ── --}}
      @if(session('success'))
        <div class="form-msg-banner success" role="alert">
          {{ session('success') }}
        </div>
      @endif

      @if(session('error'))
        <div class="form-msg-banner error" role="alert">
          {{ session('error') }}
        </div>
      @endif

      @if($errors->any())
        <div class="form-msg-banner error" role="alert">
          @foreach($errors->all() as $error)
            {{ $error }}<br>
          @endforeach
        </div>
      @endif

      <form id="contact-form"
            action="{{ route('contact.store') }}"
            method="POST"
            class="contact-form">
        @csrf

        <div class="cf-two">
          <div class="cf-group">
            <label for="c-name">Full Name *</label>
            <input type="text"
                   id="c-name" 
                   name="name"
                   value="{{ old('name') }}"
                   placeholder="Your name"
                   required 
                   autocomplete="name" />
          </div>
          <div class="cf-group">
            <label for="c-email">Email *</label>
            <input type="email"
                   id="c-email" 
                   name="email"
                   value="{{ old('email') }}"
                   placeholder="your@email.com"
                   required 
                   autocomplete="email" />
          </div>
        </div>

        <div class="cf-two">
          <div class="cf-group">
            <label for="c-phone">Phone</label>
            <input type="tel"
                   id="c-phone" 
                   name="phone"
                   value="{{ old('phone') }}"
                   placeholder="+1 (000) 000-0000"
                   autocomplete="tel" />
          </div>
          <div class="cf-group">
            <label for="c-city">City</label>
            <input type="text"
                   id="c-city" 
                   name="city"
                   value="{{ old('city') }}"
                   placeholder="Your city" />
          </div>
        </div>

        <div class="cf-group">
          <label for="c-message">Message *</label>
          <textarea id="c-message" 
                    name="message"
                    rows="5"
                    placeholder="Your message…"
                    required>{{ old('message') }}</textarea>
        </div>

        <button type="submit"
                class="btn-primary"
                style="width:100%; justify-content:center; margin-top:0.5rem">
          Send Message
        </button>

      </form>
    </div>

  </div>
</section>

@push('styles')
<style>
/* ── Message banner above the form ── */
.form-msg-banner {
  padding:       1rem 1.25rem;
  border-radius: 3px;
  margin-bottom: 1.2rem;
  font-size:     0.9rem;
  font-weight:   600;
  line-height:   1.5;
  border-left:   4px solid;
}
.form-msg-banner.success {
  background:   #f0faf3;
  border-color: #2E7D4F;
  color:        #1B5E35;
}
.form-msg-banner.error {
  background:   #fff5f5;
  border-color: #C0392B;
  color:        #922B21;
}
</style>
@endpush