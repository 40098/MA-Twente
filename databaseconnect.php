<?php
    //Check of gebruiker is ingelogd
    session_start();
    if(isset($_SESSION["inlog"]) && $_SESSION["inlog"]=='true' ){


    $dbhost = "localhost";
    $dbname = "twente";
    $user = "root";
    $pass = "";
    try {
        $database = new PDO("mysql:host=$dbhost;dbname=$dbname",$user,$pass);
        $database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
        }
    catch(PDOException $e) {
        echo $e->getMessage();
        }
     }else{
        header('Location: inloggen.php');
         die;
     }
?>
