<?php // VA VERS CERCLE


require_once("connexion_bdd.php");


//si reponse requete est présente 
if($reponse):
    $i = 1 ;

    // tant que tous les personnages ne sont pas passés 
    while ($data = $reponse->fetch()):

        // début comptage points anciennetée :

        //si vivant :
        if(!$data["mort"]):
            //anciennetee
            $anciennetee = $date - $data["annee_creation"];

            //calcul des points
            $points_anciennetee = 12.5 - $anciennetee * 1.25;

            //empeche inférieur à 0
            // if($points_anciennetee < 0):
            //     $points_anciennetee = 0;
            // endif;
            
        
        //si mort : 
        else:
            //durée de vie avant mort 
            $points_anciennetee = 0 ;
            
        endif;



        // section points films solos  
        $points_films_solos = 3.75 - $data["nombre_films_solo"] * 0.375;

        // si point < 0 
        // if($points_films_solos < 0):
        //     $points_films_solos = 0;
        // endif;


        //si point < 0 
        // if( $points_totaux_films < 0 ):
        //     $points_totaux_films = 0;
        // endif;

        
        // section films totaux
        $points_totaux_films =12.5 - $data["nombre_films_totaux"] * 1.25;


        // section dernier film     
        $points_dernier_salaire = $data["salaire_dernier_film"] / 4375000;

        //si point < 0
        // if ( $points_dernier_salaire < 0 ):
        //     $points_dernier_salaire = 0; 
        // endif;



        //section continuitee  
        switch ($data["envie_continuer"]){
            case "Y" : 
                $points_continuitee = 10;
                break;
            case "N" : 
                $points_continuitee = 0;
                break;
            default : 
                $points_continuitee = 5 ;
        }
        


        //calcul des points totaux 
        $total_points = $points_anciennetee + $points_films_solos + $points_totaux_films + $points_dernier_salaire + $points_continuitee;

        if($total_points < 0){
            $total_points = 0;
        }
        //var_dump("while $i");
        require("cercle2.php");
        $i++;
        


    endwhile; //fin while 

else:
    echo "La reponse de la requete n'est pas présente. ";
endif;
