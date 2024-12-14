<?php

class Pengajar extends Controller
{
    public function index()
    {
        $this->requireRole('guru');

        $data["judul"] = "Admin Dashboard";
        $this->view("templates/header", $data);
        $this->view("pengajar/dashboard");
        $this->view("templates/footer");
    }
}