<?php

    function ouvreConnexion() {
        $db_host = "localhost"; // le nom du host de la db
        $db_user = "root"; // le nom de user de la db, par défaut "root"
        $db_pass = ""; // le mdp pour se connecter à la db, par défaut root n'a pas de mdp
        $db_name = "peintres_db"; // le nom de la db

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name); // retourne un objet contenant les infos de notre base de données

        if ($conn->connect_error) { // failsafe, imprime un message d'erreur si la connexion ne fonctionne pas
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn; // retourne les infos de la db ou du message d'erreur
    }

?>