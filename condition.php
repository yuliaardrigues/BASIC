<?php

$tipo = 'Video';

//if ($tipo == 'Foto'){
    //echo 'exibindo uma foto';}

//if ($tipo == 'Texto'){
    //echo 'exibindo um Texto';}
//if ($tipo == 'Video'){
    //echo 'exibindo um Video';}

switch ($tipo) {
    case 'Foto':
        echo 'Exibindo FOTO';
         break;
    case 'Texto':
        echo 'Exibindo TEXTO';
         break;
    case 'Video':
        echo 'Exibindo VIDEO';
         break;
    }
