<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Contact Form Submission</title>
</head>
<body style="margin:0;padding:0;background:#f5f0ea;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;">

  <table width="100%" cellpadding="0" cellspacing="0" style="background:#f5f0ea;padding:40px 20px;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;">

          {{-- ── Header ── --}}
          <tr>
            <td style="background:#0C1F0E;padding:32px 40px;border-radius:8px 8px 0 0;text-align:center;">
              <p style="margin:0 0 8px;font-size:11px;letter-spacing:0.3em;text-transform:uppercase;color:#C8A45A;">
                Rahat Live · rahatlive.com
              </p>
              <h1 style="margin:0;font-size:22px;font-weight:400;color:#ffffff;letter-spacing:0.05em;">
                New Contact Form Submission
              </h1>
            </td>
          </tr>

          {{-- ── Alert bar ── --}}
          <tr>
            <td style="background:#C8A45A;padding:10px 40px;text-align:center;">
              <p style="margin:0;font-size:12px;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;color:#1A0800;">
                Received {{ $submittedAt }}
              </p>
            </td>
          </tr>

          {{-- ── Body ── --}}
          <tr>
            <td style="background:#ffffff;padding:36px 40px;">

              <p style="margin:0 0 24px;font-size:15px;color:#333;line-height:1.6;">
                A visitor submitted the contact form on <strong>rahatlive.com</strong>.
                Details are below. Reply directly to this email to respond to them.
              </p>

              {{-- Fields table --}}
              <table width="100%" cellpadding="0" cellspacing="0"
                     style="border:1px solid #e8e0d6;border-radius:6px;overflow:hidden;">

                <tr style="background:#faf7f3;">
                  <td style="padding:12px 18px;font-size:11px;font-weight:700;letter-spacing:0.12em;
                              text-transform:uppercase;color:#7A3B1E;width:130px;border-bottom:1px solid #e8e0d6;">
                    Full Name
                  </td>
                  <td style="padding:12px 18px;font-size:14px;color:#222;border-bottom:1px solid #e8e0d6;">
                    {{ $senderName }}
                  </td>
                </tr>

                <tr>
                  <td style="padding:12px 18px;font-size:11px;font-weight:700;letter-spacing:0.12em;
                              text-transform:uppercase;color:#7A3B1E;border-bottom:1px solid #e8e0d6;">
                    Email
                  </td>
                  <td style="padding:12px 18px;font-size:14px;border-bottom:1px solid #e8e0d6;">
                    <a href="mailto:{{ $senderEmail }}"
                       style="color:#0C1F0E;text-decoration:none;font-weight:600;">
                      {{ $senderEmail }}
                    </a>
                  </td>
                </tr>

                <tr style="background:#faf7f3;">
                  <td style="padding:12px 18px;font-size:11px;font-weight:700;letter-spacing:0.12em;
                              text-transform:uppercase;color:#7A3B1E;border-bottom:1px solid #e8e0d6;">
                    Phone
                  </td>
                  <td style="padding:12px 18px;font-size:14px;color:#222;border-bottom:1px solid #e8e0d6;">
                    {{ $phone }}
                  </td>
                </tr>

                <tr>
                  <td style="padding:12px 18px;font-size:11px;font-weight:700;letter-spacing:0.12em;
                              text-transform:uppercase;color:#7A3B1E;border-bottom:1px solid #e8e0d6;">
                    City
                  </td>
                  <td style="padding:12px 18px;font-size:14px;color:#222;border-bottom:1px solid #e8e0d6;">
                    {{ $city }}
                  </td>
                </tr>

                <tr style="background:#faf7f3;">
                  <td style="padding:12px 18px;font-size:11px;font-weight:700;letter-spacing:0.12em;
                              text-transform:uppercase;color:#7A3B1E;vertical-align:top;">
                    Message
                  </td>
                  <td style="padding:12px 18px;font-size:14px;color:#222;line-height:1.7;white-space:pre-wrap;">
                    {{ $userMessage }}
                  </td>
                </tr>

              </table>

              {{-- Reply CTA --}}
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:28px;">
                <tr>
                  <td align="center">
                    <a href="mailto:{{ $senderEmail }}?subject=Re: Your enquiry — Rahat Live"
                       style="display:inline-block;background:#0C1F0E;color:#ffffff;font-size:12px;
                              font-weight:700;letter-spacing:0.18em;text-transform:uppercase;
                              padding:14px 32px;text-decoration:none;border-radius:2px;">
                      Reply to {{ $senderName }}
                    </a>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          {{-- ── Footer ── --}}
          <tr>
            <td style="background:#0C1F0E;padding:20px 40px;border-radius:0 0 8px 8px;text-align:center;">
              <p style="margin:0;font-size:11px;color:rgba(255,255,255,0.4);letter-spacing:0.08em;">
                This email was generated automatically by rahatlive.com<br>
                3Sixtyshows LLC · Dallas, TX
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>

</body>
</html>
