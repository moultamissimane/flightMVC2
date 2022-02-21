<?php

class FlightControllers
{
    static public function getAll()
    {
        // getAll function to get all elements from employes (static)
        $flight =Flight::getAll();
        return $flight;
    }
    public function getOneFlight()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
            $flight = Flight::getAll($data);
            return $flight;
        }
    }
    public function add()
    {
        if (isset($_POST['submit'])) {
            $data = array( //array associative
                'city_from' => $_POST['city_from'],
                'city_to' => $_POST['city_to'],
                'departure' => $_POST['departure'],
                'price' => $_POST['price'],
                'seats' => $_POST['seats'],
                'airline_id' => $_POST['airline_id'],
            );
            $result = Flight::add($data);
            if ($result) {
                session::set('success', 'Flight Added');
                // Redirect::to('dashFlight');
            } else {
                echo $result;
            }
        }
    }
    public function updateFlight()
    {
        if (isset($_POST['submit'])) {
            $data = array( //array associative
                'id' => $_POST['id'],
                'city_from' => $_POST['city_from'],
                'city_to' => $_POST['city_to'],
                'departure' => $_POST['departure'],
                'price' => $_POST['price'],
                'seats' => $_POST['seats'],
                'airline_id' => $_POST['airline_id'],
            );
            $result = Flight::updateFlight($data);
            if ($result === 'ok') {
                session::set('success', 'Flight Modiffied');
                Redirect::to('home');
            } else {
                echo $result;
            }
        }
    }

    public function delete($id){
        $result = Flight::delete($_POST['id']);
        if ($result === 'ok') {
            session::set('success', 'Flight Modiffied');
            Redirect::to('dashFlight');
        } else {
            echo $result;
        }
    }
}