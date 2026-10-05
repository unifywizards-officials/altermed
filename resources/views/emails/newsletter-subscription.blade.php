<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $type === 'admin' ? 'New Newsletter Subscription' : 'Welcome to AlterMed RCM Newsletter' }}</title>
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
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #00cde5;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #00cde5;
            margin-bottom: 10px;
        }
        .content {
            margin-bottom: 30px;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #666;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .highlight {
            background-color: #e8f4fd;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            border-left: 4px solid #00cde5;
        }
        .button {
            display: inline-block;
            background-color: #00cde5;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">AlterMed RCM</div>
            <h1>{{ $type === 'admin' ? 'New Newsletter Subscription' : 'Welcome to Our Newsletter!' }}</h1>
        </div>

        <div class="content">
            @if($type === 'admin')
                <p>Dear Admin,</p>
                <p>A new user has subscribed to our newsletter. Here are the details:</p>

                <div class="highlight">
                    <strong>Subscriber Email:</strong> {{ $email }}<br>
                    <strong>Subscription Date:</strong> {{ now()->format('F j, Y \a\t g:i A') }}
                </div>

                <p>Please welcome this new subscriber to our community!</p>
            @else
                <p>Dear Subscriber,</p>
                <p>Thank you for subscribing to the AlterMed RCM newsletter!</p>

                <div class="highlight">
                    <strong>Your Email:</strong> {{ $email }}<br>
                    <strong>Subscription Date:</strong> {{ now()->format('F j, Y') }}
                </div>

                <p>You will now receive regular updates about:</p>
                <ul>
                    <li>Latest medical coding and billing news</li>
                    <li>Industry updates and regulations</li>
                    <li>Tips for better RCM practices</li>
                    <li>Exclusive offers and resources</li>
                </ul>

                <p>If you have any questions, feel free to contact us at any time.</p>

                <a href="{{ url('/') }}" class="button">Visit Our Website</a>
            @endif
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} AlterMed RCM. All rights reserved.</p>
            <p>88 Broklyn Golden Road Street, New York. USA</p>
            <p>Email: info@altermedrcm.com | Phone: +1 856-387-9220</p>
        </div>
    </div>
</body>
</html>