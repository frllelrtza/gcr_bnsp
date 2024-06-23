<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#pegawai_create">
    + Tambah Pegawai
</button>

<!-- Modal for creating new employee -->
<div class="modal fade" id="pegawai_create" tabindex="-1" aria-labelledby="pegawai_create_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pegawaiModalLabel">Form Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="pegawaiCreateForm" method="POST" action="{{ route('pegawai.store') }}" enctype="multipart/form-data">
                    @csrf <!-- CSRF Token -->
                    <div class="form-group">
                        <label for="nama">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pegawai" autocomplete="off">
                        <div class="invalid-feedback" id="namaError"></div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" autocomplete="off">
                        <div class="invalid-feedback" id="jabatanError"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" autocomplete="off">
                        <div class="invalid-feedback" id="emailError"></div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat" autocomplete="off"></textarea>
                        <div class="invalid-feedback" id="alamatError"></div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <div class="invalid-feedback" id="jenis_kelaminError"></div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" autocomplete="off">
                        <div class="invalid-feedback" id="tanggal_lahirError"></div>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Pegawai</label>
                        <input type="file" class="form-control" id="foto" name="foto" autocomplete="off">
                        <div class="invalid-feedback" id="fotoError"></div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- External Script for SweetAlert and Toastr -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('assets/dashboard/js/validateCreate.js') }}"></script>

<!-- Script for SweetAlert confirmation and toastr messages -->
<script>
    @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 
    @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!'); 
    @endif
</script>
