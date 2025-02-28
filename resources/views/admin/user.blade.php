@extends('admin.layout.app')
@section('content')
    {{-- Custom Style --}}
    <link rel="stylesheet" href="{{ asset('customAsset/css/style.css') }}">
    {{-- End --}}
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
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                User DataTable
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
    @endsection
