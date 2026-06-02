<?php

class Event_model
{
    private $tabel = 'event';
    private $db;

    public function __construct()
    {
        // Instansiasi class Database core untuk mengaktifkan koneksi PDO
        $this->db = new Database;
    }

    // Mengambil semua data event untuk halaman Daftar Event
    public function getAllEvent()
    {
        // Siapkan query untuk mengambil seluruh baris data
        $this->db->query('SELECT * FROM ' . $this->tabel);
        
        // Mengembalikan banyak baris data (array multidimensi)
        return $this->db->resultSet();
    }

    // Mencari 1 event spesifik berdasarkan id_event (untuk Detail & Checkout)
    public function getEventById($id_event)
    {
        // Siapkan query menggunakan prepared statement
        // Ingat, primary key di tabel lu namanya 'id_event' bukan cuma 'id'
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE id_event = :id_event');
        
        // Ikat nilainya ke parameter
        $this->db->bind('id_event', $id_event);
        
        // Mengembalikan 1 baris data event yang dipilih
        return $this->db->single();
    }
    // Method untuk menambahkan pendaftar baru ke tabel pendaftar_event
public function tambahDataPendaftar($data)
    {
        $id_akun = $_SESSION['id_akun'];
        $query = "INSERT INTO pendaftar_event 
                  (id_akun, id_event, nama, no_telepon, tanggal_lahir) 
                  VALUES 
                  (:id_akun, :id_event, :nama, :no_telepon, :tanggal_lahir)";

        $this->db->query($query);

      
        $this->db->bind('id_akun', $id_akun);
        $this->db->bind('id_event', $data['id_event']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('no_telepon', $data['no_hp']);
        $this->db->bind('tanggal_lahir', $data['tgl_lahir']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    }