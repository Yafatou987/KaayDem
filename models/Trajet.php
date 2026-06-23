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
}