<?php

class PembayaranController extends Controller
{
    public function index()
    {
        $data['judul'] = 'Pembayaran';

        $this->view('templates/header', $data);
        $this->view('pembayaran/index', $data);
        $this->view('templates/footer');
    }

    public function bukti()
    {
        $data['judul'] = 'Bukti Pembayaran';

        $this->view('templates/header', $data);
        $this->view('pembayaran/bukti', $data);
        $this->view('templates/footer');
    }
}
