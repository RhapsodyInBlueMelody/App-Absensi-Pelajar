<?php
//Controller untuk Page Home
class Auth extends Controller
{
    public function index()
    {
        $data["judul"] = "Login";
        $this->view("templates/header", $data);
        $this->view("auth/login/index");
        $this->view("templates/footer");
    }
}
