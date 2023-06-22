<?php
$lista =[
    'nome' => 'Boni',
    'idade' => 90,
    
    'atributos' => [
        'forca'=> 60,
        'agilidade'=> 90,
        'destreza'=>50,

    ],

    'vida' => 1000,
    'mana' => 928,

];
echo "Nome;".$lista['nome']."<br/>";
echo "Força:" .$lista['atributos'] ['forca']."<br/>";
echo "Vida:" .$lista['vida'];