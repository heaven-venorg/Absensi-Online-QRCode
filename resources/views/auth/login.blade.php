@extends('auth.layout.app')
@section('content')
    <div class="d-flex flex-column vh-100 justify-content-center align-items-center w-100 bg-light">
        <div class="group d-flex flex-column justify-content-center align-items-center gap-4">
            <img src="{{ asset('assets/iconlogo.png') }}" alt="icon" height="100px" width="auto">
            <h1 class="text-danger">Form Login</h1>
            @if (session('gagal'))
                <div class="alert alert-danger">{{ session('gagal') }}</div>
            @endif
        </div>
        <form action="{{ route('login.action') }}" method="POST" class="d-flex flex-column w-50 gap-2">
            @csrf
            <input type="text" name="email" class="form-control" placeholder="Masukan email anda">
            <input type="password" name="password" class="form-control" placeholder="Masukan password anda">
            <input type="submit" class="btn btn-outline-danger" value="Login">
        </form>
    </div>
@endsection
