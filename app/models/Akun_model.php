<?php

class Akun_model
{
    private $tabel = 'akun';
    private $db;

    public function __construct()
    {
        // Instansiasi class Database core untuk mengaktifkan koneksi PDO
        $this->db = new Database;
    }

    // Mencari akun berdasarkan username
    public function getAkunByUsernamme($username)
    {
        // Siapkan query menggunakan prepared statement
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE username = :username');
        // Ikat nilainya ke parameter
        $this->db->bind('username', $username);
        // Mengembalikan 1 baris data dengan username unik
        return $this->db->single();
    }

    // Menambahkan akun baru
    public function tambahDataAkun($data)
    {
        // Melakukan enskripsi/hash password menjadi karakter acak
        $password_hashed = password_hash($data['password'], PASSWORD_DEFAULT);

        // Menyiapkan query untuk insert ke database
        $query = 'INSERT INTO ' . $this->tabel . ' (username, email, password, peran) 
        VALUES (:username, :email, :password, :peran';

        $this->db->query($query);

        // Mengikat semua nilai ke parameter
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $password_hashed);
        $this->db->bind('peran', 'user');

        // Eksekusi query
        $this->db->execute();

        // Menghitung baris yang berhasil ditambahkan jika berhasil akan mengembalikan nilai 1 jika tidak 0
        $this->db->rowCount();

    }
}