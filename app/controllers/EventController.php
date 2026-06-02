<?php
class EventController extends Controller
{

    // Halaman Daftar Event
    public function index()
    {
        $data['judul'] = 'Daftar Event';

        // Minta data ke Model
        $data['events'] = $this->model('Event_model')->getAllEvent();

        $this->view('templates/header', $data);
        $this->view('event/index', $data);
        $this->view('templates/footer');
    }

    // Halaman Detail Event
    public function detail($id = 1)
    {
        $data['judul'] = 'Detail Event';

        // Minta data 1 event ke Model berdasarkan ID
        $data['event'] = $this->model('Event_model')->getEventById($id);

        // Kalau ID diketik ngasal di URL dan gak ketemu, default ke event ID 1
        if (empty($data['event'])) {
            $data['event'] = $this->model('Event_model')->getEventById(1);
        }

        $this->view('templates/header', $data);
        $this->view('event/detail', $data);
        $this->view('templates/footer');
    }

    // Halaman Checkout Event
    public function checkout($id = 1)
    {
        $data['judul'] = 'Checkout Event';

        // Sama kayak detail, ambil data buat nampilin nama & gambar di form
        $data['event'] = $this->model('Event_model')->getEventById($id);

        if (empty($data['event'])) {
            $data['event'] = $this->model('Event_model')->getEventById(1);
        }

        $this->view('templates/header', $data);
        $this->view('event/checkout', $data);
        $this->view('templates/footer');
    }
    public function proses_checkout()
    {
        // === SATPAM: CEK APAKAH USER SUDAH LOGIN ===
        if (!isset($_SESSION['id_akun'])) {
            Flasher::setFlash('gagal', 'Anda harus login dulu untuk mendaftar event!', 'danger');
            header('Location: ' . BASEURL . '/auth');
            exit;
        }
        // ===========================================

        // Panggil fungsi tambahDataPendaftar dan kirim semua data dari form ($_POST)
        if ( $this->model('Event_model')->tambahDataPendaftar($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'mendaftar event', 'success');
            header('Location: ' . BASEURL . '/event');
            exit;
        } else {
            Flasher::setFlash('gagal', 'mendaftar event', 'error');
            header('Location: ' . BASEURL . '/event');
            exit;
        }
    }
    
}