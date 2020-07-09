<?php
$servername="localhost";
$username="root";
$pass="";    
        
        $conn = mysqli_connect($servername, $username, $pass, $dbname="insea");


if(!empty($_GET["id"])){
    
    
	$id = mysqli_real_escape_string($conn,$_GET["id"]);
	$sql = "DELETE FROM email WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
    	echo "le message a été supprimé avec succés";
        header('Location:_listeDemande.php');
	} else {
    	echo "Erreur pendant la suppression du méssage: " . mysqli_error($conn);
	}
    
}
?>