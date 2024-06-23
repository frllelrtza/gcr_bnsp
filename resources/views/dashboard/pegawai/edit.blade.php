<!-- Button to Open the Modal for Edit -->
<button type="button" class="btn btn-primary me-2" data-toggle="modal" data-target="#pegawai_edit_{{ $pegawai->id }}">
    <i class="ti ti-pencil fs-4"></i>
    <span>Edit</span>
</button>

<!-- The Modal -->
<div class="modal fade" id="pegawai_edit_{{ $pegawai->id }}" tabindex="-1" aria-labelledby="pegawai_edit_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pegawaiModalLabel">Edit Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="pegawaiEditForm_{{ $pegawai->id }}" method="POST" action="{{ route('pegawai.update', $pegawai->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_{{ $pegawai->id }}">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_{{ $pegawai->id }}" name="nama" value="{{ old('nama', $pegawai->nama) }}" placeholder="Masukkan Nama Pegawai">
                        <div class="invalid-feedback" id="namaError_{{ $pegawai->id }}"></div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan_{{ $pegawai->id }}">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan_{{ $pegawai->id }}" name="jabatan" value="{{ old('jabatan', $pegawai->jabatan) }}" placeholder="Masukkan Jabatan">
                        <div class="invalid-feedback" id="jabatanError_{{ $pegawai->id }}"></div>
                    </div>
                    <div class="form-group">
                        <label for="email_{{ $pegawai->id }}">Email</label>
                        <input type="email" class="form-control" id="email_{{ $pegawai->id }}" name="email" value="{{ old('email', $pegawai->email) }}" placeholder="Masukkan Email">
                        <div class="invalid-feedback" id="emailError_{{ $pegawai->id }}"></div>
                    </div>
                    <div class="form-group">
                        <label for="alamat_{{ $pegawai->id }}">Alamat</label>
                        <textarea class="form-control" id="alamat_{{ $pegawai->id }}" name="alamat" rows="5" placeholder="Masukkan Alamat">{{ old('alamat', $pegawai->alamat) }}</textarea>
                        <div class="invalid-feedback" id="alamatError_{{ $pegawai->id }}"></div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin_{{ $pegawai->id }}">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin_{{ $pegawai->id }}" name="jenis_kelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" {{ old('jenis_kelamin', $pegawai->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin', $pegawai->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        <div class="invalid-feedback" id="jenis_kelaminError_{{ $pegawai->id }}"></div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir_{{ $pegawai->id }}">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir_{{ $pegawai->id }}" name="tanggal_lahir" value="{{ old('tanggal_lahir', $pegawai->tanggal_lahir) }}">
                        <div class="invalid-feedback" id="tanggal_lahirError_{{ $pegawai->id }}"></div>
                    </div>
                    <div class="form-group">
                        <label for="foto_{{ $pegawai->id }}">Foto Pegawai</label>
                        <input type="file" class="form-control" id="foto_{{ $pegawai->id }}" name="foto">
                        <div class="invalid-feedback" id="fotoError_{{ $pegawai->id }}"></div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- External Script for SweetAlert and Toastr -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('assets/dashboard/js/validateEdit.js') }}"></script>

<!-- Script for SweetAlert confirmation and toastr messages -->
<script>
    @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 
    @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!'); 
    @endif
</script>
