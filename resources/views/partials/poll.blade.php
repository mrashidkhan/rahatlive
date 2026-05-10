{{-- ═══════════════════════════════════════════════════════
     POLL SECTION — Fan City Vote
     resources/views/partials/poll.blade.php
     Included in home.blade.php via:
       @include('partials.poll')
     ═══════════════════════════════════════════════════════ --}}
<section class="poll-section" id="poll" aria-label="City vote poll">
  <div class="poll-inner">

    {{-- ── Left: heading ── --}}
    <div class="poll-text reveal-left">
      <span class="eyebrow light">Fan Vote</span>
      <h2 class="section-title" style="color:#fff; margin-bottom:0.75rem">
        Which City Should<br>
        <em>Rahat Visit Next?</em>
      </h2>
      <p style="color:rgba(255,255,255,0.4); font-size:0.9rem; line-height:1.8; margin-top:1rem">
        Your vote shapes the tour.<br>Cast it now.
      </p>
    </div>

    {{-- ── Right: poll widget ── --}}
    <div class="poll-widget reveal-right"
         id="poll-widget"
         data-user-vote="{{ $userVote ?? '' }}"
         data-vote-url="{{ route('poll.vote') }}"
         data-results-url="{{ route('poll.results') }}">

      <div id="poll-items">
        @foreach($pollData as $item)
        @php $isLeader = $loop->first && $userVote; @endphp
        <div class="poll-row
                    {{ $item['city'] === $userVote ? 'voted' : '' }}
                    {{ $isLeader ? 'leader' : '' }}"
             data-city="{{ $item['city'] }}"
             role="{{ $userVote ? 'presentation' : 'button' }}"
             @unless($userVote) tabindex="0" aria-label="Vote for {{ $item['city'] }}" @endunless>

          <div class="pr-bg" style="width:{{ $userVote ? $item['pct'] : 0 }}%"></div>

          <span class="pr-city">
            {{ $item['city'] }}
            @if($isLeader)<span class="pr-tag">Leading</span>@endif
            @if($item['city'] === $userVote)<i class="fa-solid fa-check pr-check"></i>@endif
          </span>

          <div class="pr-bar">
            <div class="pr-fill" style="width:{{ $userVote ? $item['pct'] : 0 }}%"></div>
          </div>

          <span class="pr-pct">{{ $userVote ? $item['pct'].'%' : '' }}</span>

        </div>
        @endforeach
      </div>

      <div class="poll-footer">
        <p id="poll-note" class="poll-note">
          {{ $userVote
             ? "Voted for {$userVote} · {$totalVotes} total votes"
             : 'Select your city to cast your vote' }}
        </p>
        @if($userVote)
        <button id="poll-reset" class="poll-reset">Reset Vote</button>
        @endif
      </div>

    </div>{{-- /poll-widget --}}
  </div>
</section>
