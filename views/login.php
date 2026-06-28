<?php
session_start();
require_once("../config/config.php");

$message = "";

if(isset($_POST['connexion'])){

    $email = trim($_POST['email']);
    $motdepasse = $_POST['motdepasse'];

    if(!empty($email) && !empty($motdepasse)){

        try{

            $pdo = Database::connect();

            $sql = $pdo->prepare("SELECT * FROM utilisateurs WHERE email=?");
            $sql->execute([$email]);

            $utilisateur = $sql->fetch(PDO::FETCH_ASSOC);

            if($utilisateur){

                if(password_verify($motdepasse,$utilisateur['motDePasse'])){

                    $_SESSION['id']=$utilisateur['id'];
                    $_SESSION['nom']=$utilisateur['nom'];
                    $_SESSION['role']=$utilisateur['role'];

                    if($utilisateur['role']=="Administrateur"){
                        header("Location: dashboard_admin.php");
                        exit();
                    }elseif($utilisateur['role']=="Conducteur"){
                        header("Location: dashboard_conducteur.php");
                        exit();
                    }else{
                        header("Location: profil.php");
                        exit();
                    }

                }else{

                    $message="<div class='alert alert-danger'>Mot de passe incorrect.</div>";

                }

            }else{

                $message="<div class='alert alert-danger'>Email introuvable.</div>";

            }

        }catch(Exception $e){

            $message="<div class='alert alert-danger'>".$e->getMessage()."</div>";

        }

    }else{

        $message="<div class='alert alert-warning'>Veuillez remplir tous les champs.</div>";

    }

}
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Connexion | KaayDem</title>

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

.container-login{

width:1100px;

height:650px;

display:flex;

background:white;

border-radius:25px;

overflow:hidden;

box-shadow:0 20px 50px rgba(0,0,0,.35);

}

.left{

width:50%;

background:linear-gradient(rgba(128,0,32,.75),rgba(128,0,32,.75)),
url("https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1600");

background-size:cover;

background-position:center;

padding:60px;

color:white;

display:flex;

flex-direction:column;

justify-content:center;

}

.left h1{

font-size:55px;

font-weight:700;

margin-bottom:20px;

}

.left p{

font-size:18px;

line-height:32px;

}

.right{

width:50%;

display:flex;

justify-content:center;

align-items:center;

background:white;

}

.card-login{

width:420px;

}
.form-title{

font-size:35px;

font-weight:700;

color:#800020;

text-align:center;

margin-bottom:10px;

}

.subtitle{

text-align:center;

color:#777;

margin-bottom:35px;

}

.input-box{

margin-bottom:20px;

position:relative;

}

.input-box input{

width:100%;

height:55px;

padding-left:50px;

border:1px solid #ddd;

border-radius:12px;

outline:none;

font-size:16px;

transition:.3s;

}

.input-box input:focus{

border-color:#800020;

box-shadow:0 0 10px rgba(128,0,32,.2);

}

.input-box i{

position:absolute;

left:18px;

top:18px;

color:#800020;

}

.btn-login{

width:100%;

height:55px;

background:#800020;

border:none;

border-radius:12px;

color:white;

font-size:18px;

font-weight:600;

cursor:pointer;

transition:.3s;

}

.btn-login:hover{

background:#600018;

transform:translateY(-2px);

}

.footer{

margin-top:25px;

text-align:center;

}

.footer a{

text-decoration:none;

font-weight:600;

color:#800020;

}

.alert{

margin-bottom:20px;

}

</style>

</head>

<body>

<div class="container-login">

<div class="left">

<h1>KaayDem</h1>

<p>

Voyagez en toute sécurité avec notre plateforme de covoiturage.
Réservez facilement vos trajets et partagez vos déplacements.

</p>

</div>

<div class="right">

<div class="card-login">

<h2 class="form-title">

Connexion

</h2>

<p class="subtitle">

Connectez-vous à votre compte

</p>

<?php echo $message; ?>
<form method="POST">

    <div class="input-box">

        <i class="fa-solid fa-envelope"></i>

        <input
            type="email"
            name="email"
            placeholder="Adresse e-mail"
            required>

    </div>

    <div class="input-box">

        <i class="fa-solid fa-lock"></i>

        <input
            type="password"
            name="motdepasse"
            placeholder="Mot de passe"
            required>

    </div>

    <button
        type="submit"
        name="connexion"
        class="btn-login">

        <i class="fa-solid fa-right-to-bracket"></i>
        Se connecter

    </button>

</form>

<div class="footer">

    <p>

        Vous n'avez pas encore de compte ?

    </p>

    <a href="inscription.php">

        Créer un compte

    </a>

</div>

</div>

</div>

</div>

</body>

</html>