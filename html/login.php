<?php
    require("CurlController.php");

    $arr = array("Email" => $_POST["Email"], "Password" => $_POST["Password"]);
    $envoie = json_encode($arr);

    $Controller = new CurlController;
    $Output = $Controller->Requete("https://localhost:7058/Compte/Login",$envoie,"POST");

   // var_dump($Output);
    $a = json_decode($Output); 

    session_start();
    $_SESSION["Id"] = $a->Id;
    $_SESSION["Prenom"] = $a->Prenom;
    $_SESSION["Nom"] = $a->Nom;
    $_SESSION["Email"] = $a->Email;

    header('Location: ./index.php');
?>