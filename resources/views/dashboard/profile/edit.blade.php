@extends('layouts.app')

@section('content')

<h2 class="mt-0 mb-3 fw-bolder">Edit Profil</h2>
<div class="card-body">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade active show" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100 border position-relative overflow-hidden">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-5 fw-bolder">Ubah Data</h4>
                            <form method="POST" action="{{ route('profile.update', ['profile' => $user->id]) }}" enctype="multipart/form-data">

                                @csrf
                                @method('PUT')
                                <div class="text-center">
                                    <img src="/assets/dashboard/images/profile/user-1.jpg" alt="modernize-img" class="img-fluid rounded-circle" width="120" height="120">
                                    <div class="col-xl text-center">
                                        <div class="form-group p-2 text-start">
                                            <label class="form-label" for="name">Nama</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" value="{{ old('name', $user->name) }}">
                                        </div>
                                        <div class="form-group p-2 text-start">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" value="{{ old('email', $user->email) }}">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100 border position-relative overflow-hidden">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-5 fw-bolder">Ubah Password</h4>
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Password Saat Ini</label>
                                <input type="password" class="form-control" id="current_password" name="current_password">
                            </div>
                            <div class="mb-3">
                                <label for="new_password" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" id="new_password" name="new_password">
                            </div>
                            <div class="mb-3">
                                <label for="new_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end mt-2">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@if(session('status') === 'profile-updated')
<div class="alert alert-success mt-3">
    Profil berhasil diperbarui.
</div>
@endif

@if($errors->any())
<div class="alert alert-danger mt-3">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@endsection
