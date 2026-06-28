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

<title>Évaluation | KaayDem</title>

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

.eval-card{

background:white;

padding:35px;

border-radius:20px;

box-shadow:0 10px 25px rgba(0,0,0,.08);

margin-top:30px;

}

.stars{

text-align:center;

font-size:35px;

color:#FFC107;

margin-bottom:25px;

}

.stars i{

margin:0 5px;

cursor:pointer;

transition:.3s;

}

.stars i:hover{

transform:scale(1.2);

}

.btn-kaay{

background:#800020;

color:white;

border:none;

padding:12px 35px;

border-radius:10px;

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
<a class="nav-link" href="trajets.php">Trajets</a>
</li>

<li class="nav-item">
<a class="nav-link" href="mes_reservations.php">Réservations</a>
</li>

<li class="nav-item">
<a class="nav-link" href="profil.php">Profil</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="evaluation.php">Évaluation</a>
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

⭐ Évaluer un trajet

</h1>

<p>

Donnez une note et partagez votre expérience.

</p>

</div>

<div class="eval-card">

<h3 class="text-center mb-4">

Bonjour <?php echo $nom; ?>

</h3>

<div class="stars">

<i class="fa-solid fa-star"></i>

<i class="fa-solid fa-star"></i>

<i class="fa-solid fa-star"></i>

<i class="fa-solid fa-star"></i>

<i class="fa-regular fa-star"></i>

</div>

<div class="mb-4">

<label class="form-label">

Commentaire

</label>

<textarea
class="form-control"
rows="5"
placeholder="Écrivez votre commentaire..."></textarea>

</div>

<div class="text-center">

<button class="btn btn-kaay">

<i class="fa-solid fa-paper-plane"></i>

Envoyer l'évaluation

</button>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>