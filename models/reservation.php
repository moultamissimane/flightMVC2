<?php

class Reservation{

    static public function addPassenger($data){
        $stmt = DB::connect()->prepare('INSERT INTO passenger (user_id, full_name , passport) VALUES (:user_id, :full_name , :passport)');
        $stmt->bindParam(':user_id',$data['user_id']);
        $stmt->bindParam(':full_name',$data['full_name']);
        $stmt->bindParam(':passport',$data['passport']);

        if($stmt->execute()){
            // 
            $stmt = DB::connect()->prepare('SELECT * from passenger group by id desc limit 1');
            $stmt->execute();
            $passenger = $stmt->fetch(PDO::FETCH_OBJ);
            $data['passenger_id'] = $passenger->id;
            $addReservation = Reservation::addReservationPassenger($data);
            if($addReservation){
                $stmt = DB::connect()->prepare('SELECT * FROM reservation as r,user as u,flight_airline f,passenger as p WHERE r.user_id = u.id and r.flight_id = f.id and r.passenger_id = p.id group by r.id desc limit 1');
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_OBJ);
            }
        }else{
            return 'error';
        }
        $stmt = null;
    }

    static public function addReservationPassenger($data){
        $stmt = DB::connect()->prepare('INSERT INTO reservation (user_id, flight_id, passenger_id) VALUES (:user_id, :flight_id, :passenger_id)');
        $stmt->bindParam(':user_id',$data['user_id']);
        $stmt->bindParam(':flight_id',$data['flight_id']);
        $stmt->bindParam(':passenger_id',$data['passenger_id']);

        if($stmt->execute()){
            return true;
        }else{
            return 'error';
        }
        $stmt = null;
    }
    
    static public function addReservationUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO reservation (user_id, flight_id) VALUES (:user_id, :flight_id)');
        $stmt->bindParam(':user_id',$data['user_id']);
        $stmt->bindParam(':flight_id',$data['flight_id']);
        if($stmt->execute()){
            $stmt = DB::connect()->prepare('SELECT * FROM reservation as r,user as u,flight_airline f,passenger as p WHERE r.user_id = u.id and r.flight_id = f.id group by r.id desc limit 1');
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }else{
            return 'error';
        }
        $stmt = null;
    }

    static public function delete($id)
    {
        $stmt = DB::connect()->prepare("DELETE FROM Reservation WHERE id = '$id'");
        if ($stmt->execute()) {
            return true;
        } else {
            return 'error';
        }
    }
    static public function getByUser($id)
    {
        try {
            $stmt = DB::connect()->prepare("SELECT * FROM reservation as r,user as u,flight_airline f,passenger as p WHERE r.user_id = u.id and r.flight_id = f.id and u.id='$id' group by r.id desc;");
            if ($stmt->execute()) {
                return $stmt->fetchAll();
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }

   
}