<?php

enum StatutReservation: string
{
    case EN_ATTENTE = 'en_attente';
    case CONFIRMEE = 'confirmee';
    case TERMINEE = 'terminee';
    case ANNULEE = 'annulee';
    case REFUSEE = 'refusee';
}