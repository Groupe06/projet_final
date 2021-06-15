<?php 
function affichage_personnage($bdd){
    // try{

    //     $bdd = new PDO("mysql:host=localhost:3306;dbname=marvel", "root", "");
    
    // }catch(Exception $e){
    //     die('Erreur : ' . $e->getMessage());
    // }


    $nom = "<script>recuperation_nom()</script>";
    $requete_affichage = $bdd->prepare("SELECT * FROM super_heros WHERE super_heros.nom = :nom");
    $requete_affichage->execute([
        "nom" => "Ant Man"
    ]);

    $reponse_affichage = $requete_affichage->fetch(PDO::FETCH_ASSOC);
    var_dump($reponse_affichage);
    var_dump($nom);

    
}