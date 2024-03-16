<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certifications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            color: #666;
            text-align: center;
            margin-top: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{$message->embed(public_path().'/logo/StJohnCollegeLogo-03.png')}}" style="max-width: 400px;">
            {{-- <img src="logo/StJohnCollegeLogo-03.png" alt="SJAK Logo" style="max-width: 200px;"> --}}
        </div>
        <h1>Training Certifications</h1>
        <p>Dear <b>{{ $clientName }},</b> <br> Congracts on successfuly leaning and passing your examination.</p>
        <p>We are pleased to inform you that your certificate is attached below. Please find it for your reference.</p>
        <div style="text-align: center;">
             <p>Download Certificate</p>
        </div>
    </div>
</body>
</html>
