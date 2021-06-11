<!DOCTYPE html>
<html lang="en">
<head>
    <!--META-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 scalable=yes">
    <!-- Liens des fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Liens CSS-->
    <!-- CSS reset-->
    <link rel="stylesheet" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
    <!--CSS de landing & onboarding -->
    <link rel="stylesheet" href="CSS/rond.css">

    <title>Radar</title>
</head>
<body>

    <div id="wrapper">
        <!-- fond général -->
        <img id="fond" src="assets/fondNoirCarreaux.png" alt="fond noir gradillé blanc">
        <!--élément du haut (fond)-->
        <img id="haut" src="assets/barreHaut.png" alt="">
        <!--élément de gauche (fond)-->
        <img id="gauche" src="assets/barreGauche.png" alt="">
        
        <!-- Bouton Power Off -->
        <a id="Poweroff" href="landing.html"><img src="assets/PowerOff.svg" alt="Bouton Power Off - Quitter la platerforme"></a>

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
                //var_dump($tableau_svg);
                for($i=0; $i < count($tableau_svg); $i++){
                    echo $tableau_svg[$i];
                }
                
                ?>
            </svg>            
            <!-- Nom des héros -->
            <div class="name">
                <h2>Black Widow</h2>   
                <h2>Thor</h2>
                <h2>Black Panther</h2>
                <h2>Hulk</h2>
                <h2>Captain Marvel</h2>
                <h2>Ant Man</h2>
                <h2>Docter Strange</h2>
                <h2>Captain America</h2>
                <h2>Iron Man</h2>
                <h2>Spiderman</h2>
            </div>
        </div>
    </div> 
    
</body>
</html>