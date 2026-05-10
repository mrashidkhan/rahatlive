{{-- resources/views/admin/inquiries/show.blade.php --}}
@extends('layouts.admin')
@section('title', 'Inquiry from ' . $inquiry->name)
@section('admin-content')

<div class="admin-card" style="max-width:680px;">
  <div class="card-header">
    <h3>Inquiry Details</h3>
    <a href="{{ route('admin.inquiries.index') }}">← Back</a>
  </div>
  <div style="padding:1.5rem;display:flex;flex-direction:column;gap:1rem;">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
      <div><label style="font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#888;">Name</label><p style="margin-top:.3rem;font-weight:600;">{{ $inquiry->name }}</p></div>
      <div><label style="font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#888;">Email</label><p style="margin-top:.3rem;"><a href="mailto:{{ $inquiry->email }}" style="color:var(--gold);">{{ $inquiry->email }}</a></p></div>
      <div><label style="font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#888;">Phone</label><p style="margin-top:.3rem;">{{ $inquiry->phone ?? '—' }}</p></div>
      <div><label style="font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#888;">City</label><p style="margin-top:.3rem;">{{ $inquiry->city ?? '—' }}</p></div>
      <div><label style="font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#888;">Received</label><p style="margin-top:.3rem;">{{ $inquiry->created_at->format('M d, Y — g:i A') }}</p></div>
    </div>
    <div>
      <label style="font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#888;">Message</label>
      <div style="margin-top:.5rem;padding:1rem;background:#F8F9FA;border-radius:8px;line-height:1.8;white-space:pre-wrap;">{{ $inquiry->message }}</div>
    </div>
    <div style="display:flex;gap:.75rem;">
      <a href="mailto:{{ $inquiry->email }}?subject=Re: Your Inquiry — rahatlive.com" class="btn-sm-gold" style="padding:.65rem 1.4rem;font-size:.88rem;">Reply by Email</a>
      <form method="POST" action="{{ route('admin.inquiries.destroy', $inquiry) }}" onsubmit="return confirm('Delete this inquiry?')">
        @csrf @method('DELETE')
        <button type="submit" class="btn-danger-link" style="padding:.65rem 1rem;">Delete</button>
      </form>
    </div>
  </div>
</div>
@endsection
