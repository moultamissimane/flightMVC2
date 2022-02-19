<?php

// use LDAP\Result;

class UsersControllers{
    public function register(){
        if(isset($_POST['submit'])){
            $options = [
                'cost' =>12
                ];
                $password = password_hash($_POST['password'],
                PASSWORD_BCRYPT,$options);
                $data = array(
                    'fullname' => $_POST['fullname'],
                    'username' => $_POST['username'],
                    'password' => $password,
                );
                $result= User::createUser($data);
                if ($result === 'ok') {
                    Session::set('success', 'Compte crée');
                    Redirect::to('login');
                } else {
                    echo $result;
                }
                
        }
    }
}
?>