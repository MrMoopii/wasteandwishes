<?php

class App
{
    protected $controller = "HomeController";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        // Kelola controller
        $url = $this->parseURL();
        if (isset($url[0])) {
            // Mengubah input URL (misal: 'home' menjadi 'Home') agar cocok dengan nama file
            $url[0] = ucfirst($url[0]);
            // Buat variabel sementara dengan akhiran 'Controller' (misal: 'AuthController')
            $controllerName = $url[0] . "Controller";

            // Cek apakah file AuthController.php ada di folder
            if (file_exists(__DIR__ . "/../controllers/" . $controllerName . ".php")) {
                $this->controller = $controllerName;
                unset($url[0]);
            }
        }

        require_once __DIR__ . "/../controllers/" . $this->controller . ".php";
        // Instansiasi object controller
        $this->controller = new $this->controller;

        // Kelola method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) { // Menggunakan object controller untuk mengecek apakah ada method di dallam objek itu
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Kelola params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Menjalankan controller dan method serta mengirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return [];
    }
}