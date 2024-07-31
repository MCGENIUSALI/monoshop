<?php


function getProduit($id) {
    if (require("connexion.php")) {
        // Assurez-vous que $access est défini dans votre fichier connexion.php
        $req = $access->prepare("SELECT * FROM produits WHERE ID = ?");
        
        $req->execute(array($id));
        
        if ($req->rowCount() == 1) {
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }
        $req->closeCursor();
    }
}


function getAdmins($email, $password){
    if(require("connexion.php")){
        $req = $access->prepare("SELECT * FROM admin WHERE email = ? AND motdepasse = ?  ");
      
        $req->execute(array($email, $password));
        
        if($req->rowCount() == 1 ){
            $data = $req->fetch();
            return $data;
        }

        $req->closeCursor();
        
    }
}

function add($Image, $Description, $Marque, $Model, $Annee, $Couleur, $Prix, $Kilometrage, $TypeCarburant){
    if(require('connexion.php')){
        $req = $access->prepare("INSERT INTO produits (`Image`, `Marque`, `Description`, `Model`, `Annee`, `Couleur`, `Prix`, `Kilometrage`, `TypeCarburant` WHERE ID = ? ");
        
        $req->execute(array($Image, $Description, $Marque, $Model, $Annee, $Couleur, $Prix, $Kilometrage, $TypeCarburant));
        
        $req->closeCursor();
    }
}

function update($Image, $Marque, $Description, $Model, $Annee, $Couleur, $Prix, $Kilometrage, $TypeCarburant, $id){
    if(require('connexion.php')){
        $req = $access->prepare("UPDATE produits SET `Image` = ?, `Marque` = ?, `Description` = ?, `Model` = ?, `Annee` = ?, `Couleur` = ?, `Prix` = ?, `Kilometrage` = ?, `TypeCarburant` = ? WHERE `id` = ?");
        
        $req->execute(array($Image, $Marque, $Description, $Model, $Annee, $Couleur, $Prix, $Kilometrage, $TypeCarburant, $id));
        
        $req->closeCursor();
    }
}

function afficher(){
    if(require("connexion.php")){
        $req = $access->prepare("SELECT * FROM produits ORDER BY id DESC");
      
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        
        $req->closeCursor();
        return $data;
    }
}

function supprimer($id){
    if(require("connexion.php")){
        $req = $access->prepare("DELETE FROM produits WHERE id = ?");
        $req->execute(array($id));

        $req->closeCursor();
    }
}
?>
