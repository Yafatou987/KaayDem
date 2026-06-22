<?php

interface ReservableInterface
{
    public function getPlacesDisponibles(): int;

    public function reserverPlace();

    public function libererPlace();
}