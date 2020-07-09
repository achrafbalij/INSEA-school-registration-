<?php

$servername="localhost";
$username="root";
$pass="";    
        
        $mysqli = mysqli_connect($servername, $username, $pass, $dbname="insea");
    
    if(isset($_POST["send"]))
    {
       $nom=mysqli_real_escape_string($mysqli,$_POST["nom"]);
        $email=mysqli_real_escape_string($mysqli,$_POST["email"]);
        $sujet=mysqli_real_escape_string($mysqli,$_POST["sujet"]);
        $msg=mysqli_real_escape_string($mysqli,$_POST["msg"]);
        $date=date('Y-m-d');
        
        $insertion="INSERT INTO email(Nom,Email,Sujet,Message,Date)VALUES('$nom','$email','$sujet','$msg','$date')";
        
        if(mysqli_query($mysqli,$insertion)){
            echo "envoi reussit";
            header('location:accueil.html');
        }else{
          
            header('location:contact.html');
        }
    }else{echo "erreur d'envoi";} 

?>