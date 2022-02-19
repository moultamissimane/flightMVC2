<?php
class Airline
{
    static public function getAll()
    {
        try {
            $query = 'SELECT * FROM airline';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt = null;
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO airline (name, abreviation, src, city)VALUES (:name, :abreviation, :src, :city)');
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
