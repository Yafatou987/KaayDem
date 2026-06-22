CREATE DATABASE kaaydem;
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(100),
    motDePasse VARCHAR(255),
    telephone VARCHAR(20),
    role VARCHAR(20)
);
CREATE TABLE vehicules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marque VARCHAR(100),
    modele VARCHAR(100),
    immatriculation VARCHAR(50),
    couleur VARCHAR(50),
    nbPlaces INT,
    conducteur_id INT
);
CREATE TABLE trajets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    conducteur_id INT,
    villeDepart VARCHAR(100),
    villeArrivee VARCHAR(100),
    dateHeure DATETIME,
    nbPlacesTotal INT,
    nbPlacesDisponibles INT,
    prixParPlace DECIMAL(10,2)
);
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    passager_id INT,
    trajet_id INT,
    dateReservation DATETIME,
    statut VARCHAR(50)
);
CREATE TABLE evaluations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    passager_id INT,
    conducteur_id INT,
    note INT,
    commentaire TEXT,
    dateEvaluation DATETIME
);