<?php
try{
    $bdd = new PDO("mysql:host=localhost:3306;dbname=marvel", "root", "");
}catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}?>
