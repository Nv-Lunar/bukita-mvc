<?php

class User_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        // $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->singel();
    }

    public function ubahUser($data)
    {


        $query = "UPDATE user SET
            username=:username,
            nama=:nama,
            password=:password
            WHERE id=:id
        ";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function insertUser($data)
    {

        $query = "INSERT INTO user(id, nama, username, password) VALUES(
            null,
            :nama,
            :username,
            :password
        )";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function deleteUser($id)
    {
        $delete = "DELETE FROM user WHERE id=:id";
        $this->db->query($delete);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function Login($data)
    {
        $login = "SELECT * FROM " . $this->table . " WHERE username=:username and password=:password";

        $this->db->query($login);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function Logout()
    {
        unset($_SESSION['login']);
        //atau
        session_destroy();
    }
}

?>