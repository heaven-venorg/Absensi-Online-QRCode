@extends('admin.layout.app')
@section('content')
    {{-- Custom Style --}}
    <link rel="stylesheet" href="{{ asset('customAsset/css/style.css') }}">
    {{-- End --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">Absences</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Absences DataTable</li>
        </ol>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                    <div class="card card-custom card-blue shadow-sm p-3 bg-white rounded">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-primary mb-1" style="font-size: 0.875rem; font-weight: 600;">ABSENCES
                                    (TODAY)</p>
                                <p class="text-dark mb-0" style="font-size: 1.5rem; font-weight: 700;">
                                    {{ $absencesTodayAll }}
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
                                <p class="text-success mb-1" style="font-size: 0.875rem; font-weight: 600;">ABSENCES
                                    (ALL)</p>
                                <p class="text-dark mb-0" style="font-size: 1.5rem; font-weight: 700;">
                                    {{ $absencesAll }}</p>
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
                                <p class="text-danger mb-1" style="font-size: 0.875rem; font-weight: 600;">ABSENCES
                                    (IZIN)</p>
                                <p class="text-dark mb-0" style="font-size: 1.5rem; font-weight: 700;">
                                    <i>Coming Soon</i>
                                </p>
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
                Absences DataTable
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Absensi Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                @if ($absencesToday->contains('name', $user->name))
                                    <td>Sudah Absen</td>
                                @else
                                    <td>Belum Absen</td>
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">Tidak ada data</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    @endsection
