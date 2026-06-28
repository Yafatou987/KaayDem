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

<title>Trajets | KaayDem</title>

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

.search-box{
background:white;
padding:25px;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.08);
margin-top:30px;
}

.trip-card{
background:white;
border:none;
border-radius:20px;
padding:25px;
margin-top:25px;
box-shadow:0 10px 25px rgba(0,0,0,.08);
transition:.3s;
}

.trip-card:hover{
transform:translateY(-5px);
}

.btn-kaay{
background:#800020;
color:white;
border:none;
border-radius:10px;
padding:10px 25px;
}

.btn-kaay:hover{
background:#5e0018;
color:white;
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
<a class="nav-link active" href="trajets.php">Trajets</a>
</li>

<li class="nav-item">
<a class="nav-link" href="mes_reservations.php">Réservations</a>
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

🚗 Trouver un trajet

</h1>

<p>

Recherchez rapidement un covoiturage selon votre destination.

</p>

</div>

<div class="search-box">

<form>

<div class="row g-3">

<div class="col-md-4">

<input
type="text"
class="form-control"
placeholder="Ville de départ">

</div>

<div class="col-md-4">

<input
type="text"
class="form-control"
placeholder="Ville d'arrivée">

</div>

<div class="col-md-4">

<input
type="date"
class="form-control">

</div>

<div class="col-12 text-center">

<button class="btn btn-kaay">

<i class="fa-solid fa-magnifying-glass"></i>

Rechercher

</button>

</div>

</div>

</form>

</div>

<div class="row mt-4">
    <div class="col-md-4">

    <div class="trip-card">

        <h4 class="text-danger">Dakar ➜ Thiès</h4>

        <hr>

        <p><i class="fa-solid fa-user"></i> Mamadou Diallo</p>

        <p><i class="fa-solid fa-calendar"></i> 26 Juin 2026</p>

        <p><i class="fa-solid fa-clock"></i> 08h30</p>

        <p><i class="fa-solid fa-chair"></i> 3 places disponibles</p>

        <h5 class="text-success">2 000 FCFA</h5>

        <button class="btn btn-kaay w-100">
            Réserver
        </button>

    </div>

</div>

<div class="col-md-4">

    <div class="trip-card">

        <h4 class="text-danger">Dakar ➜ Mbour</h4>

        <hr>

        <p><i class="fa-solid fa-user"></i> Awa Ndiaye</p>

        <p><i class="fa-solid fa-calendar"></i> 27 Juin 2026</p>

        <p><i class="fa-solid fa-clock"></i> 09h00</p>

        <p><i class="fa-solid fa-chair"></i> 2 places disponibles</p>

        <h5 class="text-success">1 500 FCFA</h5>

        <button class="btn btn-kaay w-100">
            Réserver
        </button>

    </div>

</div>

<div class="col-md-4">

    <div class="trip-card">

        <h4 class="text-danger">Thiès ➜ Touba</h4>

        <hr>

        <p><i class="fa-solid fa-user"></i> Ibrahima Fall</p>

        <p><i class="fa-solid fa-calendar"></i> 28 Juin 2026</p>

        <p><i class="fa-solid fa-clock"></i> 14h00</p>

        <p><i class="fa-solid fa-chair"></i> 4 places disponibles</p>

        <h5 class="text-success">3 000 FCFA</h5>

        <button class="btn btn-kaay w-100">
            Réserver
        </button>

    </div>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>