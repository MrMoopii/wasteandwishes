<?php

class LanggananController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['id_akun'])) {
            header('Location: ' . BASEURL . '/auth');
            exit;
        }

        $data['judul'] = 'Status Berlangganan Sampah';
        $id_akun = $_SESSION['id_akun'];
        $data['langganan'] = $this->model('Langganan_model')->getLanggananByAkun($id_akun);

        if ($data['langganan']) {
            // Ambil data tunggal dari model jadwal baru
            $data['jadwal_user'] = $this->model('Jadwal_model')->getJadwalByLangganan($data['langganan']['id_langganan']);
        }

        $this->view('templates/header', $data);
        if (!$data['langganan']) {
            $this->view('langganan/form_daftar', $data);
        } else {
            $this->view('langganan/status_aktif', $data); // Menggunakan file status_aktif.php milikmu
        }
        $this->view('templates/footer');
    }

    // Menangani Kiriman Form (Aksi saat tombol "Daftar/Bayar" diklik)
    public function prosesTambah()
    {
        $id_akun = $_SESSION['id_akun'];

        if ($this->model('Langganan_model')->tambahDataLangganan($_POST, $id_akun) > 0) {
            // PERBAIKAN: Jangan langsung ke sukses, tapi arahkan ke halaman pembayaran!
            header('Location: ' . BASEURL . '/langganan/pembayaran');
            exit;
        } else {
            echo "<script>alert('Gagal mendaftar.'); window.history.back();</script>";
        }
    }

    // Menampilkan halaman pembayaran QRIS untuk pendaftaran BARU
    public function pembayaran()
    {
        if (!isset($_SESSION['id_akun'])) {
            header('Location: ' . BASEURL . '/auth');
            exit;
        }

        $id_akun = $_SESSION['id_akun'];
        $data['langganan'] = $this->model('Langganan_model')->getLanggananByAkun($id_akun);
        $data['judul'] = 'Pembayaran Langganan - Waste & Wishes';

        $this->view('templates/header', $data);
        $this->view('langganan/pembayaran', $data); // Memuat file views/langganan/pembayaran.php
        $this->view('templates/footer');
    }

    // Memproses tombol "Saya Sudah Bayar" dari pendaftaran BARU
    public function prosesBayar()
    {
        if (!isset($_SESSION['id_akun'])) {
            header('Location: ' . BASEURL . '/auth');
            exit;
        }

        $id_akun = $_SESSION['id_akun'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Update status dari 'Belum Bayar' menjadi 'Aktif' di database
            $this->model('Langganan_model')->aktifkanLangganan($id_akun);

            // Setelah sukses diaktifkan, baru boleh dilempar ke rute sukses untuk cetak nota
            header('Location: ' . BASEURL . '/langganan/sukses');
            exit;
        }
    }

    // Halaman sukses tampil setelah bayar dikonfirmasi
    public function sukses()
    {
        if (!isset($_SESSION['id_akun'])) {
            header('Location: ' . BASEURL . '/auth');
            exit;
        }

        $id_akun = $_SESSION['id_akun'];
        $data['judul'] = 'Pembayaran Sukses - Waste & Wishes';
        $data['langganan'] = $this->model('Langganan_model')->getLanggananByAkun($id_akun);

        $this->view('templates/header', $data);
        $this->view('langganan/sukses_bayar', $data);
        $this->view('templates/footer');
    }
    // Proses Memperpanjang Masa Aktif Berlangganan
    public function prosesPerpanjang()
    {
        if (!isset($_SESSION['id_akun'])) {
            header('Location: ' . BASEURL . '/auth');
            exit;
        }

        $id_akun = $_SESSION['id_akun'];

        // Ambil data langganan yang sekarang aktif untuk tahu tanggal_berakhir yang lama
        $langganan_lama = $this->model('Langganan_model')->getLanggananByAkun($id_akun);

        if ($langganan_lama) {
            // Perintahkan model untuk melakukan UPDATE masa aktif
            if ($this->model('Langganan_model')->perpanjangMasaLangganan($langganan_lama) > 0) {
                // Jika berhasil, lempar ke halaman sukses agar bisa cetak nota perpanjangannya!
                header('Location: ' . BASEURL . '/langganan/sukses');
                exit;
            } else {
                echo "<script>alert('Gagal memperpanjang masa langganan.'); window.history.back();</script>";
            }
        } else {
            header('Location: ' . BASEURL . '/langganan');
            exit;
        }
    }

    public function pembayaranPerpanjang()
    {
        if (!isset($_SESSION['id_akun'])) {
            header('Location: ' . BASEURL . '/auth');
            exit;
        }

        $id_akun = $_SESSION['id_akun'];
        $data['langganan'] = $this->model('Langganan_model')->getLanggananByAkun($id_akun);

        $data['judul'] = 'Pembayaran Perpanjangan - Waste & Wishes';
        $this->view('templates/header', $data);
        $this->view('langganan/pembayaran_perpanjang', $data); // Memanggil file view pembayaran baru
        $this->view('templates/footer');
    }



    // Memuat Konten Nota (Dipanggil oleh Iframe tersembunyi di sukses_bayar.php)
    public function cetakNota()
    {
        $id_akun = $_SESSION['id_akun'];
        $data['judul'] = 'Nota Pembayaran';

        // Ambil data dari database untuk dicetak ke nota
        $data['langganan'] = $this->model('Langganan_model')->getLanggananByAkun($id_akun);

        // Muat file desain nota tanpa menggunakan template header/footer website biasa
        $this->view('langganan/nota_pdf', $data);
    }
}


