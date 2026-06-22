<?php

interface EvaluableInterface
{
    public function getNote(): float;

    public function ajouterEvaluation();

    public function getMoyenneEvaluations(): float;
}