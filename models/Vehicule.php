<?php

class Vehicule
{
    private int $id;
    private string $marque;
    private string $modele;
    private string $immatriculation;
    private string $couleur;
    private int $nbPlaces;
    private int $conducteurId;
    public function __construct(
        int $id,
        string $marque,
        string $modele,
        string $immatriculation,
        string $couleur,
        int $nbPlaces,
        int $conducteurId
    ) {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->immatriculation = $immatriculation;
        $this->couleur = $couleur;
        $this->nbPlaces = $nbPlaces;
        $this->conducteurId = $conducteurId;
    }

    public function getId(): int { return $this->id; }
    public function setId(int $id): void { $this->id = $id; }

    public function getMarque(): string { return $this->marque; }
    public function setMarque(string $marque): void { $this->marque = $marque; }

    public function getModele(): string { return $this->modele; }
    public function setModele(string $modele): void { $this->modele = $modele; }

    public function getImmatriculation(): string { return $this->immatriculation; }
    public function setImmatriculation(string $immatriculation): void { $this->immatriculation = $immatriculation; }

    public function getCouleur(): string { return $this->couleur; }
    public function setCouleur(string $couleur): void { $this->couleur = $couleur; }

    public function getNbPlaces(): int { return $this->nbPlaces; }
    public function setNbPlaces(int $nbPlaces): void { $this->nbPlaces = $nbPlaces; }

    public function getConducteurId(): int { return $this->conducteurId; }
    public function setConducteurId(int $conducteurId): void { $this->conducteurId = $conducteurId; }
}