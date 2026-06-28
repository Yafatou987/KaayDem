<?php
session_start();
require_once("../config/config.php");

if(!isset($_SESSION['id'])){
    header("Location:login.php");
    exit();
}

$pdo = Database::connect();

$nbUtilisateurs = $pdo->query("SELECT COUNT(*) FROM utilisateurs")->fetchColumn();
$nbTrajets = $pdo->query("SELECT COUNT(*) FROM trajets")->fetchColumn();
$nbReservations = $pdo->query("SELECT COUNT(*) FROM reservations")->fetchColumn();
$nbEvaluations = $pdo->query("SELECT COUNT(*) FROM evaluations")->fetchColumn();
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Statistiques | KaayDem</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    background:#f3f4f8;
    font-family:Poppins,sans-serif;
}

.navbar{
    background:#800020;
}

.card{
    border:none;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.10);
    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.icon{
    font-size:45px;
    color:#800020;
}

</style>

</head>

<body>

<nav class="navbar navbar-dark">

<div class="container">

<a href="dashboard_admin.php" class="navbar-brand fw-bold">

<i class="fa-solid fa-arrow-left"></i>

Retour Dashboard

</a>

</div>

</nav>

<div class="container mt-5">

<h2 class="text-danger text-center mb-5">

📊 Statistiques de KaayDem

</h2>

<div class="row g-4">

<div class="col-md-3">

<div class="card p-4 text-center">

<i class="fa-solid fa-users icon"></i>

<h2><?= $nbUtilisateurs ?></h2>

<p>Utilisateurs</p>

</div>

</div>

<div class="col-md-3">

<div class="card p-4 text-center">

<i class="fa-solid fa-road icon"></i>

<h2><?= $nbTrajets ?></h2>

<p>Trajets</p>

</div>

</div>

<div class="col-md-3">

<div class="card p-4 text-center">

<i class="fa-solid fa-ticket icon"></i>

<h2><?= $nbReservations ?></h2>

<p>Réservations</p>

</div>

</div>

<div class="col-md-3">

<div class="card p-4 text-center">

<i class="fa-solid fa-star icon"></i>

<h2><?= $nbEvaluations ?></h2>

<p>Évaluations</p>

</div>

</div>

</div>

</div>

</body>

</html>