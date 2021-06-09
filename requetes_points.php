<?php
// faits : nb annee, films solo, totaux, 
//nn faits : dernier film, continuitee
$requete = ("SELECT * FROM super_heros");
$reponse = $bdd->query($requete);

//si reponse requete est présente 
if($reponse){

    // tant que tous les personnages ne sont pas passés 
    while ($data = $reponse->fetch()){?>
        <section> <?php
        $total_points = 0;
        echo "<span>Nom : " . $data["nom"] . "<br/>";
// début comptage point anciennetée :

        //si vivant :
        if(!$data["mort"]){
            //anciennetee
            $anciennetee = $date - $data["annee_creation"];

            //calcul des points
            $points_anciennetee = $anciennetee * 1.25;

            //ajout total points
            

            //affichage
            echo "Anciennetée : " . $anciennetee . "ans.<br/>";
            echo "Points d'ancienneté : " . $points_anciennetee . " points.<br/>";
            
        }
        
        //si mort : 
        else{
            //durée de vie avant mort
            $vecu = $data["mort"] - $data["annee_creation"];
            $points_anciennetee = 0;
            
            echo "Ce super-héro est mort en " . $data["mort"] . ", ce qui fait qu'il a vécu " . $vecu . "ans.<br/>";
        }

        // section points films solos 
        $points_films_solos = $data["nombre_films_solo"] * 0.375;
        echo $data["nombre_films_solo"] . "<br/>";


        // section films totaux        
        $points_totaux_films = $data["nombre_films_totaux"] / 1.25;
        echo $data["nombre_films_totaux"] . "films<br/>";
        echo $points_totaux_films . " points.<br/>";

        // section dernier film 
        $points_dernier_salaire = $data["salaire_dernier_film"] / 4375000;
        echo $data["salaire_dernier_film"] . "<br/>";
        echo $points_dernier_salaire . "<br/>";

        //section continuitee
        switch ($data["envie_continuer"]){
            case "Y" : 
                $points_continuitee = 0;
                break;
            case "N" : 
                $points_continuitee = 10;
                break;
            default : 
                $points_continuitee = 2 ;
        }

        echo $points_continuitee . "<br/>";?>
        </section><?php
        $total_points = $points_anciennetee + $points_films_solos + $points_totaux_films + $points_dernier_salaire + $points_continuitee;
        echo $total_points;

    }//fin while 

}else{
    echo "La reponse de la requete n'est pas présente. ";
}
