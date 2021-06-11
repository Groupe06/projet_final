<?php 

    //problèmes rencontrés : l'affichage des néons ne se mets pas (pas d'apparition non plus dans inspecteur du navigateur)
    //possibilité que ca vienne du fait que je n'ai pas bloqué les valeurs négatives 

    require_once("connexion_bdd.php");
    
    $date = date("Y");
    echo $date;
    
?>

<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">

    <style>
     body{
        background-color: black;
     }
    </style>
</head>
<body>
    


<?php
$tableau_svg = []; 
require_once("cercle.php"); ?>





</body>
</html>