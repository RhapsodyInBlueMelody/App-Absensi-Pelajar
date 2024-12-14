<?php

class Murid extends Controller
{
    public function index()
    {
        $this->requireRole('Murid');

        $data["judul"] = "User Dashboard";
        $this->view("templates/header", $data);
        $this->view("murid/dashboard");
        $this->view("templates/footer");
    }
}
