<?php
  include_once("connexion.php");
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $mail=$_POST["mail"];
    $tele=$_POST["tele"];
    $message=$_POST["message"];

    $req="INSERT INTO contact (idcontact,nom,prenom,email,telephone,message) VALUES (NULL,'".$nom."','".$prenom."','".$mail."','".$tele."','".$message."')";
    $res=mysqli_query($connexion,$req);
    header('Location:index.html');
?>