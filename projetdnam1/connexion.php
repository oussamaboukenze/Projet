<?php
        
    $connexion=mysqli_connect("localhost","root","","database");
    if(!$connexion){
        die("<p>connexion impossible</p>");
        exit();
    }
?>