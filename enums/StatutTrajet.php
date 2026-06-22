<?php

enum StatutTrajet: string
{
    case OUVERT = 'ouvert';
    case COMPLET = 'complet';
    case ANNULE = 'annule';
    case TERMINE = 'termine';
}