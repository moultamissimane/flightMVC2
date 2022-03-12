<?php
class user
{

    static public function login($data)
    {
        $email = $data['email'];
        try {
            $query = 'SELECT * FROM user Where email=:email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email" => $email));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
            if ($stmt->execute()) {
                return true;
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }

    static public function Adminlogin($data)
    {
        $email = $data['email'];
        try {
            $query = 'SELECT * FROM admin Where email=:email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email" => $email));
            if ($stmt->execute()) {
                $admin = $stmt->fetch(PDO::FETCH_OBJ);
                return $admin;
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }

    static public function createUser($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO users (full_name, username, email, password) VALUES (:full_name, :username, :password, :email,)');
        $stmt->bindParam(':full_name', $data['full_name']);
        $stmt->bindParam(':date_of_birth', $data['username']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', $data['password']);
        if ($stmt->execute()) {
            return true;
        } else {
            return 'error';
        }
        $stmt = null;
    }
}
