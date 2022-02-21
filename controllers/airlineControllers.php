<?php

class AirlineControllers
{
    static public function getAll()
    {
        // getAll function to get all elements from employes (static)
        $airline =Airline::getAll();
        return $airline;
    }
    public function getOneAirline()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
            $airline = Airline::getAll($data);
            return $airline;
        }
    }
    public function add()
    {
        if (isset($_POST['submit'])) {
            $data = array( //array associative
                'name' => $_POST['name'],
                'abreviation' => $_POST['abreviation'],
                'src' => $_POST['src'],
                'city' => $_POST['city'],
            );
            $result = Airline::add($data);
            if ($result) {
                session::set('success', 'Airline Added');
                Redirect::to('dashFlight');
            } else {
                echo $result;
            }
        }
    }
}
