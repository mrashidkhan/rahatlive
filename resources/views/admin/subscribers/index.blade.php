{{-- resources/views/admin/subscribers/index.blade.php --}}
@extends('layouts.admin')
@section('title', 'Subscribers')
@section('admin-content')

<div class="admin-card">
  <div class="card-header">
    <h3>Subscribers ({{ $subscribers->total() }})</h3>
    <a href="{{ route('admin.subscribers.export') }}" class="btn-sm-gold">⬇ Export CSV</a>
  </div>

  <div style="padding:.75rem 1.4rem;border-bottom:1px solid #E2E4E8;">
    <form method="GET" style="display:flex;gap:.5rem;max-width:360px;">
      <input type="text" name="search" value="{{ request('search') }}" placeholder="Search name or email…"
             style="flex:1;padding:.5rem .8rem;border:1px solid #ddd;border-radius:6px;font-size:.85rem;" />
      <button type="submit" style="padding:.5rem 1rem;background:var(--gold);border:none;border-radius:6px;font-weight:700;cursor:pointer;">Search</button>
    </form>
  </div>

  <table class="admin-table">
    <thead><tr><th>Name</th><th>Email</th><th>City</th><th>Joined</th><th>Action</th></tr></thead>
    <tbody>
      @forelse($subscribers as $sub)
      <tr>
        <td>{{ $sub->name }}</td>
        <td>{{ $sub->email }}</td>
        <td>{{ $sub->city ?? '—' }}</td>
        <td>{{ $sub->created_at->format('M d, Y') }}</td>
        <td>
          <form method="POST" action="{{ route('admin.subscribers.destroy', $sub) }}" onsubmit="return confirm('Remove subscriber?')">
            @csrf @method('DELETE')
            <button type="submit" class="btn-danger-link">Remove</button>
          </form>
        </td>
      </tr>
      @empty
      <tr><td colspan="5" class="empty-td">No subscribers yet.</td></tr>
      @endforelse
    </tbody>
  </table>
  <div style="padding:1rem 1.4rem;">{{ $subscribers->withQueryString()->links() }}</div>
</div>
@endsection
