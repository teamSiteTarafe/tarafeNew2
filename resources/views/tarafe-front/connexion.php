<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connexion.css">
    <title>Connexion</title>
</head>
<body>
<?php include('menu2.php');?>
    <div class="container00">
        <p class="connect">Connectez-vous</p>
        <form action="#" method="post">
            <input type="text" placeholder="E-mail ou numéro de téléphone">
            <input type="password" placeholder="Mot de passe">
            <label for="rappeler">
                <input type="checkbox" name="rappeler" id="rappeler">
                Se rappeler de moi
            </label>
            <a href="#" class="oublier">Mot de passe oublié ?</a>
            <input type="submit" value="Se connecter">
        </form>
        <p class="creer">
            Vous n'avez pas encore de compte? <br>
            <a href="#">Créez en un ici</a>
        </p>
    </div>
</body>
</html>