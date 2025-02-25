<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Link Css Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="d-flex flex-column vh-100 justify-content-center align-items-center gap-3">
        {{ $qrcode }}
        <form action="{{ route('absences.record') }}" method="post">
            @csrf
            <input type="submit" name="Absen" value="Absen Manual" class="btn btn-outline-danger">
        </form>
    </div>

    {{-- Script Bootstrap --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
