document.getElementById('pegawaiCreateForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Clear previous errors
    const fields = ['nama', 'jabatan', 'email', 'alamat', 'jenis_kelamin', 'tanggal_lahir', 'foto'];
    fields.forEach(field => {
        document.getElementById(field).classList.remove('is-invalid');
        document.getElementById(`${field}Error`).innerText = '';
    });

    let isValid = true;

    // Validate Nama Pegawai
    const nama = document.getElementById('nama').value;
    if (!nama) {
        isValid = false;
        document.getElementById('nama').classList.add('is-invalid');
        document.getElementById('namaError').innerText = 'Nama Pegawai is required.';
    }

    // Validate Jabatan
    const jabatan = document.getElementById('jabatan').value;
    if (!jabatan) {
        isValid = false;
        document.getElementById('jabatan').classList.add('is-invalid');
        document.getElementById('jabatanError').innerText = 'Jabatan is required.';
    }

    // Validate Email
    const email = document.getElementById('email').value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email) {
        isValid = false;
        document.getElementById('email').classList.add('is-invalid');
        document.getElementById('emailError').innerText = 'Email is required.';
    } else if (!emailRegex.test(email)) {
        isValid = false;
        document.getElementById('email').classList.add('is-invalid');
        document.getElementById('emailError').innerText = 'Invalid email format.';
    }

    // Validate Alamat
    const alamat = document.getElementById('alamat').value;
    if (!alamat) {
        isValid = false;
        document.getElementById('alamat').classList.add('is-invalid');
        document.getElementById('alamatError').innerText = 'Alamat is required.';
    }

    // Validate Jenis Kelamin
    const jenis_kelamin = document.getElementById('jenis_kelamin').value;
    if (!jenis_kelamin) {
        isValid = false;
        document.getElementById('jenis_kelamin').classList.add('is-invalid');
        document.getElementById('jenis_kelaminError').innerText = 'Jenis Kelamin is required.';
    }

    // Validate Tanggal Lahir
    const tanggal_lahir = document.getElementById('tanggal_lahir').value;
    if (!tanggal_lahir) {
        isValid = false;
        document.getElementById('tanggal_lahir').classList.add('is-invalid');
        document.getElementById('tanggal_lahirError').innerText = 'Tanggal Lahir is required.';
    }

    // Validate Foto
    const foto = document.getElementById('foto').files[0];
    if (!foto) {
        isValid = false;
        document.getElementById('foto').classList.add('is-invalid');
        document.getElementById('fotoError').innerText = 'Foto Pegawai is required.';
    }

    if (isValid) {
        this.submit();
    }
});
