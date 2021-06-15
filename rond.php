<!DOCTYPE html>

<html lang="fr">
<head>
    <!--META-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Liens des fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Liens CSS-->
    <!-- CSS reset-->
    <link rel="stylesheet" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
    <!--CSS gérnéral -->
    <link rel="stylesheet" href="CSS/rond.css">
    <!--CSS header -->
    <link rel="stylesheet" href="CSS/header.css">
    <!--CSS de la data de chaque héro -->
    <link rel="stylesheet" href="CSS/data.css">

    <style>
        html{
            background-color: black;
        }
        rect{
            animation-name: hauteur;
            animation-duration: 2s;
            filter: blur(7px);
        }

        @keyframes hauteur {
            from {
                height:0%;
            }
            to {
                height: <?php $emplacement_height ?>;
            }
        }
    </style>
    
    <title>Radar</title>
</head>
<body>
<?php 
        //connexion bdd
  		require_once("connexion_bdd.php");
        
        //creation prise annee actuelle
        $date = date("Y");
        
		$tableau_svg = []; 
        
  	?>

    <div id="wrapper">
        <!-- Le header avec les iamges --> 
        <header>
            <div id="mainHeader">
                <img src="assets/mainHeader.png" alt="bacground du header de la page">
                    <div id="logoAndNameShield">
                        <img src="assets/logo_shield.svg" alt="Le logo du shield (marvel) en blanc">
                        <div>
                            <p>S.H.I.E.L.D</p>
                            <p>Private Acess</p>
                            <p>superheroes life 
                             <br>expectancy</p>
                        </div>
                    </div>
            </div>

            <img id="midheader" src="assets/midheader.png" alt=""> <!-- A REVOIR COULEUR -->
            <!-- img renvoyant à landing.html -->
            <a href="index.html">
                <img src="assets/PowerOff.svg" alt="bouton power off qui renvoie à l'accueil">
            </a>
        </header>    

        <!-- Créàation du responsive avec l'affichage des images des superheroes-->
        <div id="container">
            <!-- _______________________ALEX_____________________
            Placement de l'image vide ici et du texte (avec le temps restant + V2)-->

            <div class="remaining_time">
                <div class="info_time">
                    <p id="dDay"><span>000</span>j <span>00</span>h <span>00</span>m <span>00</span>s</p>
                    <p class="info">Découvrir pourquoi ?</p>
                </div>
                <img src="#" id="hero" alt="Avengers logo">
            </div>

            <!--Cercle radar (fond)-->
            <div class="radar">
                <svg width="550" height="623" viewBox="0 0 624 623" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Cercle représentant les années -->
                    <circle cx="310" cy="315" r="5" fill="white" fill-opacity="0.3"/>
                    <circle cx="310" cy="314" r="76.5" stroke="white" stroke-opacity="0.3" stroke-width="3"/>
                    <circle cx="311" cy="315" r="154.5" stroke="white" stroke-opacity="0.3" stroke-width="3"/>
                    <circle cx="310.8" cy="314.8" r="162.3" stroke="#41BBC1" stroke-opacity="0.9" stroke-width="3"/>
                    <circle cx="310" cy="314" r="232.5" stroke="white" stroke-opacity="0.3" stroke-width="3"/>
                    <circle cx="311.465" cy="311.465" r="309.965" stroke="white" stroke-opacity="0.3" stroke-width="3"/>
                    <!-- Barre néon représentant les années restantes des héros -->
                    <line x1="562.449" y1="497.897" x2="59.6557" y2="132.597" stroke="white" stroke-opacity="0.3" stroke-width="3"/>
                    <line x1="623.141" y1="314.096" x2="1.65631" y2="315.744" stroke="white" stroke-opacity="0.3" stroke-width="3"/>
                    <line x1="214.774" y1="606.303" x2="406.824" y2="15.2344" stroke="white" stroke-opacity="0.3" stroke-width="3"/>
                    <line x1="59.7384" y1="495.153" x2="562.532" y2="129.853" stroke="white" stroke-opacity="0.3" stroke-width="3"/>
                    <line x1="404.608" y1="607.231" x2="212.558" y2="16.1619" stroke="white" stroke-opacity="0.3" stroke-width="3"/>

                  <!-- Barres sur lesquels sont positionnées les "heros" -->
                <?php 
                    require_once("requetes_points.php"); 
                    for($i=0; $i < count($tableau_svg); $i++){
                        echo $tableau_svg[$i];
                    }
                
                ?>
                </svg>
                
                <!--Chronologie-->
                <ul id="date">
                    <li>2021</li>
                    <li>2010</li>
                    <li>2020</li>
                    <li>2030</li>
                    <li>2040</li>
                </ul>

                <!-- Nom des héros -->
                <div class="name">

                    <p id="1">Hulk</p>
                    <p id="2">Captain America</p>
                    <p id="3">Black Widow</p>   
                    <p id="4">Doctor Strange</p>
                    <p id="5">Spiderman</p>
                    <p id="6">Black Panther</p>
                    <p id="7">Thor</p>
                    <p id="8">Captain Marvel</p>
                    <p id="9">Ant Man</p>
                    <p id="10">Iron Man</p>

                </div>

            </div>
            
        </div>

        <!--Affichage de la data par super-héro -->
        <div id="backgroundData">

            <div id="data">

                <header>
                    <div id="theHero">
                        <p></p>

                        <!-- NICO _____________ -->

                        <p>2008 - 2024</p>
                    </div>
                    <img src="assets/croix.svg" alt=" Croix pour fermer la page de data">
                </header>

                <div id="allTheData">

                    <!-- NICO _____________ -->

                </div>
            </div>

        </div>


       
    </div> 
    <script src="JS/rond.js"></script>
    <?php  
    '<script type="text/javascript">
        var Affiche=document.getElementById("dDay");
        function Rebour() {
            var date1 = new Date();
            var date2 = ' . ($date + ( $date - $data["annee_creation"] + $total_points)) / 2 . ';
            var sec = (date2 - date1) / 1000;
            var n = 24 * 3600;
            if (sec > 0) {
                j = Math.floor (sec / n);
                h = Math.floor ((sec - (j * n)) / 3600);
                mn = Math.floor ((sec - ((j * n + h * 3600))) / 60);
                sec = Math.floor (sec - ((j * n + h * 3600 + mn * 60)));
                Affiche.innerHTML = j + " j "+ h +" h "+ mn +" min "+ sec + " s";
                window.status = "Temps restant : " + j +" j "+ h +" h "+ mn + " min " + sec + " s ";
            }
            tRebour = setTimeout ("Rebour();", 1000);
        }
        Rebour();
    </script>';?> 



    // essai conversion
    <script>
    var maVariable = 'foo';
 
    $.ajax({
        url: 'fichier.php',
        data: 'maVariable='+ maVariable,
        success: function(reponse) {
            alert(reponse); // reponse contient l'affichage du fichier PHP (soit echo)
        }
    });</script>
    
    
     <?php
    require("fonction_affichage.php");
    affichage_personnage($bdd);

    ?>
    


</body>
</html>