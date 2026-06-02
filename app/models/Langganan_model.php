<?php

class Langganan_model
{
    private $table = 'data_langganan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Mencari data langganan berdasarkan ID Akun
    public function getLanggananByAkun($id_akun)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_akun = :id_akun');
        $this->db->bind('id_akun', $id_akun);
        return $this->db->single();
    }

    // Untuk menyimpan data pendaftaran ke database
    public function tambahDataLangganan($data, $id_akun)
    {
        // Menghitung tanggal otomatis menggunakan PHP
        $tanggal_mulai = date('Y-m-d');
        $tanggal_berakhir = date('Y-m-d', strtotime('+1 month')); // Otomatis menambah 1 bulan ke depan

        $query = "INSERT INTO " . $this->table . " 
                    (nama_pelanggan, alamat, no_telp, tanggal_mulai, tanggal_berakhir, status_langganan, id_akun) 
                  VALUES 
                    (:nama_pelanggan, :alamat, :no_telp, :tanggal_mulai, :tanggal_berakhir, :status_langganan, :id_akun)";

        $this->db->query($query);

        // Bind data yang diketik user di form input ($_POST)
        $this->db->bind('nama_pelanggan', $data['nama_pelanggan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['no_telp']);

        // Bind data tanggal hasil komputasi di atas
        $this->db->bind('tanggal_mulai', $tanggal_mulai);
        $this->db->bind('tanggal_berakhir', $tanggal_berakhir);

        // Set status default langsung 'Aktif' setelah mendaftar
        $this->db->bind('status_langganan', 'Nonaktif');

        // ID Akun diambil dari session user yang sedang aktif
        $this->db->bind('id_akun', $id_akun);

        // Eksekusi query ke database
        $this->db->execute();

        // Mengembalikan angka 1 jika berhasil masuk, atau 0 jika gagal
        return $this->db->rowCount();
    }

    // Mengubah status 'Nonaktif' menjadi 'Aktif' setelah konfirmasi QRIS
    public function aktifkanLangganan($id_akun)
    {
        $query = "UPDATE " . $this->table . " 
              SET status_langganan = 'Aktif' 
              WHERE id_akun = :id_akun AND status_langganan = 'Nonaktif'";

        $this->db->query($query);
        $this->db->bind('id_akun', $id_akun);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // Mengupdate tanggal_berakhir dengan menambahkan 1 bulan dari masa berakhir sebelumnya
    public function perpanjangMasaLangganan($langganan_lama)
    {
        $id_langganan = $langganan_lama['id_langganan'];
        $tanggal_berakhir_lama = $langganan_lama['tanggal_berakhir'];

        // Mengubah string tanggal berakhir lama menjadi format waktu, lalu ditambahkan 1 bulan ke depan
        $tanggal_berakhir_baru = date('Y-m-d', strtotime('+1 month', strtotime($tanggal_berakhir_lama)));

        // Query untuk mengupdate baris yang sudah ada berdasarkan id_langganan
        $query = "UPDATE " . $this->table . " 
              SET tanggal_berakhir = :tanggal_berakhir_baru 
              WHERE id_langganan = :id_langganan";

        $this->db->query($query);

        // Bind data baru
        $this->db->bind('tanggal_berakhir_baru', $tanggal_berakhir_baru);
        $this->db->bind('id_langganan', $id_langganan);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
