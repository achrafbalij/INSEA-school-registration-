<?php


if(isset($_POST['submit'])){
    //Connect to the database
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "insea";

// Création de la  connexion
$mysqli = mysqli_connect($servername, $username, $password);
    mysqli_select_db($mysqli,'insea');
// Tester la connexion 
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
    
    $matricule= $_POST['matricule'];
    $password= $_POST['password'];
    
    //Query the database
    $s="SELECT * FROM insea WHERE Matricule='$matricule' && Password='$password' && verified='1' LIMIT 1";
    $resulat=mysqli_query($mysqli,$s);
    $num=mysqli_num_rows($mysqli,$s);
    
   if($num==1){
       
       echo "bienvenu";
   }else{
       echo "erreur";
   }
}
?>