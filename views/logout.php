<?php
session_start();
session_destroy();

header("Location: login.php"); // ou index.php si ta page d'accueil est index.php
exit();