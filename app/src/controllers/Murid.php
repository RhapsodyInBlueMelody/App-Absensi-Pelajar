<?php

class Murid extends Controller
{
    public function index()
    {
        // session_start();
        // if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'user') {
        //     header("Location: Auth/login");
        //     exit;
        // }

        $data["judul"] = "User Dashboard";
        $this->view("templates/header", $data);
        $this->view("murid/dashboard");
        $this->view("templates/footer");
    }
}
