@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <!-- Row 1 -->
        <div class="row p-3 fw-bold">
            <div class="col-md-4">
                <div class="card" style="background-color: #FFF7FC">
                    <div class="card-header" style="background-color: #D0A2F7"></div>
                    <div class="card-body">
                        <h5 class="card-title fw-bolder">Total Pegawai Pria</h5>
                        <p class="card-text fw-bold" id="totalPria">{{ $totalPria }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="background-color: #FFF7FC">
                    <div class="card-header" style="background-color: #D0A2F7"></div>
                    <div class="card-body">
                        <h5 class="card-title fw-bolder">Total Pegawai Wanita</h5>
                        <p class="card-text fw-bold" id="totalWanita">{{ $totalWanita }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="background-color: #FFF7FC">
                    <div class="card-header" style="background-color: #D0A2F7"></div>
                    <div class="card-body">
                        <h5 class="card-title fw-bolder">Total Pegawai Keseluruhan</h5>
                        <p class="card-text fw-bold " id="totalKeseluruhan">{{ $totalKeseluruhan }}</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-0" style="background-color: #F1EAFF;">
                    <h5 class="card-header fw-bolder mb-4 mt-0 mx" style="background-color: #D0A2F7; color:#000">Daftar Pegawai</h5>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nama</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Jabatan</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Alamat</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Kelamin</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Detail</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawai as $pegawai )
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1 fs-3">{{ $pegawai->nama }}</h6>
                                            <h6 class="fw-normal mb-0 fs-3">{{ $pegawai->email }}</h6>
                                        </td>
                                        <td>{{ $pegawai->jabatan }}</td>
                                        <td>{{ $pegawai->alamat }}</td>
                                        <td>{{ $pegawai->jenis_kelamin }}</td>
                                        <td>
                                            <a href="{{ route('pegawai.show', $pegawai->id) }}" class="btn btn-info me-2">
                                                <i class="ti ti-eye fs-4"></i> <span>Detail</span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/dashboard/js/chartScript.js') }}"></script>
    
@endsection
