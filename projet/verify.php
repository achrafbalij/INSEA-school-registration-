<?php
if(isset($_GET['vkey'])){
    //Process Verification
    $vkey=$_GET['vkey'];
    
$servername="localhost";
$username="root";
$pass="";    
        
        $mysqli = mysqli_connect($servername, $username, $pass, $dbname="insea");
    
    $fetch="Select estVerifie,vkey FROM insea WHERE estVerifie='0' AND vkey='$vkey' LIMIT 1";
    $result=mysqli_query($mysqli,$fetch);
    
    if(mysqli_num_rows($result)>0){
        //Validate The email
        $update="UPDATE insea SET estVerifie=1 WHERE vkey='$vkey' LIMIT 1";
        $update=mysqli_query($mysqli,$update);
        
        if($update){
            echo "Ce compte a été vérifié.";
            header('location:thankyou.php');
        }else{
            echo $mysqli->error;
        }
    }else{
        echo "Ce compte est soit vérifié ou bien n'existe pas !";
    }
    
}else{
    die("Quelque chose n'a pas marché !");
}
?>