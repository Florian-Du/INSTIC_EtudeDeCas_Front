<?php
    $headers = array();
    array_push($headers,"Content-Type:application/json");
   

    $arr = array("Email" => $_POST["Email"], "Password" => $_POST["Password"]);
   // $envoie = json_encode($arr);

    var_dump($arr);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:7058/Compte/Login");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $output = curl_exec($ch);

    var_dump(curl_error($ch));
    var_dump($output);

    if ($output) {
        if ($output != null) {
            var_dump($output);
        }else {
            var_dump("Compte inexistant");
        }
    }else {
        var_dump("Erreur lors de la recuperation du compte");
    }
   
?>