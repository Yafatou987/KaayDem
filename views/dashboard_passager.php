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

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Dashboard Passager | KaayDem</title>

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

padding:15px 0;

box-shadow:0 10px 30px rgba(0,0,0,.15);

}

.navbar-brand{

color:white!important;

font-size:30px;

font-weight:700;

}

.nav-link{

color:white!important;

margin-left:20px;

font-weight:500;

transition:.3s;

}

.nav-link:hover{

color:#FFD700!important;

}

.hero{

background:linear-gradient(135deg,#800020,#B22222);

padding:60px;

border-radius:20px;

color:white;

margin-top:40px;

box-shadow:0 15px 40px rgba(0,0,0,.20);

}

.hero h1{

font-size:40px;

font-weight:700;

margin-bottom:15px;

}

.hero p{

font-size:18px;

opacity:.95;

}
.cards{

margin-top:35px;

}

.card-dashboard{

background:white;

border:none;

border-radius:20px;

padding:30px;

text-align:center;

box-shadow:0 10px 25px rgba(0,0,0,.10);

transition:.3s;

height:100%;

}

.card-dashboard:hover{

transform:translateY(-8px);

}

.icon{

width:75px;

height:75px;

background:#800020;

border-radius:50%;

display:flex;

justify-content:center;

align-items:center;

margin:auto;

margin-bottom:20px;

}

.icon i{

font-size:30px;

color:white;

}

.card-dashboard h3{

font-size:32px;

font-weight:700;

color:#800020;

margin-bottom:8px;

}

.card-dashboard p{

color:#777;

font-size:15px;

margin-bottom:20px;

}

.btn-dashboard{

background:#800020;

color:white;

border:none;

padding:10px 25px;

border-radius:10px;

transition:.3s;

}

.btn-dashboard:hover{

background:#5e0018;

color:white;

}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand" href="#">

<i class="fa-solid fa-car-side"></i>

KaayDem

</a>

<button class="navbar-toggler bg-light"
type="button"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse"
id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="trajets.php">Trajets</a>
</li>

<li class="nav-item">
<a class="nav-link" href="mes_reservations.php">Réservations</a>
</li>

<li class="nav-item">
<a class="nav-link" href="profil.php">Profil</a>
</li>

<li class="nav-item">
<a class="nav-link" href="evaluation.php">Évaluation</a>
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

Bonjour <?php echo $nom; ?> 👋

</h1>

<p>

Bienvenue sur votre espace passager. Retrouvez vos trajets, vos réservations et toutes vos activités.

</p>

</div>

<div class="row cards">
    <div class="col-md-3 mb-4">

    <div class="card-dashboard">

        <div class="icon">
            <i class="fa-solid fa-route"></i>
        </div>

        <h3>08</h3>

        <p>Trajets disponibles</p>

        <a href="trajets.php" class="btn btn-dashboard">
            Voir
        </a>

    </div>

</div>

<div class="col-md-3 mb-4">

    <div class="card-dashboard">

        <div class="icon">
            <i class="fa-solid fa-ticket"></i>
        </div>

        <h3>03</h3>

        <p>Mes réservations</p>

        <a href="mes_reservations.php" class="btn btn-dashboard">
            Voir
        </a>

    </div>

</div>

<div class="col-md-3 mb-4">

    <div class="card-dashboard">

        <div class="icon">
            <i class="fa-solid fa-star"></i>
        </div>

        <h3>4.8</h3>

        <p>Mes évaluations</p>

        <a href="evaluation.php" class="btn btn-dashboard">
            Voir
        </a>

    </div>

</div>

<div class="col-md-3 mb-4">

    <div class="card-dashboard">

        <div class="icon">
            <i class="fa-solid fa-user"></i>
        </div>

        <h3>Mon profil</h3>

        <p>Modifier mes informations</p>

        <a href="profil.php" class="btn btn-dashboard">
            Voir
        </a>

    </div>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>