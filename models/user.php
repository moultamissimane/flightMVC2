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
        try {
            $stmt = DB::connect()->prepare('INSERT INTO user (full_name, date_of_birth, email, password) VALUES (:full_name, :date_of_birth, :email, :password)');
            $stmt->bindParam(':full_name', $data['full_name']);
            $stmt->bindParam(':date_of_birth', $data['date_of_birth']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':password', $data['password']);
            $res = $stmt->execute();
            if ($res) {
                $stmt = DB::connect()->prepare('SELECT * from user group by id desc limit 1');
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_OBJ);
                return $user;
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
        $stmt = null;
    }

    static public function getAll()
    {
        try {
            $query = 'SELECT * FROM user';
            $stmt = DB::connect()->prepare($query);
            if ($stmt->execute()) {
                return $stmt->fetchAll();
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }
    static public function getOneUser($id)
    {
        try {
            $query = 'SELECT * FROM user where id='.$id ;
            $stmt = DB::connect()->prepare($query);
            if ($stmt->execute()) {
                return $stmt->fetchAll();
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }
}
