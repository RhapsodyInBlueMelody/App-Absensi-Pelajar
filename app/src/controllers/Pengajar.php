<?php

class Guru extends Controller
{
    public function index()
    {
        // session_start();
        // if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
        //     header("Location: /Auth/login");
        //     exit;
        // }

        $data["judul"] = "Admin Dashboard";
        $this->view("templates/header", $data);
        $this->view("pengajar/dashboard");
        $this->view("templates/footer");
    }
}