@extends('admin.layout.app')
@section('content')
    {{-- Custom Style --}}
    <link rel="stylesheet" href="{{ asset('customAsset/css/style.css') }}">
    {{-- End --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detailed Absensi</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Absences Detail Milik <span class="text-capitalize">{{ $user->name }}</span>
            </li>
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
                                    @if ($absensiToday)
                                        Sudah Absen
                                    @else
                                        Belum Absen
                                    @endif
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
                                    {{ $absensiAll }}
                                </p>
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
                            <th>Absensi Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($absensiDetail as $absensi)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $absensi->absensi_time }}</td>
                                <td>
                                    <div class="badge bg-success">Absensi Berhasil</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
