<?php
    $servername = "localhost";
    $db = "autoubt";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=$db", $username, $password, array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));

        echo "Suksese";
    }catch(PDDException $e){
        echo "Lidhja Deshtoi: " . $e->getMessage();
    }
?>