<?php

class Registration extends Controller
{
    public function index(){
        $data["judul"] = "Registration";
        $this->view("templates/header", $data);
        $this->view("auth/registration/index");
        $this->view("templates/footer");
    }

    public function sign_up()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);
        $email = trim($_POST['email']);

        // Validasi input
        $errors = [];

        if (empty($username)) {
            $errors['username'] = 'Username is required';
        }

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Valid email is required';
        }

        if (empty($password)) {
            $errors['password'] = 'Password is required';
        } elseif (strlen($password) < 6) {
            $errors['password'] = 'Password must be at least 6 characters long';
        }

        if ($password !== $confirm_password) {
            $errors['confirm_password'] = 'Passwords do not match';
        }

        // Jika ada error, tampilkan pesan error
        if (!empty($errors)) {
            $data['errors'] = $errors;
            $this->view("templates/header", $data);
            $this->view("auth/registration/index", $data);
            $this->view("templates/footer");
            return;
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        

        // Simpan ke database
        $userModel = $this->model('user_model');
        $userModel->registerUser( $username, $hashed_password, $email);

        // Redirect ke halaman login
        header("Location: /auth/login");
        exit;
    } else {
        // Tampilkan form sign-up
        $this->view("templates/header");
        $this->view("auth/registration/index");
        $this->view("templates/footer");
    }
}

}