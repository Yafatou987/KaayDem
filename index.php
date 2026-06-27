<?php

require_once "controllers/AuthController.php";
require_once "controllers/TrajetController.php";
require_once "controllers/ReservationController.php";
require_once "controllers/EvaluationController.php";
require_once "controllers/AdminController.php";

$action = $_GET['action'] ?? '';

switch ($action) {

    // Authentification
    case 'connexion':
        (new AuthController())->connexion();
        break;

    case 'inscription':
        (new AuthController())->inscription();
        break;

    case 'deconnexion':
        (new AuthController())->deconnexion();
        break;

    // Trajets
    case 'ajouterTrajet':
        (new TrajetController())->ajouter();
        break;

    case 'rechercherTrajet':
        (new TrajetController())->rechercher();
        break;

    case 'modifierTrajet':
        (new TrajetController())->modifier($_GET['id']);
        break;

    case 'supprimerTrajet':
        (new TrajetController())->supprimer($_GET['id']);
        break;

    // Réservations
    case 'reserver':
        (new ReservationController())->reserver();
        break;

    case 'confirmerReservation':
        (new ReservationController())->confirmer($_GET['id']);
        break;

    case 'annulerReservation':
        (new ReservationController())->annuler($_GET['id']);
        break;

    // Evaluations
    case 'evaluer':
        (new EvaluationController())->ajouter();
        break;

    // Administration
    case 'statistiques':
        (new AdminController())->statistiques();
        break;

    case 'listeUtilisateurs':
        (new AdminController())->listeUtilisateurs();
        break;

    default:
        echo "Bienvenue sur Kaay Dem";
}