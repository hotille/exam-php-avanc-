<?php

class Vehicule extends Db
{

    const TABLE_NAME = "vehicule";

    protected $id;
    protected $marque;
    protected $modele;
    protected $couleur;
    protected $immatriculation;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setMarque($marque)
    {
        if (strlen($marque) < 1) {
            throw new Exception('Le champ est vide.');
        }

        $this->marque = $marque;
        return $this;
    }

    public function setModele($modele)
    {
        if (strlen($modele) < 1) {
            throw new Exception('Le champ est vide.');
        }

        $this->modele = $modele;
        return $this;
    }

    public function setCouleur($couleur)
    {
        if (strlen($couleur) < 1) {
            throw new Exception('Le champ est vide.');
        }

        $this->couleur = $couleur;
        return $this;
    }

    public function setImmatriculation($immatriculation)
    {
        if (strlen($immatriculation) < 1) {
            throw new Exception('Le champ est vide.');
        }

        $this->immatriculation = $immatriculation;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    public function save()
    {
        $data = [
            "marque"  => $this->getMarque(),
            "modele" => $this->getModele(),
            "couleur"  => $this->getCouleur(),
            "immatriculation" => $this->getImmatriculation()
        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public function update()
    {
        if ($this->id > 0) {
            $data = [
                "marque"  => $this->getMarque(),
                "modele" => $this->getModele(),
                "couleur"  => $this->getCouleur(),
                "immatriculation" => $this->getImmatriculation()
            ];
            Db::dbUpdate(self::TABLE_NAME, $data);
            return $this;
        }
        return;
    }

}