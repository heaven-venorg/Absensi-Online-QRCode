@extends('page.root.layout.app')
@section('content')
    <div class="d-flex flex-column min-vh-100 bg-body-secondary justify-content-center align-items-center gap-2">
        @if (session('alert'))
            <div class="alert alert-danger text-capitalize">{{ session('alert') }}</div>
        @endif
        @if (session('success'))
            <div class="alert alert-success text-capitalize">{{ session('success') }}</div>
        @endif
        <img src="{{ asset('assets/profile.png') }}" alt="Profile" class="rounded-circle border border-3" width="100px">
        <h2 class="fw-bolder text-capitalize h2">Hello {{ Auth::user()->name }}</h2>
        <a href="{{ route('absences.view') }}" class="btn btn-success w-25 text-capitalize fw-bold">Absensi disini</a>
        <form action="{{ route('logout') }}" method="POST" class="d-inline d-flex w-25">
            @csrf
            <button type="submit" class="btn btn-danger w-100 text-capitalize fw-bold">Logout</button>
        </form>

    </div>
@endsection
