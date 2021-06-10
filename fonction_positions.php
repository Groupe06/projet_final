<?php // VA VERS CERCLE2

// placement base du néon
function placement_y($i, $data){
    // 10 ans = 78px
    // 1 trait = 312px
    $data["annee_creation"];
    $emplacement_y = 313 +($data["annee_creation"] - 2000);

    if($emplacement_y >= 0){
        return $emplacement_y;
    }else{
        return 0;
    }
    
}

//placement hauteur du néon 
function placement_height($i, $data){
    if (isset($data["mort"])){
        $emplacement_height = ($data["mort"] - $data["annee_creation"]) *7.8;// 7.8 px par annee 
        
    }else{
        $emplacement_height = (313.847 + ($date - $data["annee_creation"]) + ($points_totaux - 10)) * 7.8;
    }
    return $emplacement_height;
}