<?php
// connexion à la bdd
try{

    $bdd = new PDO("mysql:host=localhost:3306;dbname=marvel", "root", "");

}catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}

// requete SQL
$requete = ("SELECT * FROM super_heros");
$reponse = $bdd->query($requete);
?>
