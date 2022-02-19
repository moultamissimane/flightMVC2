<?php

class EmployersControllers
{
    public function getAllEmployes()
    {
        // getAll function to get all elements from employes (static)
        $employes = Employe::getAll();
        return $employes;
    }
    public function getOneEmploye()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
            $employe = Employe::getEmploye($data);
            return $employe;
        }
    }
    public function addEmploye()
    {
        if (isset($_POST['submit'])) {
            $data = array( //array associative
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'matricule' => $_POST['matricule'],
                'poste' => $_POST['poste'],
                'depart' => $_POST['depart'],
                'date_emb' => $_POST['date_emb'],
                'statut' => $_POST['statut']
            );
            $result = Employe::add($data);
            if ($result === 'ok') {
                session::set('success', 'Employé Ajouté');
                Redirect::to('home');
            } else {
                echo $result;
            }
        }
    }
    public function updateEmploye()
    {
        if (isset($_POST['submit'])) {
            $data = array( //array associative
                'id' => $_POST['id'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'matricule' => $_POST['matricule'],
                'poste' => $_POST['poste'],
                'depart' => $_POST['depart'],
                'date_emb' => $_POST['date_emb'],
                'statut' => $_POST['statut']
            );
            $result = Employe::update($data);
            if ($result === 'ok') {
                session::set('success', 'Employé Modifié');
                Redirect::to('home');
            } else {
                echo $result;
            }
        }
    }
    public function deleteEmploye()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Employe::delete($data);
            if ($result === 'ok') {
                session::set('success','Employé Supprimé');
                Redirect::to('home');
            } else {
                echo $result;
            }
        }
    }
}
