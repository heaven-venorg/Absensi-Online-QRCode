@extends('admin.layout.app')
@section('content')
    {{-- Custom Style --}}
    <link rel="stylesheet" href="{{ asset('customAsset/css/style.css') }}">
    {{-- End --}}

    {{-- Alert  --}}
    @if (session('alert'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="autoCloseAlert">
            {{ session('alert') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Script --}}
    <script src="{{ asset('customAsset/js/script.js') }}"></script>
    {{-- End Script --}}

    {{-- End Alert --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">Users</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">User DataTable</li>
        </ol>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                    <div class="card card-custom card-blue shadow-sm p-3 bg-white rounded">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-primary mb-1" style="font-size: 0.875rem; font-weight: 600;">USER
                                    (ALL)</p>
                                <p class="text-dark mb-0" style="font-size: 1.5rem; font-weight: 700;">{{ $lengthUser }}
                                </p>
                            </div>
                            <div>
                                <i class="bi bi-person-bounding-box icon-custom text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                    <div class="card card-custom card-green shadow-sm p-3 bg-white rounded">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-success mb-1" style="font-size: 0.875rem; font-weight: 600;">USER
                                    (Admin)</p>
                                <p class="text-dark mb-0" style="font-size: 1.5rem; font-weight: 700;">
                                    {{ $lengthUserAdmin }}</p>
                            </div>
                            <div>
                                <i class="bi bi-person-bounding-box icon-custom text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                    <div class="card card-custom card-red shadow-sm p-3 bg-white rounded">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-danger mb-1" style="font-size: 0.875rem; font-weight: 600;">USER
                                    (User)</p>
                                <p class="text-dark mb-0" style="font-size: 1.5rem; font-weight: 700;">
                                    {{ $lengthUserUser }}</p>
                            </div>
                            <div>
                                <i class="bi bi-person-bounding-box icon-custom text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="group">
                    <i class="fas fa-table me-1"></i>
                    User DataTable
                </div>
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#createUserModal">
                    Tambah User
                </button>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td>User Belum Tersedia</td>
                                <td>User Belum Tersedia</td>
                                <td>User Belum Tersedia</td>
                                <td>User Belum Tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Modal To Create User --}}
        <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createUserModalLabel">Tambahkan User Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="createUserForm" class="d-flex flex-column gap-3" action="{{ route('admin.user.store') }}"
                            method="POST">
                            @csrf
                            <input type="text" class="form-control" placeholder="Masukan Nama User" name="name">
                            <input type="email" class="form-control" placeholder="Masukan Email User" name="email">
                            <input type="password" class="form-control" placeholder="Masukan Password" name="password">
                            <button type="submit" class="btn btn-primary w-100">Tambahkan User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
