<?php 
function affichage_personnage($data){
    try{
        $bdd = new PDO("mysql:host=localhost:3306;dbname=marvel", "root", "");
    }catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

    // $requete_affichage = ("SELECT * FROM super_heros WHERE nom = :nom");
    // $requete_affichage = $bdd->execute([
    //     "nom" => "Ant-Man"
    // ]);
    $affichage = "okkkkkkk";   //$requete_affichage->fetchAll(PDO::FETCH_ASSOC);
    return "<script> alert('". $affichage ."')  </script>";

    
}