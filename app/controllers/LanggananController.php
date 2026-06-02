<?php

class LanggananController extends Controller
{
    public function index()
    {
        // KUNCI KEAMANAN: Cek apakah user sudah login
        if (!isset($_SESSION['login'])) {
            // Jika belum login, beri pesan flasher (opsional) lalu arahkan ke halaman login
            // Pastikan ada tanda titik dua (:) setelah Location
            header('Location: ' . BASEURL . '/auth');
            exit;
        }

        // JIKA SUDAH LOGIN, jalankan kode di bawah ini untuk memuat halaman langganan
        $data['judul'] = 'Berlangganan - Waste & Wishes';

        $this->view('templates/header', $data);
        $this->view('langganan/index', $data);
        $this->view('templates/footer');
    }

    public function jadwalpengambilan()
    {
        $data['judul'] = "Jadwal Pengambilan Rutin";

        $this->view('templates/header', $data);
        $this->view('langganan/jadwalpengambilan', $data);
        $this->view('templates/footer');
    }
}