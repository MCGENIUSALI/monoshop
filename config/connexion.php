<?php
    try{
        $access = new pdo("mysql:host=localhost; dbname=monoshop; charset=utf8; 'root', '' ");
        $access->setAttribute(PDO::ATT_ERRMODE, PDO::ERRMODE_WARNING);
    } catch( Exception $e ){
        $e->getMessage(); 
    }

?>