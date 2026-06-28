<?php
session_start();
require_once("../config/config.php");

if(!isset($_SESSION['id'])){
    header("Location:login.php");
    exit();
}

$pdo = Database::connect();

$utilisateurs = $pdo->query("SELECT * FROM utilisateurs")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Gestion des utilisateurs</title>

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

<i class="fa-solid fa-users"></i>

Gestion des utilisateurs

</h2>

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>

<th>ID</th>

<th>Nom</th>

<th>Prénom</th>

<th>Email</th>

<th>Téléphone</th>

<th>Rôle</th>

</tr>

</thead>

<tbody>

<?php foreach($utilisateurs as $u){ ?>

<tr>

<td><?= $u['id']; ?></td>

<td><?= $u['nom']; ?></td>

<td><?= $u['prenom']; ?></td>

<td><?= $u['email']; ?></td>

<td><?= $u['telephone']; ?></td>

<td><?= $u['role']; ?></td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</body>

</html>