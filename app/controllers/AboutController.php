<?php

class AboutController extends Controller
{
    public function index()
    {
        $data['judul'] = "Tentang Kami";

        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }
}