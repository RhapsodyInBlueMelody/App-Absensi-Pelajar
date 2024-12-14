<?php

class Admin extends Controller
{
    public function index()
    {   
        $this->requireRole('admin');

        $data["judul"] = "Admin Dashboard";
        $this->view("templates/header", $data);
        $this->view("admin/dashboard");
        $this->view("templates/footer");
    }
}