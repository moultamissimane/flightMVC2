<?php
class Flight
{
    static public function getAll()
    {
        try {
            // we created a table using view in PHPMyAdmin (DB) so that we can associate two table flight and airline 
            // this query used to know how many seats areavailable 
            // we start from SELECTING  all from that table and flight_airline.seats 
            // next we decrease number of total seats from reservation table (with id) as available_seats from the table we have (flight_airline)
            // select count(*) returns the number of rows   
            $query = 'SELECT flight_airline.*,
                                flight_airline.seats 
                                        - 
                                (select count(*) from reservation 
                                                where reservation.flight_id = flight_airline.id) 
                                as available_seats
                         FROM flight_airline';
            $stmt = DB::connect()->prepare($query);
            if ($stmt->execute()) {
                return $stmt->fetchAll();
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }
    static public function getOneFlight($id)
    {
        try {
            $query = 'SELECT flight_airline.*,
                                flight_airline.seats 
                                        - 
                                (select count(*) from reservation 
                                                where reservation.flight_id = flight_airline.id) 
                                as available_seats
                        FROM flight_airline where id=' . $id;
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
        $stmt = DB::connect()->prepare('INSERT INTO flight (city_from, city_to, departure, arrive, price, airline_id, seats)VALUES (:city_from, :city_to, :departure, :arrive, :price, :airline_id, :seats)');
        $stmt->bindParam(':city_from', $data['city_from']);
        $stmt->bindParam(':city_to', $data['city_to']);
        $stmt->bindParam(':departure', $data['departure']);
        $stmt->bindParam(':arrive', $data['arrive']);
        $stmt->bindParam(':airline_id', $data['airline_id']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':seats', $data['seats']);
        if ($stmt->execute()) {
            return true;
        } else {
            return 'error';
        }
    }
    static public function update($data)
    {
        $stmt = DB::connect()->prepare('UPDATE Flight SET city_from=:city_from, city_to=:city_to, departure=:departure, arrive=:arrive, price=:price, airline_id=:airline_id, seats=:seats WHERE id= :id');
        $stmt->bindParam(':id', $data['id']); //placeholder 
        $stmt->bindParam(':city_from', $data['city_from']);
        $stmt->bindParam(':city_to', $data['city_to']);
        $stmt->bindParam(':departure', $data['departure']);
        $stmt->bindParam(':arrive', $data['arrive']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':airline_id', $data['airline_id']);
        $stmt->bindParam(':seats', $data['seats']);

        if ($stmt->execute()) {
            return true;
        } else {
            return 'error';
        }
        $stmt = null;
    }

    static public function delete($id)
    {
        $stmt = DB::connect()->prepare("DELETE FROM Flight WHERE id = '$id'");
        if ($stmt->execute()) {
            return true;
        } else {
            return 'error';
        }
    }
    // static public function search($data)
    // {
    //     $search = $data['search'];
    //     try {
    //         $query = 'SELECT * FROM Flight WHERE city_from LIKE ? OR city_to LIKE ?';
    //         $stmt = DB::connect()->prepare($query);
    //         $stmt->execute(array('%' . $search . '%', '%' . $search . '%'));
    //         return $flight = $stmt->fetchAll();
    //     } catch (PDOException $ex) {
    //         echo 'error' . $ex->getMessage();
    //     }
    // }
}
