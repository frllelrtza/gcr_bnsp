@extends('layouts.app')
@section('content')
      <div class="container-fluid">
        <!--  Row 1 -->

        <div class="row p-3 fw-bold">
          <div class="col-md-4">
              <div class="card" style="background-color: #FFF7FC">
                  <div class="card-header" style="background-color: #D0A2F7"></div>
                  <div class="card-body">
                      <h5 class="card-title fw-bolder">Total Pegawai Pria</h5>
                      <p class="card-text fw-bold">{{ $totalPria }}</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card" style="background-color: #FFF7FC">
                  <div class="card-header" style="background-color: #D0A2F7"></div>
                  <div class="card-body">
                      <h5 class="card-title fw-bolder">Total Pegawai Wanita</h5>
                      <p class="card-text fw-bold">{{ $totalWanita }}</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="background-color: #FFF7FC">
              <div class="card-header" style="background-color: #D0A2F7"></div>
              <div class="card-body">
                <h5 class="card-title fw-bolder">Total Pegawai Keseluruhan</h5>
                <p class="card-text fw-bold ">{{ $totalKeseluruhan }}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
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
                        <td><a href="{{ route('pegawai.show', $pegawai->id) }}" class="btn btn-info me-2">
                          <i class="ti ti-eye fs-4"></i> <span>Detail</span>
                      </a>
                    </tr>    
                    @endforeach                
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
    {{-- <div class="col-lg-12">
        <div class="card" style="background-color: #F9F3FF;">
            <div class="card-header text-center" style="background-color: #D0A2F7; color:#000">Daftar Pegawai</div>
            <div class="card-body">
                <div class="row flex-nowrap">
                    @foreach ($pegawai as $pgw)
                    <div class="col-sm-6 col-xl-3 mb-4">
                        <div class="card overflow-hidden rounded-2 shadow-sm">
                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px; overflow: hidden;">
                                @if ($pgw->foto)
                                <img src="{{ asset('storage/pegawai/' . $pgw->foto) }}" class="img-fluid rounded" style="object-fit: cover; max-height: 100%; max-width: 100%;" alt="{{ $pgw->nama }}">
                                @else
                                <div class="bg-secondary d-flex justify-content-center align-items-center text-white" style="height: 100%; width: 100%;">
                                    <i class="bi bi-person fs-1"></i>
                                </div>
                                @endif
                                <div class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart">
                                    <i class="ti ti-basket fs-4"></i>
                                </div>
                            </div>
                            <div class="card-body pt-3 p-4">
                                <h6 class="card-title fw-semibold fs-4">{{ $pgw->nama }}</h6>
                                <p class="card-text text-muted fs-5">{{ $pgw->jabatan }}</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold fs-4 mb-0">{{ $pgw->alamat }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}
</div>
      

@endsection