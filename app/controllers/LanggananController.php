<?php

class LanggananController extends Controller
{
    public function index()
    {
        $data['judul'] = "Berlangganan Sampah";

        $this->view('templates/header', $data);
        $this->view('langganan/index');
        $this->view('templates/footer');
    }

    public function jadwalpengambilan()
    {
        $data['judul'] = "Jadwal Pengambilan Rutin";

        $this->view('templates/header', $data);
        $this->view('langganan/jadwalpengambilan', $data);
        $this->view('templates/footer');
    }
}