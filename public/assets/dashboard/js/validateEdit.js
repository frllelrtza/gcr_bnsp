document.addEventListener('DOMContentLoaded', function () {
    // Get all forms that need validation
    const forms = document.querySelectorAll('form[id^="pegawaiEditForm_"]');

    forms.forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const formId = this.id.split('_')[1];
            const fields = ['nama', 'jabatan', 'email', 'alamat', 'jenis_kelamin', 'tanggal_lahir', 'foto'];
            let isValid = true;

            // Clear previous errors
            fields.forEach(field => {
                document.getElementById(field + '_' + formId).classList.remove('is-invalid');
                document.getElementById(field + 'Error_' + formId).innerText = '';
            });

            // Validate Nama Pegawai
            const nama = document.getElementById('nama_' + formId).value;
            if (!nama) {
                isValid = false;
                document.getElementById('nama_' + formId).classList.add('is-invalid');
                document.getElementById('namaError_' + formId).innerText = 'Nama Pegawai is required.';
            }

            // Validate Jabatan
            const jabatan = document.getElementById('jabatan_' + formId).value;
            if (!jabatan) {
                isValid = false;
                document.getElementById('jabatan_' + formId).classList.add('is-invalid');
                document.getElementById('jabatanError_' + formId).innerText = 'Jabatan is required.';
            }

            // Validate Email
            const email = document.getElementById('email_' + formId).value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email) {
                isValid = false;
                document.getElementById('email_' + formId).classList.add('is-invalid');
                document.getElementById('emailError_' + formId).innerText = 'Email is required.';
            } else if (!emailRegex.test(email)) {
                isValid = false;
                document.getElementById('email_' + formId).classList.add('is-invalid');
                document.getElementById('emailError_' + formId).innerText = 'Invalid email format.';
            }

            // Validate Alamat
            const alamat = document.getElementById('alamat_' + formId).value;
            if (!alamat) {
                isValid = false;
                document.getElementById('alamat_' + formId).classList.add('is-invalid');
                document.getElementById('alamatError_' + formId).innerText = 'Alamat is required.';
            }

            // Validate Jenis Kelamin
            const jenis_kelamin = document.getElementById('jenis_kelamin_' + formId).value;
            if (!jenis_kelamin) {
                isValid = false;
                document.getElementById('jenis_kelamin_' + formId).classList.add('is-invalid');
                document.getElementById('jenis_kelaminError_' + formId).innerText = 'Jenis Kelamin is required.';
            }

            // Validate Tanggal Lahir
            const tanggal_lahir = document.getElementById('tanggal_lahir_' + formId).value;
            if (!tanggal_lahir) {
                isValid = false;
                document.getElementById('tanggal_lahir_' + formId).classList.add('is-invalid');
                document.getElementById('tanggal_lahirError_' + formId).innerText = 'Tanggal Lahir is required.';
            }

            // Validate Foto
            // const foto = document.getElementById('foto_' + formId).files[0];
            // if (!foto) {
            //     isValid = false;
            //     document.getElementById('foto_' + formId).classList.add('is-invalid');
            //     document.getElementById('fotoError_' + formId).innerText = 'Foto Pegawai is required.';
            // }

            if (isValid) {
                this.submit();
            }
        });
    });

    if (sessionStorage.getItem('success')) {
        toastr.success(sessionStorage.getItem('success'), 'BERHASIL!');
        sessionStorage.removeItem('success');
    }

    if (sessionStorage.getItem('error')) {
        toastr.error(sessionStorage.getItem('error'), 'GAGAL!');
        sessionStorage.removeItem('error');
    }
});
