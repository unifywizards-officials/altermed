<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Thank you for contacting AlterMed RCM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            text-align: center;
            margin: -30px -30px 30px -30px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            margin-bottom: 30px;
        }
        .message-box {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            border-left: 4px solid #28a745;
            margin: 20px 0;
        }
        .message-label {
            font-weight: bold;
            color: #28a745;
            margin-bottom: 10px;
            display: block;
        }
        .info-box {
            background-color: #e3f2fd;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #2196F3;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            color: #666;
            font-size: 12px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .highlight {
            background-color: #fff3cd;
            padding: 2px 6px;
            border-radius: 3px;
            font-weight: bold;
        }
        .contact-info {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .contact-info h3 {
            margin-top: 0;
            color: #667eea;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🙏 Thank You for Contacting Us!</h1>
            <p>We have received your message</p>
        </div>

        <div class="content">
            <p>Dear <strong>{{ $contactData['name'] }}</strong>,</p>

            <p>Thank you for reaching out to <strong>AlterMed RCM</strong>. We have successfully received your message and appreciate you taking the time to contact us.</p>

            <div class="message-box">
                <span class="message-label">📝 Your Message:</span>
                <div style="white-space: pre-wrap; color: #333;">
                    {{ $contactData['message'] }}
                </div>
            </div>

            <div class="info-box">
                <strong>What happens next?</strong><br>
                Our team will review your message and get back to you within 24-48 hours. We strive to respond to all inquiries as quickly as possible.
            </div>

            <div class="contact-info">
                <h3>📞 Need immediate assistance?</h3>
                <p>If your matter is urgent, please don't hesitate to call us directly:</p>
                <p><strong>Phone:</strong> +92 (003) 68-0900</p>
                <p><strong>Email:</strong> info@altermedrcm.com</p>
            </div>

            <p>We look forward to assisting you with your medical billing and revenue management needs.</p>

            <p>Best regards,<br>
            <strong>The AlterMed RCM Team</strong></p>
        </div>

        <div class="footer">
            <p>This is an automated confirmation email for your contact form submission.</p>
            <p><strong>AlterMed RCM</strong> - Your Medical Billing Partner</p>
            <p>If you did not submit this contact form, please ignore this email.</p>
        </div>
    </div>
</body>
</html>