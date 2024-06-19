<?php

function add($Image, $Marque, $Model, $Annee, $Couleur, $Prix, $Kilometrage, $TypeCarburant){
    if(require('connexion.php')){
        $req = $access->prepare("INSERT INTO produits (Image, Marque, Model, Annee, Couleur, Prix, Kilometrage, TypeCarburant) 
        VALUES ($Image, $Marque, $Model, $Annee, $Couleur, $Prix, $Kilometrage, $TypeCarburant)");
 }
}

