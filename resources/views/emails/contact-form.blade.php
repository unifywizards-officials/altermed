<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>New Contact Form Submission</title>
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
        .field {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
            border-left: 4px solid #667eea;
        }
        .field-label {
            font-weight: bold;
            color: #667eea;
            margin-bottom: 5px;
            display: block;
        }
        .field-value {
            color: #333;
            margin: 0;
        }
        .message-box {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            border-left: 4px solid #28a745;
            margin-top: 20px;
        }
        .message-label {
            font-weight: bold;
            color: #28a745;
            margin-bottom: 10px;
            display: block;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📧 New Contact Form Submission</h1>
            <p>You have received a new message from your website contact form</p>
        </div>

        <div class="content">
            <div class="field">
                <span class="field-label">👤 Name:</span>
                <p class="field-value">{{ $contactData['name'] }}</p>
            </div>

            <div class="field">
                <span class="field-label">📧 Email:</span>
                <p class="field-value">
                    <a href="mailto:{{ $contactData['email'] }}" style="color: #667eea; text-decoration: none;">
                        {{ $contactData['email'] }}
                    </a>
                </p>
            </div>

            @if(isset($contactData['phone']) && !empty($contactData['phone']))
            <div class="field">
                <span class="field-label">📞 Phone:</span>
                <p class="field-value">
                    <a href="tel:{{ $contactData['phone'] }}" style="color: #667eea; text-decoration: none;">
                        {{ $contactData['phone'] }}
                    </a>
                </p>
            </div>
            @endif

            @if(isset($contactData['subject']) && !empty($contactData['subject']))
            <div class="field">
                <span class="field-label">📋 Subject:</span>
                <p class="field-value">{{ $contactData['subject'] }}</p>
            </div>
            @endif

            <div class="message-box">
                <span class="message-label">💬 Message:</span>
                <div style="white-space: pre-wrap; color: #333;">
                    {{ $contactData['message'] }}
                </div>
            </div>
        </div>

        <div class="footer">
            <p>This email was sent from your website contact form on {{ date('F j, Y \a\t g:i A') }}</p>
            <p><strong>AlterMed RCM</strong> - Contact Form System</p>
        </div>
    </div>
</body>
</html>