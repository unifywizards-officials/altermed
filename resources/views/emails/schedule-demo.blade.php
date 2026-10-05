<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $type === 'admin' ? 'New Schedule Demo Request' : 'Demo Request Confirmation' }}</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    @if($type === 'admin')
        <h2>New Schedule Demo Request</h2>
        <p>A new demo request has been submitted. Here are the details:</p>
    @else
        <h2>Thank You for Your Demo Request</h2>
        <p>Thank you for your interest in AlterMed RCM. We have received your demo request and will contact you soon. Here are the details you submitted:</p>
    @endif

    <table style="border-collapse: collapse; width: 100%; max-width: 600px;">
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Name:</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Mobile Number:</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['mobile_number'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Email:</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Company Name:</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['company_name'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Number of Providers:</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['number_of_providers'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Type of Practice:</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['type_of_practice'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Requirement:</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['requirement'] }}</td>
        </tr>
    </table>

    @if($type === 'admin')
        <p>Please contact the client as soon as possible to schedule the demo.</p>
    @else
        <p>We appreciate your interest and will be in touch shortly to arrange your demo.</p>
        <p>Best regards,<br>AlterMed RCM Team</p>
    @endif
</body>
</html>