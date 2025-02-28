<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QrCode to Absensi</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            gap: 20px
        }

        .qr-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body class="bg-body-secondary">
    <p class="fw-bolder h2">Scan QRCode</p>
    <div class="container d-flex gap-3 bg-body-tertiary w-50 p-4 rounded-4">
        <div class="w-50 d-flex h-100 justify-content-center align-items-center">
            <div class="qr-container">
                {{ $qrcode }}
            </div>
        </div>
        <div class="about w-50 d-flex flex-column h-100 justify-content-center align-items-center">
            <p class="text-center fw-bolder text-danger text-uppercase h5">Peringatan Untuk Absensi</p>
            <ol>
                <li>Batas waktu absensi sampai pukul 07:00</li>
                <li>Login ke account absensi qrcode anda</li>
                <li>scan QRCode setelah login dengan benar</li>
                <li>Jika tidak inggin scan QRCode klik button Absensi manual</li>
                <li>Jika sudah absensi mohon untuk tidak spam absensi</li>
            </ol>
        </div>
    </div>
</body>

</html>
