<?php

class Auth extends Controller
{
    public function index()
    {
        $data["judul"] = "Login";
        $this->view("templates/header", $data);
        $this->view("auth/login"); // Login form view
        $this->view("templates/footer");
    }

    public function authenticate()
    {

        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = $this->model('user_model');
            $user = $userModel->getUserByUsername($username);


        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role']; 

     
            if ($user['role'] === 'admin') {
                header("Location: /Admin/dashboard");
            } if else ($user['role'] === 'pengajar') {
                header("Location: /Pengajar/dashboard");
            } else {
                header("Location: /Murid/dashboard")
            }
            exit;
        } else {

            $data["error"] = "Invalid credentials";
            $this->view("templates/header", $data);
            $this->view("auth/login", $data);
            $this->view("templates/footer");
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: /auth/login");
        exit;
    }
}