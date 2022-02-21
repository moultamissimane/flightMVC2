<?php
class Flight
{
    static public function getAll()
    {
        try {
            $query = 'SELECT * FROM flight';
            $stmt = DB::connect()->prepare($query);
            if ($stmt->execute()) {
                return $stmt->fetchAll();
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO flight (city_from, city_to, departure, price, airline_id, seats)VALUES (:city_from, :city_to, :departure, :price, :airline_id, :seats)');
        $stmt->bindParam(':city_from', $data['city_from']);
        $stmt->bindParam(':city_to', $data['city_to']);
        $stmt->bindParam(':departure', $data['departure']);
        $stmt->bindParam(':airline_id', $data['airline_id']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':seats', $data['seats']);
        if ($stmt->execute()) {
            return true;
        } else {
            return 'error';
        }
        $stmt = null;
    }
    static public function updateFlight($data){
        $stmt = DB::connect()->prepare('UPDATE Flight SET city_from=:city_from, city_to=:city_to, departure=:departure, price=:price, airline_id=:airline_id, seats=:seats WHERE id= :id');
        $stmt -> bindParam(':id', $data['id']);//placeholder 
        $stmt -> bindParam(':city_from', $data['city_from']); 
        $stmt -> bindParam(':city_to', $data['city_to']);
        $stmt -> bindParam(':departure', $data['departure']);
        $stmt -> bindParam(':price', $data['price']);
        $stmt -> bindParam(':airline_id', $data['airline_id']);
        $stmt -> bindParam(':seats', $data['seats']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;

    }

    static public function delete($id){
        $stmt = DB::connect()->prepare("DELETE FROM Flight WHERE id = '$id'");
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
    }
}
