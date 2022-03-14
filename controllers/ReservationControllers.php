<?php

class ReservationControllers
{
    static public function add()
    {
        if (isset($_POST['submit'])) {
            $reservations = [];
            $num_pass = count($_POST['full_name']);
            for ($i=0; $i<$num_pass;$i++){
                $data = array(
                    'full_name' => $_POST['full_name'][$i],
                    'user_id' => $_SESSION['user']->id,
                    'passport' => $_POST['passport'][$i],
                    'flight_id' => $_POST['flight_id']
                );
                $res = Reservation::addPassenger($data);
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
}