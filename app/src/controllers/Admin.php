<?php

class Admin extends Controller
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
        $this->view("admin/dashboard");
        $this->view("templates/footer");
    }
}