<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form Response</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }
        .email-header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 15px;
            font-size: 1.4em;
        }
        .email-body {
            padding: 20px;
        }
        .email-body h2 {
            margin-top: 0;
        }
        .email-footer {
            background-color: #f1f1f1;
            color: #555;
            text-align: center;
            padding: 10px 15px;
            font-size: 0.9em;
        }
        .email-footer a {
            color: #4CAF50;
            text-decoration: none;
        }
        .email-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="email-header">
        Thank You for Your Feedback!
    </div>
    <div class="email-body">
        <h2>Hello!</h2>
        <p>We have received your message and appreciate you taking the time to provide feedback. Here are the details you submitted:</p>

        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Message:</strong></p>
        <p style="background: #f7f7f7; padding: 10px; border-left: 4px solid #4CAF50;">{{ $data['message'] }}</p>

        <p>Our team will review your message and get back to you shortly if necessary.</p>

        <p>Best regards,<br>The [Company Name] Team</p>
    </div>
    <div class="email-footer">
        <p>&copy; [Year] [Company Name]. All rights reserved.</p>
        <p><a href="#">Visit our website</a> | <a href="#">Contact support</a></p>
    </div>
</div>
</body>
</html>
