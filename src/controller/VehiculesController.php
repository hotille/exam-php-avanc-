<?php

class VehiculesController
{
    // Route: GET courses
    public function list()
    {

        $vehicules = Vehicule::findAll();
        view('vehicules.list', compact('vehicules'));
    }


    // Route: POST courses/add
    public function save()
    {
        $vehicule = new Vehicule;
        $vehicule->setMarque($_POST['marque']);
        $vehicule->setModele($_POST['modele']);
        $vehicule->setCouleur($_POST['couleur']);
        $vehicule->setImmatriculation($_POST['immatriculation']);
        $vehicule->save();

        redirectTo('vehicules');
    }

    // Route: GET courses/$id/edit
    public function edit($id)
    {
        $vehicule = Vehicule::findOne($id);
        view('vehicules.edit', compact('vehicule'));
    }

    // Route: POST courses/$id/edit
    public function update($id)
    {
        $vehicule = Vehicule::findOne($id);
        $vehicule->setMarque($_POST['marque']);
        $vehicule->setModele($_POST['modele']);
        $vehicule->setCouleur($_POST['couleur']);
        $vehicule->setImmatriculation($_POST['immatriculation']);
        $vehicule->update();

        redirectTo('vehicules');
    }
}