<?php

    echo "catalogo";

    if(!isset($_SESSION))
    {
        session_start();
    }
    $user=$_POST['usuario'];
    $pass=$_POST['password'];
    
    
?>
