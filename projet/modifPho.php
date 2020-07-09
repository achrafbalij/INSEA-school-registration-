<?php
$servername="localhost";
$username="root";
$pass="";    
        
        $mysqli = mysqli_connect($servername, $username, $pass, $dbname="insea");

if(isset($_GET["matricule"])){
$matricule = mysqli_real_escape_string($mysqli,$_GET["matricule"]);
	$sql = "SELECT * FROM insea WHERE Matricule=$matricule";
	$result = mysqli_query($mysqli, $sql);
	if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $photo=$row["Photo"];
    }}
if(isset($_POST["modifer"]))
    {
   unlink($photo); $pname1="image/photo/".$_FILES["Photo"]["name"];
        
        $tname1=$_FILES["Photo"]["tmp_name"];
    if(copy($tname1,$pname1)){
             $modifi="UPDATE insea SET Photo='$pname1' WHERE Matricule='$matricule'";
             if(mysqli_query($mysqli,$modifi)){
                 header("Location:AffichageEtu.php");
            }else{echo "Error: " . $modifi . "<br>" . mysqli_error($conn);}
    }else{echo "Erreur de l'upload";}
    }
    

?>
<html>
    <head>
        <meta charset="utf_8_unicode_ci" content="width=device-width, initial-scale=1.0">
    <title>Modifier la CIN</title>
    <link rel="stylesheet" href="css/profileStyle.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
         <link rel="stylesheet" href="css/style3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link ref="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            .Inscription
{
    width: 280px;
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-100%);
    color: black;
}
        </style>
    </head>
    <body>
        <!--NavigationBar-->
        <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="styleImages/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Se Deconnecter</a>
      </li>
    </ul>
      </div>
</nav>
        </section>
    <div class="Inscription">
    <form method="post" enctype="multipart/form-data" action="">
    <div name="Photo"><B>Votre photo:</B>
  		<input type="file" name="Photo" accept="image/*" required></div>
		<div>
            <INPUT classe="envoi" type="submit" name="modifer" value="modifier" ></INPUT>
            <INPUT classe="envoi" type="reset" name="reset" value="Reset" ></INPUT>
  		</div>
        </form></div></body>
</html>