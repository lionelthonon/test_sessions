<?php
/*
 * In tro sessions
 * Compteur de connexions à la page
 */
if(!isset($compteur)){
    $compteur = 0;
    echo $compteur;
}else{
    $compteur++;
    echo $compteur;
}