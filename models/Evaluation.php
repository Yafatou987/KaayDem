<?php

class Evaluation
{
    private int $id;
    private int $passagerId;
    private int $conducteurId;
    private int $note;
    private string $commentaire;
    private string $dateEvaluation;
    public function __construct(
        int $id,
        int $passagerId,
        int $conducteurId,
        int $note,
        string $commentaire,
        string $dateEvaluation
    ) {
        $this->id = $id;
        $this->passagerId = $passagerId;
        $this->conducteurId = $conducteurId;
        $this->note = $note;
        $this->commentaire = $commentaire;
        $this->dateEvaluation = $dateEvaluation;
    }

    public function getId(): int { return $this->id; }
    public function setId(int $id): void { $this->id = $id; }

    public function getPassagerId(): int { return $this->passagerId; }
    public function setPassagerId(int $passagerId): void { $this->passagerId = $passagerId; }

    public function getConducteurId(): int { return $this->conducteurId; }
    public function setConducteurId(int $conducteurId): void { $this->conducteurId = $conducteurId; }

    public function getNote(): int { return $this->note; }
    public function setNote(int $note): void { $this->note = $note; }

    public function getCommentaire(): string { return $this->commentaire; }
    public function setCommentaire(string $commentaire): void { $this->commentaire = $commentaire; }

    public function getDateEvaluation(): string { return $this->dateEvaluation; }
    public function setDateEvaluation(string $dateEvaluation): void { $this->dateEvaluation = $dateEvaluation; }
}