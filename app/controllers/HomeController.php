<?php

class HomeController extends Controller
{
    public function index()
    {
        $data['judul'] = "Home";

        // Set default peringatan menjadi false (tidak muncul)
        $data['peringatan_jadwal'] = false;

        // Cek apakah ada user yang sedang login
        if (isset($_SESSION['id_akun'])) {
            $id_akun = $_SESSION['id_akun'];

            // Ambil data langganan user tersebut
            $langganan = $this->model('Langganan_model')->getLanggananByAkun($id_akun);

            // Jika dia ternyata sudah langganan dan statusnya Aktif...
            if ($langganan && $langganan['status_langganan'] == 'Aktif') {

                // Cek ke tabel jadwal menggunakan Jadwal_model
                $jadwal = $this->model('Jadwal_model')->getJadwalByLangganan($langganan['id_langganan']);

                if (empty($jadwal)) {
                    $data['peringatan_jadwal'] = true;
                }
            }
        }

        // Muat tampilan beranda dan kirimkan $data
        $this->view('templates/header', $data);

        // Pastikan mengirimkan $data ke view home/index agar peringatannya bisa ditangkap
        $this->view('home/index', $data);

        $this->view('templates/footer');
    }
}