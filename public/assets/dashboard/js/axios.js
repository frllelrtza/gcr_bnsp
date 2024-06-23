// Misalkan Anda ingin menambahkan AJAX request untuk mengambil data tambahan
axios.get('/api/pegawai') // Ganti '/api/pegawai' dengan URL yang sesuai dengan endpoint API Anda
  .then(function (response) {
    // Tanggapan berhasil
    console.log(response.data);

    // Contoh: Memperbarui total pegawai pria
    document.getElementById('totalPria').textContent = response.data.totalPria;

    // Contoh: Memperbarui total pegawai wanita
    document.getElementById('totalWanita').textContent = response.data.totalWanita;

    // Contoh: Memperbarui total keseluruhan pegawai
    document.getElementById('totalKeseluruhan').textContent = response.data.totalKeseluruhan;

    // Anda juga bisa menambahkan logika lainnya untuk memanipulasi data lain di halaman
  })
  .catch(function (error) {
    // Tanggapan gagal
    console.error(error);
    alert('Terjadi kesalahan saat mengambil data dari server.');
  });