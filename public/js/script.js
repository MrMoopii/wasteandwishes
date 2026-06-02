document.querySelectorAll('.btn-toggle-password').forEach(button => {
    button.addEventListener('click', function () {
        // Ambil id target input dari atribut data-target (bisa 'password' atau 'confirm_password')
        const targetId = this.getAttribute('data-target');
        const passwordInput = document.getElementById(targetId);

        // Mengecek tipe input saat ini, lalu balikkan kondisinya
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text'; // Ubah jadi text agar kelihatan karakternya
            this.textContent = '🙈';     // Ubah ikon mata menjadi monyet tutup mata/mata coret
        } else {
            passwordInput.type = 'password'; // Kembalikan jadi bintang/bulatan rahasia
            this.textContent = '👁️';         // Kembalikan ke ikon mata terbuka
        }
    });
});