<?php

class AuthController extends Controller
{

    // Menampilkan halaman Login
    public function index()
    {
        $data['judul'] = 'Masuk - Waste & Wishes';

        $this->view('templates/header', $data);
        $this->view('auth/login', $data);
        $this->view('templates/footer');
    }

    // Menampilkan halaman Daftar Akun
    public function register()
    {
        $data['judul'] = 'Daftar Akun - Waste & Wishes';

        $this->view('templates/header', $data);
        $this->view('auth/register', $data);
        $this->view('templates/footer');
    }

    // Memproses validasi Login
    public function prosesLogin()
    {
        // Mengambil dan membersihkan input data
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];

        // Mencari akun berdasarkan username di database
        $akun = $this->model('Akun_model')->getAkunByUsername($username);

        // Menjalankan logika proses Login jika username terdaftar
        if ($akun) {
            // Cek apakah password benar
            if (password_verify($password, $akun['password'])) {
                $_SESSION['login'] = true;
                $_SESSION['id_akun'] = $akun['id_akun'];
                $_SESSION['username'] = $akun['username'];
                $_SESSION['peran'] = $akun['peran'];

                // Mengambil status langgana berdasarkan id_akun
                $status = $this->model('Langganan_model')->getLanggananByAkun($akun['id_akun']);

                // Jika data langganan ditemukan, masukkan statusnya ke session. Jika tidak, set Nonaktif
                $_SESSION['status_langganan'] = ($status) ? $status['status_langganan'] : 'Nonaktif';

                // Mengalihkan user ke halaman utama
                header('Location: ' . BASEURL);
                exit();
            } else {
                Flasher::setFlash('Password yang dimasukkan', 'salah!', 'danger');
                header('Location: ' . BASEURL . '/auth');
                exit();
            }
        } else {
            Flasher::setFlash('Username', 'tidak ditemukan!', 'danger');
            header('Location: ' . BASEURL . '/auth');
            exit();
        }
    }

    // Memproses daftar akun baru
    public function prosesRegister()
    {
        // Tampung data dari form ke dalam satu array terstruktur
        $dataInput = [
            'username' => filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS),
            'email' => filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL),
            'password' => $_POST['password'],
            'confirm_password' => $_POST['confirm_password']
        ];

        // Mengecek apakah Password dan Konfirmasi Password cocok
        if ($dataInput['password'] !== $dataInput['confirm_password']) {
            // Jika tidak cocok, pasang flasher error dan hentikan proses
            Flasher::setFlash('Konfirmasi password', 'tidak cocok!', 'danger');
            header('Location: ' . BASEURL . '/auth/register');
            exit;
        }

        // Mengecek validasi: Apakah username ini sudah pernah dipakai orang lain?
        $cekUsername = $this->model('Akun_model')->getAkunByUsername($dataInput['username']);
        if ($cekUsername) {
            Flasher::setFlash('Username', 'sudah digunakan orang lain!', 'danger');
            header('Location: ' . BASEURL . '/auth/register');
            exit;
        }

        // Jika username aman, perintahkan Akun_model untuk menyimpannya ke database
        if ($this->model('Akun_model')->tambahDataAkun($dataInput) > 0) {
            // REGISTRASI BERHASIL
            Flasher::setFlash('Akun', 'berhasil dibuat! Silahkan masuk.', 'success');
            header('Location: ' . BASEURL . '/auth'); // Lempar ke halaman login
            exit;
        } else {
            // REGISTRASI GAGAL (karena sistem/database error)
            Flasher::setFlash('Gagal', 'mendaftar akun, coba lagi nanti.', 'danger');
            header('Location: ' . BASEURL . '/auth/register');
            exit;
        }
    }

    // Proses Logout
    public function logout()
    {
        // Hancurkan semua data yang menempel di session
        $_SESSION = [];
        session_unset();
        session_destroy();

        // Kembalikan pengguna ke halaman utama
        header('Location: ' . BASEURL);
        exit;
    }

}