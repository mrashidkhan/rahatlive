<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>We received your message</title>
</head>
<body style="margin:0;padding:0;background:#f5f0ea;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;">

  <table width="100%" cellpadding="0" cellspacing="0" style="background:#f5f0ea;padding:40px 20px;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;">

          {{-- ── Header ── --}}
          <tr>
            <td style="background:#0C1F0E;padding:40px 40px 32px;border-radius:8px 8px 0 0;text-align:center;">

              {{-- Logo text --}}
              <p style="margin:0 0 6px;font-size:10px;letter-spacing:0.35em;
                         text-transform:uppercase;color:#C8A45A;">
                Official Website
              </p>
              <h1 style="margin:0 0 4px;font-size:28px;font-weight:300;color:#ffffff;
                          letter-spacing:0.08em;text-transform:uppercase;">
                Rahat Fateh Ali Khan
              </h1>
              <p style="margin:0;font-size:10px;letter-spacing:0.25em;
                         text-transform:uppercase;color:rgba(200,164,90,0.6);">
                rahatlive.com
              </p>

              {{-- Gold divider --}}
              <table width="60" cellpadding="0" cellspacing="0" style="margin:20px auto 0;">
                <tr><td style="height:1px;background:#C8A45A;"></td></tr>
              </table>
            </td>
          </tr>

          {{-- ── Body ── --}}
          <tr>
            <td style="background:#ffffff;padding:40px 40px 32px;">

              <h2 style="margin:0 0 16px;font-size:20px;font-weight:400;color:#0C1F0E;
                          letter-spacing:0.04em;">
                Thank you, {{ $senderName }}.
              </h2>

              <p style="margin:0 0 18px;font-size:15px;color:#444;line-height:1.7;">
                We have received your message and our team at
                <strong style="color:#0C1F0E;">3Sixtyshows LLC</strong> will review
                it shortly.
              </p>

              <p style="margin:0 0 28px;font-size:15px;color:#444;line-height:1.7;">
                We typically respond within <strong>1–2 business days</strong>.
                If your enquiry is urgent, please reply to this email and we will
                prioritise it.
              </p>

              {{-- Message recap --}}
              <table width="100%" cellpadding="0" cellspacing="0"
                     style="background:#faf7f3;border-left:3px solid #C8A45A;
                             border-radius:0 4px 4px 0;margin-bottom:28px;">
                <tr>
                  <td style="padding:16px 20px;">
                    <p style="margin:0 0 6px;font-size:10px;font-weight:700;
                                letter-spacing:0.15em;text-transform:uppercase;color:#7A3B1E;">
                      Your message
                    </p>
                    <p style="margin:0;font-size:13px;color:#555;line-height:1.7;
                                white-space:pre-wrap;font-style:italic;">
                      "{{ $userMessage }}"
                    </p>
                  </td>
                </tr>
              </table>

              {{-- Divider --}}
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:24px;">
                <tr><td style="height:1px;background:#e8e0d6;"></td></tr>
              </table>

              {{-- Tour CTA --}}
              <p style="margin:0 0 20px;font-size:14px;color:#555;line-height:1.6;">
                While you wait, why not explore the upcoming shows?
              </p>

              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center">
                    <a href="https://rahatlive.com/tour"
                       style="display:inline-block;background:#0C1F0E;color:#ffffff;
                              font-size:11px;font-weight:700;letter-spacing:0.2em;
                              text-transform:uppercase;padding:14px 36px;
                              text-decoration:none;border-radius:2px;">
                      View Tour Dates
                    </a>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          {{-- ── Social row ── --}}
          <tr>
            <td style="background:#1a1208;padding:20px 40px;text-align:center;">
              <p style="margin:0 0 12px;font-size:11px;letter-spacing:0.12em;
                         text-transform:uppercase;color:rgba(255,255,255,0.4);">
                Follow Rahat Fateh Ali Khan
              </p>
              <table cellpadding="0" cellspacing="0" style="margin:0 auto;">
                <tr>
                  <td style="padding:0 8px;">
                    <a href="https://www.instagram.com/ustadrahatalikhan2026"
                       style="color:#C8A45A;font-size:12px;text-decoration:none;
                               letter-spacing:0.1em;">Instagram</a>
                  </td>
                  <td style="color:rgba(200,164,90,0.3);font-size:10px;">|</td>
                  <td style="padding:0 8px;">
                    <a href="https://open.spotify.com/artist/7uIbLdzzSEqnX0Pkrb56cR"
                       style="color:#C8A45A;font-size:12px;text-decoration:none;
                               letter-spacing:0.1em;">Spotify</a>
                  </td>
                  <td style="color:rgba(200,164,90,0.3);font-size:10px;">|</td>
                  <td style="padding:0 8px;">
                    <a href="https://www.facebook.com/profile.php?id=61589380986354"
                       style="color:#C8A45A;font-size:12px;text-decoration:none;
                               letter-spacing:0.1em;">Facebook</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          {{-- ── Footer ── --}}
          <tr>
            <td style="background:#0C1F0E;padding:18px 40px;border-radius:0 0 8px 8px;text-align:center;">
              <p style="margin:0;font-size:10px;color:rgba(255,255,255,0.35);letter-spacing:0.08em;
                          line-height:1.6;">
                You are receiving this because you submitted a form on rahatlive.com<br>
                3Sixtyshows LLC · Dallas, TX ·
                <a href="https://rahatlive.com" style="color:rgba(200,164,90,0.5);text-decoration:none;">
                  rahatlive.com
                </a>
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>

</body>
</html>
