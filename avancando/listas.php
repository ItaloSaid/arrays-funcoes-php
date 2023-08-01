<?php

$idadeList = [21, 22, 23, 24, 25, 27, 30];

list($idadeeItalo, $idadePedro, $idadeMauro) = $idadeList;
unset($idadeList[4]);

$idadeList [] = 20;

foreach($idadeList as $idade){
    echo $idade . PHP_EOL ;
}


