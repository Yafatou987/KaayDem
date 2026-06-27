<?php

class AuthController
{
    public function inscription()
    {
        echo "Inscription utilisateur";
    }

    public function connexion()
    {
        echo "Connexion utilisateur";
    }

    public function deconnexion()
    {
        session_destroy();
        header("Location: index.php");
    }
}