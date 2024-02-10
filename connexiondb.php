<?php

    //database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "etat_civil_bettie";

    //création de la connexion 
    $con = new mysqli($servername, $username, $password, $dbname);

    //vérification de la connexion
    if($con -> connect_error){
        die("La connexion a échouée :" . $con -> connect_error);
    }

?>
