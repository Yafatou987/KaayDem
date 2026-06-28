<?php
session_start();
require_once("../config/config.php");

$message = "";

if(isset($_POST['inscription'])){

    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $email = trim($_POST['email']);
    $telephone = trim($_POST['telephone']);
    $role = $_POST['role'];
    $motDePasse = $_POST['motDePasse'];
    $confirmation = $_POST['confirmation'];

    if(
        !empty($nom) &&
        !empty($prenom) &&
        !empty($email) &&
        !empty($telephone) &&
        !empty($role) &&
        !empty($motDePasse) &&
        !empty($confirmation)
    ){

        if($motDePasse == $confirmation){

            try{

                $pdo = Database::connect();

                $verif = $pdo->prepare("SELECT id FROM utilisateurs WHERE email=?");
                $verif->execute([$email]);

                if($verif->rowCount()>0){

                    $message="<div class='alert alert-danger'>Cet email existe déjà.</div>";

                }else{

                    $sql=$pdo->prepare("INSERT INTO utilisateurs(nom,prenom,email,motDePasse,telephone,role)
                    VALUES(?,?,?,?,?,?)");

                    $sql->execute([
                        $nom,
                        $prenom,
                        $email,
                        password_hash($motDePasse,PASSWORD_DEFAULT),
                        $telephone,
                        $role
                    ]);

                    $message="<div class='alert alert-success'>
                    Compte créé avec succès.
                    </div>";

                }

            }catch(Exception $e){

                $message="<div class='alert alert-danger'>".$e->getMessage()."</div>";

            }

        }else{

            $message="<div class='alert alert-danger'>
            Les mots de passe ne correspondent pas.
            </div>";

        }

    }else{

        $message="<div class='alert alert-warning'>
        Veuillez remplir tous les champs.
        </div>";

    }

}
?>

<!DOCTYPE html>

<html lang="fr">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Inscription | KaayDem</title>

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

height:100vh;

display:flex;

justify-content:center;

align-items:center;

background:
linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),
url("https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1600");

background-size:cover;
background-position:center;

}

.container-register{

width:1150px;

height:760px;

display:flex;

background:white;

border-radius:25px;

overflow:hidden;

box-shadow:0 20px 50px rgba(0,0,0,.35);

}
.left{

width:45%;

background:
linear-gradient(rgba(128,0,32,.80),rgba(128,0,32,.80)),
url("https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1600");

background-size:cover;
background-position:center;

padding:60px;

display:flex;
flex-direction:column;
justify-content:center;

color:white;

}

.left h1{

font-size:50px;

font-weight:700;

margin-bottom:20px;

}

.left p{

font-size:18px;

line-height:32px;

}

.right{

width:55%;

display:flex;

justify-content:center;

align-items:center;

background:#fff;

}

.card-register{

width:470px;

}

.form-title{

font-size:35px;

font-weight:700;

text-align:center;

color:#800020;

margin-bottom:10px;

}

.subtitle{

text-align:center;

color:#777;

margin-bottom:30px;

}

.row-input{

display:flex;

gap:15px;

}

.input-box{

position:relative;

margin-bottom:18px;

flex:1;

}

.input-box i{

position:absolute;

left:18px;

top:18px;

color:#800020;

}

.input-box input,
.input-box select{

width:100%;

height:55px;

padding-left:50px;

border:1px solid #ddd;

border-radius:12px;

outline:none;

font-size:15px;

transition:.3s;

}

.input-box input:focus,
.input-box select:focus{

border-color:#800020;

box-shadow:0 0 10px rgba(128,0,32,.2);

}

.btn-register{

width:100%;

height:55px;

background:#800020;

color:white;

border:none;

border-radius:12px;

font-size:18px;

font-weight:600;

cursor:pointer;

transition:.3s;

}

.btn-register:hover{

background:#600018;

transform:translateY(-2px);

}

.footer{

margin-top:25px;

text-align:center;

}

.footer a{

text-decoration:none;

color:#800020;

font-weight:600;

}

.alert{

margin-bottom:20px;

}

</style>

</head>

<body>

<div class="container-register">

<div class="left">

<h1>KaayDem</h1>

<p>

Rejoignez notre plateforme de covoiturage et voyagez partout au Sénégal en toute sécurité.

</p>

</div>

<div class="right">

<div class="card-register">

<h2 class="form-title">

Créer un compte

</h2>

<p class="subtitle">

Inscrivez-vous gratuitement

</p>

<?php echo $message; ?>
<form method="POST">

<div class="row-input">

<div class="input-box">

<i class="fa-solid fa-user"></i>

<input
type="text"
name="nom"
placeholder="Nom"
required>

</div>

<div class="input-box">

<i class="fa-solid fa-user"></i>

<input
type="text"
name="prenom"
placeholder="Prénom"
required>

</div>

</div>

<div class="input-box">

<i class="fa-solid fa-envelope"></i>

<input
type="email"
name="email"
placeholder="Adresse e-mail"
required>

</div>

<div class="input-box">

<i class="fa-solid fa-phone"></i>

<input
type="text"
name="telephone"
placeholder="Téléphone"
required>

</div>

<div class="input-box">

<i class="fa-solid fa-users"></i>

<select name="role" required>

<option value="">Choisir un rôle</option>

<option value="Passager">Passager</option>

<option value="Conducteur">Conducteur</option>

<option value="Administrateur">Administrateur</option>

</select>

</div>

<div class="row-input">

<div class="input-box">

<i class="fa-solid fa-lock"></i>

<input
type="password"
name="motDePasse"
placeholder="Mot de passe"
required>

</div>

<div class="input-box">

<i class="fa-solid fa-key"></i>

<input
type="password"
name="confirmation"
placeholder="Confirmer le mot de passe"
required>

</div>

</div>

<button
type="submit"
name="inscription"
class="btn-register">

<i class="fa-solid fa-user-plus"></i>

Créer un compte

</button>

</form>

<div class="footer">

<p>

Vous avez déjà un compte ?

</p>

<a href="login.php">

Se connecter

</a>

</div>

</div>

</div>

</div>

</body>

</html>