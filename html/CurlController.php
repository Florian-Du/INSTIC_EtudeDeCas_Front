<?php 

 class CurlController {
    function Requete($url, $donnee, $method) {
        // on definit les propriété de l'array

        $headers = array();
        array_push($headers,"Content-Type:application/json");

        // On init le curl
        $ch = curl_init();

        //On defini l'url de l'api
        curl_setopt($ch, CURLOPT_URL, $url);

        if(isset($method)){
            if ($method == "POST") {
                // On dit que c'est une requete en post
                curl_setopt($ch, CURLOPT_POST, true);

                //On donne les donnees dans le body
                if (isset($donnee)) {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $donnee);
                }
            }else if ($method == "GET") {
                // On dit que c'est une requete en post
                curl_setopt($ch, CURLOPT_POST, false);
            }
        }

        //On dit qu'on attend des données en retour
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // inclure les headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 

        //Desactiver un truc avec les certificats
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $output = curl_exec($ch);
        if ($output) {
            if ($output != null) {
                return $output;
            }else {
                return "Compte inexistant";
            }
        }else {
            return "Erreur lors de la recuperation du compte";
        }
       
    }

}
    


?>