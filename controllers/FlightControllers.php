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
            $flight = Flight::getOneFlight($_POST['id']);
            return $flight[0];
            
        }
    }
    public function add()
    {
        if (isset($_POST['submit'])) {
            $data = array( //array associative
                'city_from' => $_POST['city_from'],
                'city_to' => $_POST['city_to'],
                'departure' => $_POST['departure'],
                'arrive' => $_POST['arrive'],
                'price' => $_POST['price'],
                'seats' => $_POST['seats'],
                'airline_id' => $_POST['airline_id']
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
    public function update()
    {
        if (isset($_POST['submit'])) {
            $data = array( //array associative
                'id' => $_POST['id'],
                'city_from' => $_POST['city_from'],
                'city_to' => $_POST['city_to'],
                'departure' => $_POST['departure'],
                'arrive' => $_POST['arrive'],
                'price' => $_POST['price'],
                'seats' => $_POST['seats'],
                'airline_id' => $_POST['airline_id'],
            );
            $result = Flight::update($data);
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
    public function findFlight($data){
        if(isset($_POST['search'])){
            $data = array('search' =>$_POST ['search']);
        }
        $flight = flight::search($data);
        return $flight;
    }
}