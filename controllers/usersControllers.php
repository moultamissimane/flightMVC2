<?php

// use LDAP\Result;

use LDAP\Result;

class UsersControllers
{

    public function auth()
    {
        if (isset($_POST['submit'])) {
            $data['email'] = $_POST['email'];
            $result = User::login($data);
            if (password_verify($_POST['password'], $result->password)) {
                $_SESSION['logged'] = true;
                $_SESSION['full_name'] = $result->fullname;
                Redirect::to('dashUser');
            
            } else {
                Session::set('error', 'name or password incorrect');
                Redirect::to('loginUser');

            }
        }
    }

    public function adminAuth()
    {
        if (isset($_POST['submit'])) {
            $data['email'] = $_POST['email'];
            $result = User::Adminlogin($data);
            if ($_POST['password'] === $result->password) {
                $_SESSION['logged'] = true;
                $_SESSION['isAdmin'] = true;
                $_SESSION['full_name'] = $result->full_name;
                Redirect::to('dashUser');
            
            } else {
                Session::set('error', 'name or password incorrect');
                Redirect::to('loginAdmin');

            }
        }
    }

    public function register()
    {
        if (isset($_POST['submit'])) {
            $options = [
                'cost' => 12
            ];
            $password = password_hash(
                $_POST['password'],
                PASSWORD_BCRYPT,
                $options
            );
            $data = array(
                'full_name' => $_POST['full_name'],
                'date_of_birth' => $_POST['date_of_birth'],
                'email' => $_POST['email'],
                'password' => $password,
            );
            $result = User::createUser($data);
            if ($result) {
                Session::set('success', 'account created');
                $_SESSION['logged'] = true;
                $_SESSION['user'] = $result;
                Redirect::to('dashUser');
            } else {
                echo $result;
            }
        }
    }
    static public function getAll()
    {
        // getAll function to get all elements from employes (static)
        $user =User::getAll();
        return $user;
    }
    static public function getOneUser()
    {
        if (isset($_POST['user'])) {
            $user = user::getOneuser($_POST['user']);
            return $user[0];
        }
    }

    static public function logout(){
        session_destroy();
    }
}
