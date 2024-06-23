<!-- resources/views/dashboard/pegawai/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card mt-4 mx-auto" style="background-color: #F9F3FF; max-width: 600px;">
    <div class="card-body">
        <h5 class="card-title fw-bolder mb-4 text-center">Detail Pegawai</h5>
        
        <div class="row mb-4 justify-content-center">
            <div class="col-md-4 text-center">
                @if ($pegawai->foto)
                    <img src="{{ asset('storage/pegawai/' . $pegawai->foto) }}" class="img-fluid rounded-3" style="width: 200px; height: 200px;" alt="Foto Pegawai">
                @else
                    <p>No Photo</p>
                @endif
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="mb-3 d-flex justify-content-between">
                    <strong>Nama:</strong>
                    <p>{{ $pegawai->nama }}</p>
                </div>

                <div class="mb-3 d-flex justify-content-between">
                    <strong>Jabatan:</strong>
                    <p>{{ $pegawai->jabatan }}</p>
                </div>

                <div class="mb-3 d-flex justify-content-between">
                    <strong>Email:</strong>
                    <p>{{ $pegawai->email }}</p>
                </div>

                <div class="mb-3 d-flex justify-content-between">
                    <strong>Alamat:</strong>
                    <p>{{ $pegawai->alamat }}</p>
                </div>

                <div class="mb-3 d-flex justify-content-between">
                    <strong>Jenis Kelamin:</strong>
                    <p>{{ $pegawai->jenis_kelamin }}</p>
                </div>

                <div class="mb-3 d-flex justify-content-between">
                    <strong>Tanggal Lahir:</strong>
                    <p>{{ $pegawai->tanggal_lahir }}</p>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
