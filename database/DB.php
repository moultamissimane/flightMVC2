<?php

class DB {
    static public function connect(){
        $db = new  PDO("mysql:host=localhost; dbname=flightwithus", "root", "");
        $db->exec("set names utf8"); 
        // setattribute return a boolean (ATTR_ERRMODE, ERRMODE_WARNING are displayed in the code just to throw an error in case of failingto connect with DB)
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }
}



?>
