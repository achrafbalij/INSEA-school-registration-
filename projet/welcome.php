<?php
session_start();

$servername="localhost";
$username="root";
$pass="";    
        
        $mysqli = mysqli_connect($servername, $username, $pass, $dbname="insea");




if(isset($_POST["submit"])){
    $matricule=mysqli_real_escape_string($mysqli,$_POST["matricule"]);
    $password=mysqli_real_escape_string($mysqli,$_POST["password"]);
    $password=md5($password);
    
    $sql = "SELECT * FROM insea WHERE Matricule='$matricule' AND Password='$password'";
	$result = mysqli_query($mysqli, $sql);
	if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $estVerifie=$row["estVerifie"];
        if($estVerifie==0){
            echo 'non verifie';
            header('Location:connexion.php');
        }else{
            $_SESSION['matricule']=$row["Matricule"];
            header('Location:affichageEtu.php');}
        }else{echo 'Matricule ou Mot de passe erroné';
             header('Location:connexion.php');
             }
    
}
    
?>