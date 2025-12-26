@php
  $appName = config('app.name');
  $logoUrl = asset('assets/images/logo.png'); // <-- اپنا logo path
@endphp

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="margin:0;padding:0;background:#f4f6fb;font-family:Arial,Helvetica,sans-serif;">
  <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f4f6fb;padding:28px 0;">
    <tr>
      <td align="center">

        <table role="presentation" width="640" cellspacing="0" cellpadding="0" style="width:640px;max-width:94%;background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 6px 22px rgba(0,0,0,.08);">
          
          <!-- Header -->
          <tr>
            <td style="background:#5969ff;padding:18px 22px;text-align:center;">
              <img src="{{ $logoUrl }}" alt="{{ $appName }}" style="height:52px;display:block;margin:0 auto 8px;">
              <div style="color:#ffffff;font-size:15px;font-weight:600;letter-spacing:.2px;">
                {{ $appName }}
              </div>
            </td>
          </tr>

          <!-- Title -->
          <tr>
            <td style="padding:22px 22px 10px;">
              <h2 style="margin:0;font-size:20px;color:#111827;">
                Thank you {{ $booking->first_name }}!
              </h2>
              <p style="margin:6px 0 0;font-size:13px;line-height:1.7;color:#6b7280;">
                We received your booking request. Here are your details:
              </p>
            </td>
          </tr>

          <!-- Panel -->
          <tr>
            <td style="padding:0 22px 18px;">
              <div style="border:1px solid #e5e7eb;border-radius:10px;background:#fafbff;padding:14px 16px;">
                <table width="100%" cellspacing="0" cellpadding="0" style="font-size:13px;color:#111827;">
                  <tr>
                    <td style="padding:7px 0;color:#6b7280;width:36%;">Name</td>
                    <td style="padding:7px 0;font-weight:600;">{{ $booking->first_name }} {{ $booking->last_name }}</td>
                  </tr>
                  <tr>
                    <td style="padding:7px 0;color:#6b7280;">Email</td>
                    <td style="padding:7px 0;font-weight:600;">{{ $booking->email }}</td>
                  </tr>
                  <tr>
                    <td style="padding:7px 0;color:#6b7280;">Phone</td>
                    <td style="padding:7px 0;font-weight:600;">{{ $booking->phone }}</td>
                  </tr>
                  <tr>
                    <td style="padding:7px 0;color:#6b7280;">Pickup</td>
                    <td style="padding:7px 0;font-weight:600;">{{ $booking->pickup_address }}</td>
                  </tr>
                  <tr>
                    <td style="padding:7px 0;color:#6b7280;">Dropoff</td>
                    <td style="padding:7px 0;color:#111827;font-weight:600;">{{ $booking->dropoff_address }}</td>
                  </tr>
                  <tr>
                    <td style="padding:7px 0;color:#6b7280;">Appointment Date</td>
                    <td style="padding:7px 0;font-weight:600;">
                      {{ date('d-m-Y', strtotime($booking->appointment_date)); }}
                    </td>
                  </tr>
                  <tr>
                    <td style="padding:7px 0;color:#6b7280;">Appointment Time</td>
                    <td style="padding:7px 0;font-weight:600;">
                      {{ date('H:i', strtotime($booking->appointment_time)) }}
                    </td>
                  </tr>
                  <tr>
                    <td style="padding:7px 0;color:#6b7280;">Trip Type</td>
                    <td style="padding:7px 0;font-weight:600;">{{ $booking->trip_type }}</td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>

          <!-- Message -->
          <tr>
            <td style="padding:0 22px 22px;">
              <p style="margin:0;font-size:13px;line-height:1.7;color:#374151;">
                We will contact you soon with a quote.
              </p>
              <p style="margin:14px 0 0;font-size:13px;color:#374151;">
                Thanks,<br>
                <b>{{ $appName }}</b>
              </p>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="padding:14px 22px 22px;text-align:center;color:#9ca3af;font-size:12px;">
              © {{ date('Y') }} {{ $appName }}. All rights reserved.
            </td>
          </tr>

        </table>

      </td>
    </tr>
  </table>
</body>
</html>
