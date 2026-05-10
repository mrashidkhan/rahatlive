@extends('layouts.admin')
@section('title', 'Dashboard')

@section('admin-content')

<div class="stats-grid">
  <div class="stat-card">
    <div class="stat-icon gold"><i class="fa-solid fa-calendar-days"></i></div>
    <div class="stat-body">
      <span class="stat-num">{{ $stats['upcoming'] }}</span>
      <span class="stat-lbl">Upcoming Shows</span>
    </div>
  </div>
  <div class="stat-card">
    <div class="stat-icon maroon"><i class="fa-solid fa-users"></i></div>
    <div class="stat-body">
      <span class="stat-num">{{ number_format($stats['subscribers']) }}</span>
      <span class="stat-lbl">Subscribers</span>
    </div>
  </div>
  <div class="stat-card">
    <div class="stat-icon navy"><i class="fa-solid fa-envelope"></i></div>
    <div class="stat-body">
      <span class="stat-num">{{ $stats['inquiries'] }}</span>
      <span class="stat-lbl">Inquiries
        @if($stats['unread'] > 0)
          <span class="badge-pill ml-1">{{ $stats['unread'] }} new</span>
        @endif
      </span>
    </div>
  </div>
  <div class="stat-card">
    <div class="stat-icon green"><i class="fa-solid fa-chart-bar"></i></div>
    <div class="stat-body">
      <span class="stat-num">{{ number_format($stats['total_votes']) }}</span>
      <span class="stat-lbl">Poll Votes
        @if($topCity) — <em>{{ $topCity->city }}</em> leading @endif
      </span>
    </div>
  </div>
</div>

<div class="admin-two-col">
  <div class="admin-card">
    <div class="card-header">
      <h3>Recent Inquiries</h3>
      <a href="{{ route('admin.inquiries.index') }}">View all →</a>
    </div>
    <table class="admin-table">
      <thead><tr><th>Name</th><th>Email</th><th>City</th><th>Date</th><th></th></tr></thead>
      <tbody>
        @forelse($recentInquiries as $inq)
        <tr class="{{ !$inq->is_read ? 'unread' : '' }}">
          <td>{{ $inq->name }}</td>
          <td>{{ $inq->email }}</td>
          <td>{{ $inq->city ?? '—' }}</td>
          <td>{{ $inq->created_at->format('M d') }}</td>
          <td><a href="{{ route('admin.inquiries.show', $inq) }}">View</a></td>
        </tr>
        @empty
        <tr><td colspan="5" class="empty-td">No inquiries yet.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div class="admin-card">
    <div class="card-header">
      <h3>Recent Subscribers</h3>
      <a href="{{ route('admin.subscribers.index') }}">View all →</a>
    </div>
    <table class="admin-table">
      <thead><tr><th>Name</th><th>Email</th><th>City</th><th>Joined</th></tr></thead>
      <tbody>
        @forelse($recentSubscribers as $sub)
        <tr>
          <td>{{ $sub->name }}</td>
          <td>{{ $sub->email }}</td>
          <td>{{ $sub->city ?? '—' }}</td>
          <td>{{ $sub->created_at->format('M d') }}</td>
        </tr>
        @empty
        <tr><td colspan="4" class="empty-td">No subscribers yet.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

<div class="admin-card mt-6">
  <div class="card-header">
    <h3>Upcoming Shows</h3>
    <a href="{{ route('admin.shows.create') }}" class="btn-sm-gold">+ Add Show</a>
  </div>
  <table class="admin-table">
    <thead><tr><th>City</th><th>Venue</th><th>Date</th><th>Status</th><th>Tickets</th><th>Actions</th></tr></thead>
    <tbody>
      @foreach(\App\Models\Show::upcoming()->take(6)->get() as $show)
      <tr>
        <td><strong>{{ $show->city }}, {{ $show->state }}</strong></td>
        <td>{{ $show->venue ?? '—' }}</td>
        <td>{{ $show->formatted_date }}</td>
        <td><span class="status-badge status-{{ $show->status }}">{{ $show->status_label }}</span></td>
        <td>{{ $show->ticket_url ? '✓' : '—' }}</td>
        <td>
          <a href="{{ route('admin.shows.edit', $show) }}">Edit</a>
          <form method="POST" action="{{ route('admin.shows.destroy', $show) }}" style="display:inline;" onsubmit="return confirm('Delete this show?')">
            @csrf @method('DELETE')
            <button type="submit" class="btn-danger-link">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
