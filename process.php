<?php

    session_start();

    if(!isset($_SESSION['lang']))
        $_SESSION['lang'] = 'pl';
    else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) { 
        if ($_GET['lang'] == 'pl')
            $_SESSION['lang'] = 'pl';
        else
            $_SESSION['lang'] = 'en';      
    }
?>

