<?php

class Jadwal_model
{
    private $table = 'jadwal_rutin';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Ambil SATU jadwal berdasarkan ID Langganan
    public function getJadwalByLangganan($id_langganan)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id_langganan = :id_langganan";
        $this->db->query($query);
        $this->db->bind('id_langganan', $id_langganan);
        return $this->db->single(); // Menggunakan single() karena hanya ada 1 jadwal
    }

    // Simpan atau Overwrite jadwal tunggal
    public function simpanJadwalTunggal($id_langganan, $hari_pengambilan, $jam_pengambilan)
    {
        // Hapus jadwal lama milik pelanggan ini jika ada
        $this->db->query("DELETE FROM " . $this->table . " WHERE id_langganan = :id_langganan");
        $this->db->bind('id_langganan', $id_langganan);
        $this->db->execute();

        // Insert 1 data jadwal baru pilihan user
        $query = "INSERT INTO " . $this->table . " (id_langganan, hari_pengambilan, jam_pengambilan) 
                  VALUES (:id_langganan, :hari_pengambilan, :jam_pengambilan)";

        $this->db->query($query);
        $this->db->bind('id_langganan', $id_langganan);
        $this->db->bind('hari_pengambilan', $hari_pengambilan);
        $this->db->bind('jam_pengambilan', $jam_pengambilan);
        $this->db->execute();

        return $this->db->rowCount();
    }
}