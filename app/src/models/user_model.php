<?php

class user_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUserByUsername($username)
    {
        $this->db->query("SELECT * FROM \"Users\" WHERE username = :username");
        $this->db->bind(":username", $username);
        return $this->db->single();
    }

    public function registerUser($username, $hashed_password, $email)
{
    $this->db->query("INSERT INTO \"Users\" (id, role, username, password, email, created_at) VALUES (:id, :role, :username, :password, :email, NOW())");
    $this->db->bind(":id", 14);
    $this->db->bind(":role", "guru");
    $this->db->bind(':username', $username);
    $this->db->bind(':password', $hashed_password);
    $this->db->bind(':email', $email);
    $this->db->execute();
}

}
