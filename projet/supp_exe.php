<?php
$servername="localhost";
$username="root";
$pass="";    
        
        $conn = mysqli_connect($servername, $username, $pass, $dbname="insea");


if(!empty($_GET["matricule"])){
    
    
	$matricule = mysqli_real_escape_string($conn,$_GET["matricule"]);
    $sql="SELECT * FROM insea WHERE Matricule=$matricule";
    $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $photo=$row["Photo"];
        $attestation=$row["Attestation"];
        $cin=$row['CIN'];
         unlink($photo);
         unlink($attestation);
         unlink($cin);
	
        $sql = "DELETE FROM insea WHERE Matricule=$matricule";
	
        if (mysqli_query($conn, $sql)) {
    	echo "l'étudiant a été supprimé avec succés";
        header('Location:_listeEtudiant.php');
	
        } else {
    	echo "Erreur pendant la suppression de l'étudant: " . mysqli_error($conn);
	
        }
    
    
}
?>