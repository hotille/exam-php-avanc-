<?php

class ConducteursController
{
    // Route: GET courses
    public function list()
    {

        $conducteurs = Conducteur::findAll();
        view('conducteurs.list', compact('conducteurs'));
    }

 
    // Route: POST courses/add
    public function save()
    {

        $conducteur = new Conducteur;
        $conducteur->setNom($_POST['nom']);
        $conducteur->setPrenom($_POST['prenom']);
        $conducteur->save();

        redirectTo('conducteurs');
    }

    // Route: GET courses/$id/edit
    public function edit($id)
    {
        $conducteur = Conducteur::findOne($id);
        view('conducteurs.edit', compact('conducteur'));
    }

    // Route: POST courses/$id/edit
    public function update($id)
    {
        $conducteur = Conducteur::findOne($id);
        $conducteur->setNom($_POST['nom']);
        $conducteur->setPrenom($_POST['prenom']);
        $conducteur->update();

        redirectTo('conducteurs');
    }

}
