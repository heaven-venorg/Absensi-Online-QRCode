@extends('page.root.layout.app')
@section('content')
    {{-- Icon Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- End --}}
    {{-- Custom Style --}}
    <style>
        .btn-padding {
            padding: 8px 50px 8px 50px
        }

        .paddingcus {
            padding: 100px 50px 100px 50px
        }

        .fontstyle {
            margin-top: 20px;
            line-height: 10px
        }
    </style>
    {{-- Custom Style --}}
    <div class="vh-100 d-flex flex-column justify-content-center align-items-center bg-body-secondary">
        <div class="bg-white paddingcus d-flex flex-column justify-content-center align-items-center rounded-4 gap-2">
            <img src="{{ asset('assets/profile.png') }}" alt="Profile" width="80px"
                class="rounded-circle border border-3 border-danger">
            <p class="fw-bolder fs-4 fontstyle">Welcome, <span class="text-capitalize">{{ Auth::user()->name }}</span></p>
            <div class="d-flex flex-column gap-1 w-75">
                <a href="{{ route('absences.view') }}" class="btn btn-primary rounded-5 btn-padding fw-bold"><i
                        class="bi bi-check-circle-fill"></i>
                    Absensi</a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="btn btn-danger rounded-5 btn-padding fw-bold">
                    <i class="bi bi-box-arrow-in-right"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <footer class="mt-3 text-center text-gray-500 text-sm">
                © <span id="getYear"></span> Absensi by Venorg. All rights reserved.
            </footer>
        </div>
    </div>

    {{-- Script JS --}}
    <script>
        let getYear = document.getElementById('getYear');
        getYear.innerHTML = new Date().getFullYear();
    </script>
@endsection
