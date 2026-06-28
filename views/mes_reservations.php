<?php
session_start();
require_once("../config/config.php");

if(!isset($_SESSION['id'])){
    header("Location:login.php");
    exit();
}

$nom=$_SESSION['nom'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Mes Réservations | KaayDem</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#f3f4f8;
}

.navbar{
background:#800020;
padding:15px;
box-shadow:0 10px 30px rgba(0,0,0,.15);
}

.navbar-brand{
color:white!important;
font-size:30px;
font-weight:700;
}

.nav-link{
color:white!important;
margin-left:18px;
}

.nav-link:hover{
color:#FFD700!important;
}

.hero{
background:linear-gradient(135deg,#800020,#b22222);
padding:50px;
border-radius:20px;
margin-top:35px;
color:white;
}

.table-box{
background:white;
padding:30px;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.08);
margin-top:30px;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand" href="dashboard_passager.php">

<i class="fa-solid fa-car-side"></i>

KaayDem

</a>

<div class="collapse navbar-collapse">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="dashboard_passager.php">Accueil</a>
</li>

<li class="nav-item">
<a class="nav-link" href="trajets.php">Trajets</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="mes_reservations.php">Réservations</a>
</li>

<li class="nav-item">
<a class="nav-link" href="profil.php">Profil</a>
</li>

<li class="nav-item">
<a class="nav-link text-warning" href="logout.php">Déconnexion</a>
</li>

</ul>

</div>

</div>

</nav>
<div class="container">

<div class="hero">

<h1>

🎫 Mes réservations

</h1>

<p>

Consultez toutes vos réservations de trajets.

</p>

</div>

<div class="table-box">

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead class="table-danger">

<tr>

<th>Départ</th>

<th>Arrivée</th>

<th>Date</th>

<th>Prix</th>

<th>Statut</th>

</tr>

</thead>

<tbody>

<tr>

<td>Dakar</td>

<td>Thiès</td>

<td>26/06/2026</td>

<td>2 000 FCFA</td>

<td>

<span class="badge bg-success">

Confirmée

</span>

</td>

</tr>

<tr>

<td>Dakar</td>

<td>Mbour</td>

<td>27/06/2026</td>

<td>1 500 FCFA</td>

<td>

<span class="badge bg-warning text-dark">

En attente

</span>

</td>

</tr>

<tr>

<td>Thiès</td>

<td>Touba</td>

<td>28/06/2026</td>

<td>3 000 FCFA</td>

<td>

<span class="badge bg-danger">

Annulée

</span>

</td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>