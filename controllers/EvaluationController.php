<?php

require_once "models/Evaluation.php";

class EvaluationController
{
    public function ajouter()
    {
        $evaluation = new Evaluation(
            1,
            1,
            1,
            5,
            "Très bon conducteur",
            date("Y-m-d H:i:s")
        );

        echo "Evaluation ajoutée";
    }

    public function afficher()
    {
        echo "Affichage des évaluations";
    }
}