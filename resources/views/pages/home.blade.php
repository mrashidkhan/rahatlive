@extends('layouts.app')

@section('title', 'Rahat Fateh Ali Khan | Official Website')
@section('description', 'Official website of Rahat Fateh Ali Khan — Sufi legend, Qawwali master, Bollywood icon.')

@section('content')

  @include('partials.herosection')

  @include('partials.about')

  @include('partials.tour')

  @include('partials.poll')

  @include('partials.tribe')

  @include('partials.contact')

@endsection

@push('scripts')
<script>
window.RFAK = {
  countdownTarget : null,
  pollVoteUrl     : "{{ route('poll.vote') }}",
  pollResultsUrl  : "{{ route('poll.results') }}",
  notifyUrl       : "{{ route('notify.store') }}",
  contactUrl      : "{{ route('contact.store') }}",
  csrfToken       : "{{ csrf_token() }}",
  userVote        : @json($userVote),
};
</script>
@endpush
