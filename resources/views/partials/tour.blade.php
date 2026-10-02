{{-- ═══════════════════════════════════════════════════════
     UPCOMING SHOWS SECTION
     resources/views/partials/tour.blade.php
     Included in home.blade.php via:
       @include('partials.tour')
     ═══════════════════════════════════════════════════════ --}}
<section class="tour-section" id="tour" aria-label="Upcoming shows">

  <div class="section-header-row">
    <div>
      <span class="eyebrow">On Tour</span>
      <h2 class="section-title">Upcoming Shows</h2>
    </div>
    <a href="#contact" class="tour-city-request">
      Don't see your city? <span>Request it →</span>
    </a>
  </div>

  <div class="poster-grid">
    @php
      $cities = [


        [
          'city'       => 'Boston, MA',
          'slug'       => 'boston',
          'date'       => 'Fri • Oct 02, 2026 • 8:00 PM',
          'venue'      => 'Agganis Arena',
          'ticket_url' => 'https://www.ticketmaster.com/rahat-fateh-ali-khan-boston-massachusetts-10-02-2026/event/0100649EF00F19C5',
          'btn_label'  => 'Buy Tickets',
        ],
        [
          'city'       => 'Uniondale, NY',
          'slug'       => 'newyork',
          'date'       => 'Sat • Oct 03, 2026 • 8:00 PM',
          'venue'      => 'UBS Arena',
          'ticket_url' => 'https://www.ticketmaster.com/event/00006486D4A6C91E',
          'btn_label'  => 'Buy Tickets',
        ],
        [
          'city'       => 'Oxon Hill, MD',
          'slug'       => 'oxenhill',
          'date'       => 'Sun • Oct 04, 2026 • 8:00 PM',
          'venue'      => 'The Theater at MGM National Harbor',
          'ticket_url' => 'https://www.ticketmaster.com/rahat-fateh-ali-khan-national-harbor-maryland-10-04-2026/event/150064ADEE29D24F',
          'btn_label'  => 'Buy Tickets',
        ],
        [
          'city'       => 'Trenton, NJ',
          'slug'       => 'newjersey',
          'date'       => 'Sat • Oct 10, 2026 • 8:00 PM',
          'venue'      => 'CURE Insurance Arena',
          'ticket_url' => 'https://www.ticketmaster.com/event/000064830EB4F88B',
          'btn_label'  => 'Buy Tickets',
        ],




      ];
    @endphp

    @foreach($cities as $i => $show)
    <div class="poster-card reveal" style="--d:{{ $i * 0.1 }}s">
      <div class="poster-img-wrap">
        <img src="{{ asset('images/posters/poster-' . $show['slug'] . '.jpg') }}"
             alt="Rahat Fateh Ali Khan — {{ $show['city'] }}"
             class="poster-img"
             loading="lazy"
             onerror="this.closest('.poster-img-wrap').classList.add('poster-img--missing')" />
        <div class="poster-overlay">
          @if($show['ticket_url'])
            {{-- Confirmed show — opens Ticketmaster in new tab --}}
            <a href="{{ $show['ticket_url'] }}"
               target="_blank"
               rel="noopener noreferrer"
               class="poster-ticket-btn poster-ticket-btn--live">
              {{ $show['btn_label'] }}
            </a>
          @else
            {{-- Not yet on sale — scrolls to contact/notify form --}}
            <a href="#contact" class="poster-ticket-btn">
              {{ $show['btn_label'] }}
            </a>
          @endif
        </div>
      </div>
      <div class="poster-meta">
        <p class="poster-city">{{ $show['city'] }}</p>
        @if(!empty($show['venue']))
          <p class="poster-venue">{{ $show['venue'] }}</p>
        @endif
        <p class="poster-date">{{ $show['date'] }}</p>
      </div>
    </div>
    @endforeach

  </div>{{-- /poster-grid --}}

</section>

@push('styles')
<style>
  /* Venue name in poster meta */
  .poster-venue {
    font-size:      0.72rem;
    font-weight:    500;
    letter-spacing: 0.08em;
    color:          var(--events-muted);
    margin-bottom:  0.2rem;
    text-transform: uppercase;
  }

  /* "Buy Tickets" button — gold accent when show is live */
  .poster-ticket-btn--live {
    background:  #C8A45A !important;
    color:       #1A0800 !important;
    font-weight: 800 !important;
  }
  .poster-ticket-btn--live:hover {
    background: #DEB96E !important;
    transform:  translateY(0) !important;
  }
</style>
@endpush
