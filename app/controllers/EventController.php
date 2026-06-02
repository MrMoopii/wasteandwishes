<?php
class EventController extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Event';
        
        $data['events'] = [
            [
                'id' => 1,
                'nama' => 'Seminar Memulai Ke Dunia Startup',
                'harga' => 'Gratis',
                'gambar' => '1.jpg'
            ],
            [
                'id' => 2,
                'nama' => 'Internship Farmtastis Journey',
                'harga' => 'Gratis',
                'gambar' => '2.jpg'
            ],
            [
                'id' => 3,
                'nama' => 'Laboratorium Ajaib Maggot',
                'harga' => 'Gratis',
                'gambar' => '3.jpg'
            ],
            [
                'id' => 4,
                'nama' => 'Edukasi Pengelolaan Limbah Organik Dengan Inovasi Maggot',
                'harga' => 'Gratis',
                'gambar' => '4.jpg'
            ],
            [
                'id' => 5,
                'nama' => 'Volunteer SAMI EduGarden Action',
                'harga' => 'Gratis',
                'gambar' => '5.jpg'
            ]
        ];
        $this->view('templates/header', $data);
        $this->view('event/index', $data);
        $this->view('templates/footer');
    }
    
    // Halaman Detail Event
    public function detail($id = 1) { // Default ID 1 kalau kosong
        $data['judul'] = 'Detail Event';
        
        // Data dengan deskripsi relevan dan perubahan 'syarat' menjadi 'tanggal'
        $semua_event = [
            1 => [
                'id' => 1,
                'nama' => 'Seminar Memulai Ke Dunia Startup',
                'harga' => 'Gratis',
                'deskripsi' => 'Pelajari langkah awal membangun startup berwawasan lingkungan. Kita akan membedah model bisnis pengelolaan limbah dan budidaya maggot BSF dari nol.',
                'tanggal' => 'Rabu, 11 Maret 2026',
                'gambar' => '1.jpg'
            ],
            2 => [
                'id' => 2,
                'nama' => 'Internship Farmtastis Journey',
                'harga' => 'Gratis',
                'deskripsi' => 'Program magang eksklusif untuk merasakan langsung operasional peternakan dan pengelolaan sampah organik terpadu.',
                'tanggal' => 'Senin, 06 April 2026 - Rabu, 06 Mei 2026',
                'gambar' => '2.jpg'
            ],
            3 => [
                'id' => 3,
                'nama' => 'Laboratorium Ajaib Maggot',
                'harga' => 'Gratis',
                'deskripsi' => 'Jelajahi dunia mikroskopis dan siklus hidup Black Soldier Fly (BSF). Peserta akan diajak melihat langsung proses biokonversi sampah organik menjadi pupuk dan pakan ternak berkualitas tinggi di fasilitas laboratorium kami.',
                'tanggal' => 'Sabtu, 18 April 2026',
                'gambar' => '3.jpg'
            ],
            4 => [
                'id' => 4,
                'nama' => 'Edukasi Pengelolaan Limbah Organik Dengan Inovasi Maggot',
                'harga' => 'Gratis',
                'deskripsi' => 'Pelatihan intensif tentang cara efektif mengolah sampah dapur dan limbah rumah tangga menggunakan metode maggot. Sangat cocok untuk pegiat lingkungan, ibu rumah tangga, dan pemula yang ingin memulai dari pekarangan sendiri.',
                'tanggal' => 'Minggu, 10 Mei 2026',
                'gambar' => '4.jpg'
            ],
            5 => [
                'id' => 5,
                'nama' => 'Volunteer SAMI EduGarden Action',
                'harga' => 'Gratis',
                'deskripsi' => 'Bergabunglah sebagai relawan untuk aksi nyata menghijaukan lingkungan! Kita akan melakukan penanaman bibit, pembuatan kompos komunal, dan edukasi kebersihan langsung ke masyarakat sekitar.',
                'tanggal' => 'Sabtu, 23 Mei 2026',
                'gambar' => '5.jpg'
            ]
        ];

        // Cari event berdasarkan ID yang diklik, kalau ID ga ada, balikin ke event 1
        if (array_key_exists($id, $semua_event)) {
            $data['event'] = $semua_event[$id];
        } else {
            $data['event'] = $semua_event[1];
        }
        
        $this->view('templates/header', $data);
        $this->view('event/detail', $data);
        $this->view('templates/footer');
    }

    // Halaman Checkout Event
    public function checkout($id = 1) { // Kasih default ID 1
        $data['judul'] = 'Checkout Event';
        
        $semua_event = [
            1 => [
                'id' => 1,
                'nama' => 'Seminar Memulai Ke Dunia Startup',
                'gambar' => '1.jpg' 
            ],
            2 => [
                'id' => 2,
                'nama' => 'Internship Farmtastis Journey',
                'gambar' => '2.jpg' 
            ],
            3 => [
                'id' => 3,
                'nama' => 'Pameran Produk Daur Ulang',
                'gambar' => '3.jpg' 
            ],
            4 => [
                'id' => 4,
                'nama' => 'Aksi Tukar Sampah Jadi Pakan',
                'gambar' => '4.jpg' 
            ],
            5 => [
                'id' => 5,
                'nama' => 'Pelatihan Kompos Rumah Tangga',
                'gambar' => '5.jpg' 
            ]
        ];

        if (array_key_exists($id, $semua_event)) {
            $data['event'] = $semua_event[$id];
        } else {
            $data['event'] = $semua_event[1];
        }
        
        $this->view('templates/header', $data);
        $this->view('event/checkout', $data);
        $this->view('templates/footer');
    }

    // Method untuk memproses data form checkout
    public function proses_checkout() {
        Flasher::setFlash('berhasil', 'mendaftar event', 'success');
        header('Location: ' . BASEURL . '/event');
        exit;
    }
}