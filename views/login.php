<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | KaayDem</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(135deg,#800020,#b22222);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:Arial, Helvetica, sans-serif;
        }

        .login-card{
            width:430px;
            border:none;
            border-radius:20px;
            padding:35px;
            box-shadow:0 15px 35px rgba(0,0,0,.25);
            background:white;
        }

        .logo{
            font-size:60px;
            text-align:center;
        }

        h2{
            color:#800020;
            text-align:center;
            font-weight:bold;
        }

        p{
            text-align:center;
            color:gray;
        }

        .btn-kaaydem{
            background:#800020;
            color:white;
            border:none;
            width:100%;
            padding:12px;
            border-radius:10px;
            font-weight:bold;
        }

        .btn-kaaydem:hover{
            background:#5d0017;
        }

        a{
            color:#800020;
            text-decoration:none;
            font-weight:bold;
        }

        a:hover{
            text-decoration:underline;
        }
    </style>

</head>
<body>

<div class="login-card">

    <div class="logo">
        🚗
    </div>

    <h2>KaayDem</h2>

    <p>Voyagez ensemble, en toute confiance.</p>

    <form>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Votre email">
        </div>

        <div class="mb-3">
            <label>Mot de passe</label>
            <input type="password" class="form-control" placeholder="********">
        </div>

        <button class="btn btn-kaaydem">
            Se connecter
        </button>

    </form>

    <hr>

    <div class="text-center">
        Vous n'avez pas de compte ?
        <a href="inscription.php">S'inscrire</a>
    </div>

</div>

</body>
</html>