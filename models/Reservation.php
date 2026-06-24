<?php

class Reservation
{
    private int $id;
    private int $passagerId;
    private int $trajetId;
    private string $dateReservation;
    private string $statut;
     public function __construct(
        int $id,
        int $passagerId,
        int $trajetId,
        string $dateReservation,
        string $statut
    ) {
        $this->id = $id;
        $this->passagerId = $passagerId;
        $this->trajetId = $trajetId;
        $this->dateReservation = $dateReservation;
        $this->statut = $statut;
    }

    public function getId(): int { return $this->id; }
    public function setId(int $id): void { $this->id = $id; }

    public function getPassagerId(): int { return $this->passagerId; }
    public function setPassagerId(int $passagerId): void { $this->passagerId = $passagerId; }

    public function getTrajetId(): int { return $this->trajetId; }
    public function setTrajetId(int $trajetId): void { $this->trajetId = $trajetId; }

    public function getDateReservation(): string { return $this->dateReservation; }
    public function setDateReservation(string $dateReservation): void { $this->dateReservation = $dateReservation; }

    public function getStatut(): string { return $this->statut; }
    public function setStatut(string $statut): void { $this->statut = $statut; }
}