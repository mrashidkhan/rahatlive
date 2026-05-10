{{-- resources/views/emails/inquiry.blade.php --}}
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><style>
body{font-family:Arial,sans-serif;background:#f4f4f4;padding:2rem;}
.card{background:#fff;padding:2rem;border-radius:8px;max-width:580px;margin:0 auto;}
h2{color:#7B1C2E;}
.field{margin:1rem 0;}
.label{font-size:.8rem;text-transform:uppercase;color:#888;letter-spacing:.1em;}
.val{font-size:1rem;color:#333;margin-top:.25rem;}
.msg{background:#f8f8f8;padding:1rem;border-radius:6px;white-space:pre-wrap;line-height:1.7;}
.footer{font-size:.75rem;color:#aaa;text-align:center;margin-top:2rem;}
</style></head>
<body>
<div class="card">
  <h2>New Inquiry — rahatlive.com</h2>
  <div class="field"><div class="label">Name</div><div class="val">{{ $inquiry->name }}</div></div>
  <div class="field"><div class="label">Email</div><div class="val"><a href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a></div></div>
  @if($inquiry->phone)<div class="field"><div class="label">Phone</div><div class="val">{{ $inquiry->phone }}</div></div>@endif
  @if($inquiry->city)<div class="field"><div class="label">City</div><div class="val">{{ $inquiry->city }}</div></div>@endif
  <div class="field"><div class="label">Message</div><div class="msg">{{ $inquiry->message }}</div></div>
  <div class="field"><div class="label">Received</div><div class="val">{{ $inquiry->created_at->format('F j, Y — g:i A') }}</div></div>
</div>
<div class="footer">3Sixtyshows LLC · Dallas, TX · rahatlive.com</div>
</body>
</html>
