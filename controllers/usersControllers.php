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
                $_SESSION['full_name'] = $result->full_name;
                Redirect::to('dashUser');
            
            } else {
                Session::set('error', 'name or password incorrect');
                Redirect::to('loginUser');

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
                'fullname' => $_POST['fullname'],
                'date_of_birth' => $_POST['date_of_birth'],
                'email' => $_POST['email'],
                'password' => $password,
            );
            $result = User::createUser($data);
            if ($result === 'ok') {
                Session::set('success', 'accompte created');
                // Redirect::to('loginUser');
            } else {
                echo $result;
            }
        }
    }
}
