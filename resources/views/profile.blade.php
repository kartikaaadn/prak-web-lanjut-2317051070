<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        body {
            background: #1a1a1a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Trebuchet MS', sans-serif;
            color: #fff;
        }
        .profile {
            background: #2a2a2a;
            border-radius: 20px;
            padding: 30px;
            width: 320px;
            text-align: center;
            box-shadow: 0 0 20px rgba(255, 77, 166, 0.5); /* Pink glow */
        }
        .profile img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 3px solid #ff4da6; /* Pink border */
            margin-bottom: 20px;
            box-shadow: 0 0 15px #ff4da6; /* Pink glow */
        }
        .info {
            background: rgba(255,255,255,0.05);
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            font-size: 17px;
            text-align: left;
        }
        .label {
            color: #ff4da6; /* Pink text */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="profile">
        <img src="{{ asset('images/dindaa.jpg') }}" alt="Profile Picture">
        <div class="info"><span class="label">NAMA:</span> {{ $NAMA }}</div>
        <div class="info"><span class="label">KELAS:</span> {{ $KELAS }}</div>
        <div class="info"><span class="label">NPM:</span> {{ $NPM }}</div>
    </div>
</body>
</html>
