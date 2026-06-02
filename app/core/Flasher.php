<?php

class Flasher
{

    public static function setFlash($pesan, $aksi, $tipe)
    { // pesan (berhasil/gagal), aksi (tambah/hapus/edit), dan tipe untuk kelas bootstrap
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            unset($_SESSION['flash']);
        }
    }
    
    public static function flash_event()
    {
        if( isset($_SESSION['flash']) ) {
            
            $pesan = $_SESSION['flash']['pesan'];
            $aksi = $_SESSION['flash']['aksi'];
            $tipe = $_SESSION['flash']['tipe']; // success, error, warning, info

            // Panggil Library SweetAlert2 via CDN & Jalankan Scriptnya
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Yeay!',
                        text: 'Kamu {$pesan} {$aksi}!',
                        icon: '{$tipe}',
                        confirmButtonText: 'Lanjut',
                        confirmButtonColor: '#17AFB0', // Warna hijau tema Waste & Wishes lu
                        backdrop: `rgba(0,0,0,0.4)`
                    });
                });
            </script>
            ";
            
            // Hapus session setelah ditampilkan
            unset($_SESSION['flash']);
        }
    }    
}