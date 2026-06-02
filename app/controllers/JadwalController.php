<?php

class JadwalController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['id_akun'])) {
            header('Location: ' . BASEURL . '/auth');
            exit;
        }

        $id_akun = $_SESSION['id_akun'];
        $langganan = $this->model('Langganan_model')->getLanggananByAkun($id_akun);

        if (!$langganan || $langganan['status_langganan'] != 'Aktif') {
            header('Location: ' . BASEURL . '/langganan');
            exit;
        }

        $data['judul'] = 'Atur Jadwal Pengambilan';
        $data['langganan'] = $langganan;

        // Ambil data jadwal lama (berupa 1 baris array atau false)
        $data['jadwal'] = $this->model('Jadwal_model')->getJadwalByLangganan($langganan['id_langganan']);

        $this->view('templates/header', $data);
        $this->view('jadwal/index', $data);
        $this->view('templates/footer');
    }

    public function simpan()
    {
        if (!isset($_SESSION['id_akun'])) {
            header('Location: ' . BASEURL . '/auth');
            exit;
        }

        $id_akun = $_SESSION['id_akun'];
        $langganan = $this->model('Langganan_model')->getLanggananByAkun($id_akun);

        if (!$langganan) {
            header('Location: ' . BASEURL . '/langganan');
            exit;
        }

        // Ambil data tunggal dari POST
        $hari_pengambilan = $_POST['hari_pengambilan'] ?? '';
        $jam = $_POST['jam'] ?? '';

        if (empty($hari_pengambilan) || empty($jam)) {
            echo "<script>alert('Mohon pilih hari pengambilan dan jam pengambilan!'); window.history.back();</script>";
            exit;
        }

        // Validasi jam kerja (08:00 - 20:00)
        if ($jam < '08:00' || $jam > '20:00') {
            echo "<script>alert('Gagal! Jam penjemputan harus di antara pukul 08:00 s/d 20:00 WIB.'); window.history.back();</script>";
            exit;
        }

        // Kirim data langsung ke model tanpa loop
        if ($this->model('Jadwal_model')->simpanJadwalTunggal($langganan['id_langganan'], $hari_pengambilan, $jam) > 0) {
            echo "<script>alert('Berhasil menyimpan jadwal pengambilan sampah!'); window.location.href='" . BASEURL . "/langganan';</script>";
            exit;
        } else {
            echo "<script>alert('Tidak ada perubahan pada jadwal.'); window.location.href='" . BASEURL . "/langganan';</script>";
            exit;
        }
    }
}