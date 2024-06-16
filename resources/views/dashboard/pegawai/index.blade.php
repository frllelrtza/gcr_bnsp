@extends('layouts.app')

@section('content')

<div class="card" style="background-color: #DCBFFF">
    <div class="card-body">
        <h5 class="card-title fw-bolder mb-4">Pegawai</h5>
        @include('dashboard.pegawai.create')
    </div>
</div>

        <!-- Form Filter -->
        <form action="{{ route('pegawai.index') }}" method="GET" class="mb-4">
            <div class="row d-flex justify-content-end">
                <div class="col-md-4 ">
                    <select name="jenis_kelamin" class="form-control">
                        <option value="">Filter Berdasarkan Jenis Kelamin</option>
                        <option value="Laki-laki" {{ request('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ request('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="col-md-1 ">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

<div class="col-lg-12 d-flex align-items-stretch mt-4">
    <div class="card w-100">
        <div class="card-body p-0" style="background-color: #F1EAFF;">
            <h5 class="card-header fw-bolder mb-4 mt-0 mx" style="background-color: #D0A2F7; color:#000">Daftar Pegawai</h5>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0"><h6 class="fw-bolder mb-0">Nama</h6></th>
                            <th class="border-bottom-0"><h6 class="fw-bolder mb-0">Jabatan</h6></th>
                            <th class="border-bottom-0"><h6 class="fw-bolder mb-0">Alamat</h6></th>
                            <th class="border-bottom-0"><h6 class="fw-bolder mb-0">Jenis Kelamin</h6></th>
                            <th class="border-bottom-0"><h6 class="fw-bolder mb-0">Tanggal Lahir</h6></th>
                            <th class="border-bottom-0"><h6 class="fw-bolder mb-0">Foto</h6></th>
                            <th class="border-bottom-0"><h6 class="fw-bolder mb-0">Aksi</h6></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pegawai as $pgw)
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1 fs-3">{{ $pgw->nama }}</h6>
                                <h6 class="fw-normal mb-0 fs-3">{{ $pgw->email }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-normal mb-0 fs-3">{{ $pgw->jabatan }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-normal mb-0 fs-3">{{ $pgw->alamat }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-normal mb-0 fs-3">{{ $pgw->jenis_kelamin }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-normal mb-0 fs-3">{{ $pgw->tanggal_lahir }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                @if ($pgw->foto)
                                <img src="{{ asset('storage/pegawai/' . $pgw->foto) }}" class="img-square rounded" style="width: 120px; height: 100px; object-fit: cover;" alt="Foto Pegawai">
                                @else
                                No Photo
                                @endif
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-normal mb-0 fs-3">
                                    <a href="{{ route('pegawai.show', $pgw->id) }}" class="btn btn-info me-2">
                                        <i class="ti ti-eye fs-4"></i> <span>Detail</span>
                                    </a>
                                    @include('dashboard.pegawai.edit', ['pegawai' => $pgw])
                                    <form id="deleteForm_{{ $pgw->id }}" action="{{ route('pegawai.destroy', $pgw->id) }}" method="POST" class="btn btn-danger p-0 me-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger m-0 deleteButton" data-id="{{ $pgw->id }}">
                                            <i class="ti ti-trash fs-4"></i> <span>Delete</span>
                                        </button>
                                    </form>
                                </h6>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center" colspan="8">Belum ada data pegawai.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Script for toast messages -->
<script>
    @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 
    @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!'); 
    @endif

    document.addEventListener('DOMContentLoaded', function () {
        // Event listener for delete buttons
        document.querySelectorAll('.deleteButton').forEach(function (button) {
            button.addEventListener('click', function () {
                var id = this.getAttribute('data-id');
                Swal.fire({
                    title: 'Delete?',
                    text: "Are you sure you want to delete this data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('deleteForm_' + id).submit();
                    }
                });
            });
        });
    });
</script>
@endsection
