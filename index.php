<?php 
    require_once("views/connexion_bdd.php");
    
    $date = date("Y");
    echo $date;
?>

<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">

    <style>
        section{
            width :300px;
            border: 2px solid black;
            margin: 40px;
            padding: 10px;
        }
    </style>
</head>
<body>
    


<?php require_once("requetes_points.php"); ?>






</body>
</html>