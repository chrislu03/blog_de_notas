<?php

    session_start();

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "bloc_de_notas";

    $conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (mysqli_connect_error()) {
        die("". mysqli_connect_error());
    }

?>