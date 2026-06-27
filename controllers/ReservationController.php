<?php

require_once "models/Reservation.php";

class ReservationController
{
    public function reserver()
    {
        $reservation = new Reservation(
            1,
            1,
            1,
            date("Y-m-d H:i:s"),
            "en_attente"
        );

        echo "Réservation effectuée";
    }

    public function confirmer($id)
    {
        echo "Réservation ".$id." confirmée";
    }

    public function annuler($id)
    {
        echo "Réservation ".$id." annulée";
    }
}