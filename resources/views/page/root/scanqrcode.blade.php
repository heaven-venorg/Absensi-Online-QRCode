<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="vh-100 d-flex justify-content-center align-items-center w-100">
        <div id="reader" class="w-25"></div>
    </div>
    <script src="{{ asset('customAsset/js/html5-qrcode.min.js') }}"></script>
    <script>
        // inisiasi html5QRCodeScanner
        let html5QRCodeScanner = new Html5QrcodeScanner(
            // target id dengan nama reader, lalu sertakan juga
            // pengaturan untuk qrbox (tinggi, lebar, dll)
            "reader", {
                fps: 20,
                qrbox: {
                    width: 150,
                    height: 140,
                },
            }
        );

        // function yang dieksekusi ketika scanner berhasil
        // membaca suatu QR Code
        function onScanSuccess(decodedText, decodedResult) {
            // redirect ke link hasil scan
            window.location.href = decodedResult.decodedText;

            // membersihkan scan area ketika sudah menjalankan
            // action diatas
            html5QRCodeScanner.clear();
        }

        // render qr code scannernya
        html5QRCodeScanner.render(onScanSuccess);
    </script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
