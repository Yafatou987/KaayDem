<?php
session_start();
require_once("../config/config.php");

if(!isset($_SESSION['id'])){
    header("Location:login.php");
    exit();
}

$pdo = Database::connect();

$reservations = $pdo->query("SELECT * FROM reservations")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Gestion des réservations</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
background:#f3f4f8;
}

.navbar{
background:#800020;
}

.table{
background:white;
}

</style>

</head>

<body>

<nav class="navbar navbar-dark">

<div class="container">

<a class="navbar-brand fw-bold" href="dashboard_admin.php">

<i class="fa-solid fa-arrow-left"></i>

Retour Dashboard

</a>

</div>

</nav>

<div class="container mt-5">

<h2 class="text-danger mb-4">

<i class="fa-solid fa-ticket"></i>

Gestion des réservations

</h2>

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>

<th>ID</th>

<th>Passager</th>

<th>Trajet</th>

<th>Date</th>

<th>Statut</th>

</tr>

</thead>

<tbody>

<?php foreach($reservations as $r){ ?>

<tr>

<td><?= $r['id']; ?></td>

<td><?= $r['passager_id']; ?></td>

<td><?= $r['trajet_id']; ?></td>

<td><?= date('d/m/Y H:i', strtotime($r['dateReservation'])); ?></td>

<td><?= $r['statut']; ?></td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</body>

</html>