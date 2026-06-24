<?php

class Trajet
{
    private int $id;
    private int $conducteurId;
    private string $villeDepart;
    private string $villeArrivee;
    private string $dateHeure;
    private int $nbPlacesTotal;
    private int $nbPlacesDisponibles;
    private float $prixParPlace;
     public function __construct(
        int $id,
        int $conducteurId,
        string $villeDepart,
        string $villeArrivee,
        string $dateHeure,
        int $nbPlacesTotal,
        int $nbPlacesDisponibles,
        float $prixParPlace
    ) {
        $this->id = $id;
        $this->conducteurId = $conducteurId;
        $this->villeDepart = $villeDepart;
        $this->villeArrivee = $villeArrivee;
        $this->dateHeure = $dateHeure;
        $this->nbPlacesTotal = $nbPlacesTotal;
        $this->nbPlacesDisponibles = $nbPlacesDisponibles;
        $this->prixParPlace = $prixParPlace;
    }

    public function getId(): int { return $this->id; }
    public function setId(int $id): void { $this->id = $id; }

    public function getConducteurId(): int { return $this->conducteurId; }
    public function setConducteurId(int $conducteurId): void { $this->conducteurId = $conducteurId; }

    public function getVilleDepart(): string { return $this->villeDepart; }
    public function setVilleDepart(string $villeDepart): void { $this->villeDepart = $villeDepart; }

    public function getVilleArrivee(): string { return $this->villeArrivee; }
    public function setVilleArrivee(string $villeArrivee): void { $this->villeArrivee = $villeArrivee; }

    public function getDateHeure(): string { return $this->dateHeure; }
    public function setDateHeure(string $dateHeure): void { $this->dateHeure = $dateHeure; }

    public function getNbPlacesTotal(): int { return $this->nbPlacesTotal; }
    public function setNbPlacesTotal(int $nbPlacesTotal): void { $this->nbPlacesTotal = $nbPlacesTotal; }

    public function getNbPlacesDisponibles(): int { return $this->nbPlacesDisponibles; }
    public function setNbPlacesDisponibles(int $nbPlacesDisponibles): void { $this->nbPlacesDisponibles = $nbPlacesDisponibles; }

    public function getPrixParPlace(): float { return $this->prixParPlace; }
    public function setPrixParPlace(float $prixParPlace): void { $this->prixParPlace = $prixParPlace; }
}