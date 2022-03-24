<?php
class Airline
{
    static public function getAll()
    {
        try {
            $query = 'SELECT * FROM airline';
            $stmt = DB::connect()->prepare($query);
            // execute() executes a prepared statement
            $stmt->execute();
            // fetchAll() returns an array that contains all of the result
            return $stmt->fetchAll();
            $stmt = null;
            // PDOException reprents an error  
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO airline (name, abreviation, src, city)VALUES (:name, :abreviation, :src, :city)');
        // bindParam() we use it to associate a parameter to a specified value 
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':abreviation', $data['abreviation']);
        $stmt->bindParam(':src', $data['src']);
        $stmt->bindParam(':city', $data['city']);
        if ($stmt->execute()) {
            return true;
        } else {
            return 'error';
        }
        $stmt = null;
    }
}
