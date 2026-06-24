<?php

class AdminController
{
    public function listeUtilisateurs()
    {
        echo "Liste des utilisateurs";
    }

    public function supprimerUtilisateur($id)
    {
        echo "Suppression de l'utilisateur ".$id;
    }

    public function statistiques()
    {
        echo "Affichage des statistiques";
    }

    public function listeTrajets()
    {
        echo "Liste des trajets";
    }
}