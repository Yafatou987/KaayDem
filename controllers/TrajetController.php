<?php

require_once "models/Trajet.php";

class TrajetController
{
    public function ajouter()
    {
        $trajet = new Trajet(
            1,
            1,
            "Dakar",
            "Thiès",
            "2026-06-24 08:00:00",
            4,
            4,
            2500
        );

        echo "Trajet ajouté";
    }

    public function modifier($id)
    {
        echo "Modification du trajet ".$id;
    }

    public function supprimer($id)
    {
        echo "Suppression du trajet ".$id;
    }

    public function rechercher()
    {
        echo "Recherche d'un trajet";
    }

    public function afficherTous()
    {
        echo "Affichage des trajets";
    }
}