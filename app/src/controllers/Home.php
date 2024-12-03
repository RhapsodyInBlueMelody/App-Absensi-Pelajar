<?php
//Controller untuk Page Home
class Home extends Controller
{
    public function index()
    {
        $data["judul"] = "Home";
        $this->view("templates/header", $data);
        $this->view("home/index");
        echo "Hi!";
        $this->view("templates/footer");
    }
}
