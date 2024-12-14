<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once "../src/views/" . $view . ".php";
    }

    public function model($model)
    {
        require_once "../src/models/" . $model . ".php";
        return new $model();
    }
    
    public function requireLogin()
    {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: /Auth/login");  // Redirect to login if not logged in
            exit;
        }
    }

    // Ensure user has the right role
    public function requireRole($requiredRole)
    {
        $this->requireLogin();  // Ensure they're logged in first
        if ($_SESSION['role'] !== $requiredRole) {
            header("Location: /unauthorized");  // Redirect to unauthorized if role doesn't match
            exit;
        }
    }
}
