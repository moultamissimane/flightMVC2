<?php

class Session{
    static public function set($type,$message){
        // A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer.
        //1param: $type = name /2param: $message = value /3param: time = expire
        setcookie($type,$message,time() + 5,"/");
    }
    
    static public function isAdmin(){
        if(!isset($_SESSION['isAdmin'])){
            Redirect::to(BASE_URL . '/loginAdmin');
          }
    }
}


?>