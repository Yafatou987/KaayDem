<?php
session_start();
require_once("../config/config.php");

if(!isset($_SESSION['id'])){
    header("Location: login.php");
    exit();
}

$pdo = Database::connect();
$id = $_SESSION['id'];

if(isset($_POST['modifier'])){

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    $sql = $pdo->prepare("
        UPDATE utilisateurs
        SET nom=?, email=?, telephone=?
        WHERE id=?
    ");

    $sql->execute([$nom,$email,$telephone,$id]);

    $_SESSION['nom'] = $nom;

    echo "<script>alert('Profil modifié avec succès !');</script>";
}

$sql = $pdo->prepare("SELECT * FROM utilisateurs WHERE id=?");
$sql->execute([$id]);
$utilisateur = $sql->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Mon Profil</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f5f5f5;
}

.card{
    max-width:700px;
    margin:40px auto;
    padding:30px;
    border-radius:20px;
}

.avatar{
    width:120px;
    height:120px;
    background:#800020;
    color:white;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:50px;
    margin:auto;
}
</style>

</head>

<body>

<div class="card shadow">

<div class="text-center mb-4">

<div class="avatar">
👤
</div>

<h3 class="mt-3"><?= $utilisateur['nom']; ?></h3>

<p><?= $utilisateur['role']; ?></p>

</div>

<form method="POST">

<div class="mb-3">

<label>Nom</label>

<input
type="text"
name="nom"
class="form-control"
value="<?= $utilisateur['nom']; ?>">

</div>

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control"
value="<?= $utilisateur['email']; ?>">

</div>

<div class="mb-3">

<label>Téléphone</label>

<input
type="text"
name="telephone"
class="form-control"
value="<?= $utilisateur['telephone']; ?>">

</div>

<div class="mb-3">

<label>Rôle</label>

<input
type="text"
class="form-control"
value="<?= $utilisateur['role']; ?>"
readonly>

</div>

<div class="text-center">

<button
type="submit"
name="modifier"
class="btn btn-danger">

Modifier le profil

</button>

</div>

</form>

</div>

</body>

</html>