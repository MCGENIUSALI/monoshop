<?php 

    session_start();


    if(isset($_SESSION['ZDjklijUU12y54'])){
        $_SESSION['ZDjklijUU12y54'] = array();
        
        session_destroy();
        header('Location: ../');
    } {
        header('Location: ../');
    }
?>