<?php

class ReservationControllers
{
    static public function add()
    {
        if (isset($_POST['submit'])) {
            $reservations = [];
            // num of passangers in passanger form is rising each time I click to add another one 
            $num_pass = count($_POST['full_name']);
            for ($i=0; $i<$num_pass;$i++){
                $data = array(
                    'full_name' => $_POST['full_name'][$i],
                    'user_id' => $_SESSION['user']->id,
                    'passport' => $_POST['passport'][$i],
                    'flight_id' => $_POST['flight_id']
                );
                $res = Reservation::addPassenger($data);
                // The array_push() inserts one or more elements to the end of an array
                array_push($reservations , $res); 
            }
            $data = array(
                'user_id' => $_SESSION['user']->id,
                'flight_id' => $_POST['flight_id']
            );
            $res = Reservation::addReservationUser($data);
            array_push($reservations , $res);
            return  $reservations;
        }
    }
    static public function getByUser()
    {
            $res = Reservation::getByUser($_SESSION['user']->id);
            return  $res;
    }
}