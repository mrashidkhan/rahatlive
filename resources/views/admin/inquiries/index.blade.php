{{-- resources/views/admin/inquiries/index.blade.php --}}
@extends('layouts.admin')
@section('title', 'Inquiries')
@section('admin-content')

<div class="admin-card">
  <div class="card-header">
    <h3>Inquiries ({{ $inquiries->total() }})</h3>
  </div>
  <table class="admin-table">
    <thead><tr><th>Name</th><th>Email</th><th>City</th><th>Date</th><th>Status</th><th>Action</th></tr></thead>
    <tbody>
      @forelse($inquiries as $inq)
      <tr class="{{ !$inq->is_read ? 'unread' : '' }}">
        <td>{{ $inq->name }}</td>
        <td>{{ $inq->email }}</td>
        <td>{{ $inq->city ?? '—' }}</td>
        <td>{{ $inq->created_at->format('M d, Y') }}</td>
        <td>
          @if(!$inq->is_read)
          <span class="status-badge status-upcoming">New</span>
          @else
          <span style="font-size:.75rem;color:#aaa;">Read</span>
          @endif
        </td>
        <td>
          <a href="{{ route('admin.inquiries.show', $inq) }}">View</a>
          <form method="POST" action="{{ route('admin.inquiries.destroy', $inq) }}" style="display:inline;" onsubmit="return confirm('Delete?')">
            @csrf @method('DELETE')
            <button type="submit" class="btn-danger-link">Delete</button>
          </form>
        </td>
      </tr>
      @empty
      <tr><td colspan="6" class="empty-td">No inquiries yet.</td></tr>
      @endforelse
    </tbody>
  </table>
  <div style="padding:1rem 1.4rem;">{{ $inquiries->links() }}</div>
</div>
@endsection
