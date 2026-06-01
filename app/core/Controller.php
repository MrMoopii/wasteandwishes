<?php

class Controller
{
    // Fungsi controller view, bertugas untuk menampilkan view yang sesuai
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    // Fungsi controller model, bertugas untuk memilih model yang diinginkan
    public function model($model)
    {
        require_once "../app/models/" . $model . '.php';
        return new $model;
    }
}