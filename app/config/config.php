<?php

// Link url yang banyak dipakai di program
// Cek apakah sedang berjalan di komputer sendiri (lokal) atau di Render (online)
if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '127.0.0.1') {
    define('BASEURL', 'http://localhost/wasteandwishes/public');
} else {
    // Gantilah sesuai dengan nama domain unik yang kamu dapatkan dari Render nanti
    define('BASEURL', 'https://waste-and-wishes.onrender.com');
}
// Database
define('DB_HOST', 'sql12.freesqldatabase.com'); // Host Database
define('DB_USER', 'sql12828996'); // Username Database
define('DB_PASS', 'EPMfYsTLsw'); // Password Database
define('DB_NAME', 'sql12828996'); // Nama Database