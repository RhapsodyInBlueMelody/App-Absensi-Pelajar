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
        // Assume we have a User model
        $userModel = $this->model("User");

        $username = $_POST['username'];
        $password = $_POST['password'];

        // Fetch user from database
        $user = $userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            // Start session
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role']; // 'admin' or 'user'

            // Redirect based on role
            if ($user['role'] === 'admin') {
                header("Location: /admin/dashboard");
            } else {
                header("Location: /user/dashboard");
            }
            exit;
        } else {
            // Failed login
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