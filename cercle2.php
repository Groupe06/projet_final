<?php // VA VERS REQUETS_POINTS
// décide placement néons
require_once("fonctions_positions.php");

switch ($i){
    case 1 : 
        echo '<rect x="301" y="' . placement_y($i, $data) . '" width="18.672" height="' . placement_height($i, $data) . '" transform="rotate(162.195 310.153 313.847)" fill="#00EBEC"/>';
        break;

    case 2 : 
        echo '<rect x="301" y="' . placement_y($i, $data) . '" width="18.672" height="' . placement_height($i, $data) . '" transform="rotate(-161.983 310.153 ' . placement_y($i, $data) . ')" fill="#00EBEC"/>';
        break;

    case 3 : 
        echo '<rect x="301" y="' . placement_y($i, $data) . '" width="18.672" height="' . placement_height($i, $data) . '" transform="rotate(54.0612 310.153 ' . placement_y($i, $data) . ')" fill="#00EBEC"/>';
        break;

    case 4 : 
        echo '<rect x="301" y="' . placement_y($i, $data) . '" width="18.672" height="' . placement_height($i, $data) . '" transform="rotate(-125.835 310.153 ' . placement_y($i, $data) . ')" fill="#00EBEC"/>';
        break;

    case 5 : 
        echo '<rect x="301" y="' . placement_y($i, $data) . '" width="19.0025" height="' . placement_height($i, $data) . '" transform="rotate(-90 310.153 ' . placement_y($i, $data) . ')" fill="#00EBEC"/>';
        break;

    case 6 : 
        echo '<rect x="301" y="' . placement_y($i, $data) . '" width="18.672" height="' . placement_height($i, $data) . '" transform="rotate(125.964 310.153 ' . placement_y($i, $data) . ')" fill="#00EBEC"/>';
        break;

    case 7 : 
        echo '<rect x="301" y="' . placement_y($i, $data) . '" width="18.672" height="' . placement_height($i, $data) . '" transform="rotate(-53.7143 310.153 ' . placement_y($i, $data) . ')" fill="#00EBEC"/>';
        break;

    case 8 : 
        echo '<rect x="301" y="' . placement_y($i, $data) . '" width="18.672" height="' . placement_height($i, $data) . '" transform="rotate(-17.5918 310.153 ' . placement_y($i, $data) . ')" fill="#00EBEC"/>';
        break;

    case 9 : 
        echo '<rect x="301" y="' . placement_y($i, $data) . '" width="18.6738" height="' . placement_height($i, $data) . '" transform="rotate(18.1438 310.153 ' . placement_y($i, $data) . ')" fill="#00EBEC"/>';
        break;

    case 10 : 
        echo '<rect x="301" y="' . placement_y($i, $data) . '" width="18.672" height="' . placement_height($i, $data) . '" transform="rotate(90 310.153 ' . placement_y($i, $data) . ')" fill="#00EBEC"/>';
        break;

}// fin case


// <rect x="301" y="313.847" width="18.672" height="20" transform="rotate(162.195 310.153 313.847)" fill="#00EBEC"/>
// <rect x="301" y="313.847" width="18.672" height="20" transform="rotate(-161.983 310.153 313.847)" fill="#00EBEC"/>
// <rect x="301" y="313.847" width="18.672" height="20" transform="rotate(54.0612 310.153 313.847)" fill="#00EBEC"/>
// <rect x="301" y="313.847" width="18.672" height="20" transform="rotate(-125.835 310.153 313.847)" fill="#00EBEC"/>
// <rect x="301" y="313.847" width="19.0025" height="20" transform="rotate(-90 310.153 313.847)" fill="#00EBEC"/>
// <rect x="301" y="313.847" width="18.672" height="20" transform="rotate(125.964 310.153 313.847)" fill="#00EBEC"/>
// <rect x="301" y="313.847" width="18.672" height="20" transform="rotate(-53.7143 310.153 313.847)" fill="#00EBEC"/>
// <rect x="301" y="313.847" width="18.672" height="20" transform="rotate(-17.5918 310.153 313.847)" fill="#00EBEC"/>
// <rect x="301" y="313.847" width="18.6738" height="20" transform="rotate(18.1438 310.153 313.847)" fill="#00EBEC"/>
// <rect x="301" y="313.847" width="18.672" height="20" transform="rotate(90 310.153 313.847)" fill="#00EBEC"/>







