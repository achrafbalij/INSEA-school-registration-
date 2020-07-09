<?php
session_start();

$servername="localhost";
$username="root";
$pass="";    
        
        $mysqli = mysqli_connect($servername, $username, $pass, $dbname="insea");




if(isset($_POST["submit"])){
    $nom=mysqli_real_escape_string($mysqli,$_POST["nom"]);
    $password=mysqli_real_escape_string($mysqli,$_POST["password"]);
    $password=md5($password);
    
    $sql = "SELECT * FROM admin WHERE Nom='$nom' AND Password='$password'";
	$result = mysqli_query($mysqli, $sql);
	if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nom']=$row["Nom"];
            header('Location:_listeEtudiant.php');
        }else{echo 'Matricule ou Mot de passe erroné';
             header('Location:_connexion.php');
             }
    
}
    
?>