<?php
    UsersControllers::logout();
    if(isset($_GET['type'])){
        Redirect::to('loginUser');
    }else{
        Redirect::to('loginAdmin');
    }
?>