<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="../scss/style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header class="container">
        <div class="row">
            <div class="col-4">
                <a href="./index.php">
                    <img id="logo" src="../img/logo.png">
                </a>
            </div>
            <button class="col-2 offset-1">Réserver</button>
            
            <?php
                if (isset($_SESSION["Email"]) && $_SESSION["Email"] != null) {
            ?>
                <button id="buttonLogin buttonBlack" class="col-2 offset-1" onclick="window.location.href = '../html/deconnect.php'">Se deconnecter</button>
            <?php
                }else {
            ?>
                <button id="buttonLogin" class="col-2 offset-1" onclick="window.location.href = '../html/login.html'">Se connecter</button>
                <button id="buttonRegister" class="col-2 buttonBlack">S'inscrire</button>
            <?php
                }
            ?>
            
        </div>
        <div class="row">
            <div id="trait" class="col-12"></div>
        </div>
    </header>

    <footer>
        <div class="container-fluider">
            <div class="row">
                <div id="Footer" class="col-12">
                    <p class="EcritureBlanche">Footer</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>