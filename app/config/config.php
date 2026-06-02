<?php

// Link url yang banyak dipakai di program
// Cek apakah sedang berjalan di komputer sendiri (lokal) atau di Render (online)
if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '127.0.0.1') {
    define('BASEURL', 'http://localhost/wasteandwishes/public');
} else {
    // Gantilah sesuai dengan nama domain unik yang kamu dapatkan dari Render nanti
    define('BASEURL', 'https://wasteandwishes.onrender.com/');
}
// Database
define('DB_HOST', getenv('DB_HOST')); // Host Database
define('DB_USER', getenv('DB_USER')); // Username Database
define('DB_PASS', getenv('DB_PASS')); // Password Database
define('DB_NAME', getenv('DB_NAME')); // Nama Database