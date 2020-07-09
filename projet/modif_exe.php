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
    	// Récupérer des informations 
        $row = mysqli_fetch_assoc($result);
        $nom=$row["Nom"];
        $prenom=$row["Prenom"];
        $dateNaissance=$row["DateNaissance"];
        $cycle=$row["Cycle"];
        $filiere=$row["Filiere"];
        $sexe=$row["Sexe"];
        $dateInscription=$row["DateInscription"];
        
    }  
    }
    
 if(count($_POST)>3) {
	$fname=mysqli_real_escape_string($mysqli,$_POST["fname"]);
    $lname=mysqli_real_escape_string($mysqli,$_POST["lname"]);
    $dateNaissance=mysqli_real_escape_string($mysqli,$_POST["dateNaissance"]);
    $cycle=mysqli_real_escape_string($mysqli,$_POST["cycle"]);
    $filiere=mysqli_real_escape_string($mysqli,$_POST["filiere"]);
    $sexe=mysqli_real_escape_string($mysqli,$_POST["sexe"]);
   $dateInscription=mysqli_real_escape_string($mysqli,$_POST["dateInscription"]);
        

         $modifi="UPDATE insea SET Nom='$lname',Prenom='$fname',DateNaissance='$dateNaissance',Cycle='$cycle',Filiere='$filiere',Sexe='$sexe',DateInscription='$dateInscription' WHERE Matricule='$matricule'";
                    
            if(mysqli_query($mysqli,$modifi)){
                        echo "Les données ont été mis à jour avec succes";
	} else {
    	echo "Error: " . $modifi . "<br>" . mysqli_error($conn);
	}
	header("Location:AffichageEtu.php");
     }
        ?>
		      
<html>
    <head>
        <meta charset="utf_8_unicode_ci" content="width=device-width, initial-scale=1.0">
    <title>Modifier Vos Informations</title>
        <link rel="stylesheet" href="css/style3.css">
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
    transform: translate(-50%,-35%);
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
        <a class="nav-link" href="logout.php">Se déconnecter</a>
      </li>
    </ul>
      </div>
</nav>
        </section>
        <div class="Inscription">
        <form method="post" enctype="multipart/form-data" action="">
		<h1>Modifier les informations de <?php echo $matricule;?></h1>
		<hr>
            <div class="textbox"><B>Matricule:</B><?php if(isset($matricule)) { echo $matricule; } ?></div>
        <div class="textbox"><B>Nom:</B><input type="text" name="lname" id="lname" placeholder="Votre nom" size="20" required value="<?php if(isset($nom)) { echo $nom; } ?>"></div>
		<div class="textbox"><B>Prénom:</B><input type="text" name="fname" id="fname" placeholder="Votre prénom" size="20" required value="<?php if(isset($prenom)) { echo $prenom; } ?>"></div>
		<div class="textbox"><B>Date de naissance:</B><input type="date" name="dateNaissance" placeholder="dateNaissance" min="1970-01-01" max="2001-12-31" required value="<?php if(isset($dateNaissance)) { echo $dateNaissance; } ?>"></div>
		<div class="select">
		<B>Cycle:</B> <select name="cycle" id="cycle" required value="<?php if(isset($cycle)) { echo $cycle; } ?>">
			<option value="IE">Cycle ingénieurs d'Etat</option>
			<option value="Master">Cycle Master</option>
			<option value="Doctorat">Cycle Doctorat</option>
		</select></div>
		<div class="select"><B>Filière:</B><select name="filiere"  id="filiere" required value="<?php if(isset($filiere)) { echo $filiere; } ?>">
			<option value="Act-Fin">Actuariat-Finance</option>
			<option value="Stat-Eco">Statistique-Economie Appliquée</option>
			<option value="Stat-Démo">Statistique-Démographie</option>
			<option value="ROAD">Recherche Opérationnelle et Aide à la Décision</option>
			<option value="DSE">Ingénierie des Données et des Logiciels</option>
			<option value="DS">Science des Données</option>
			<option value="etc">etc</option>
		</select></div>
		<label><div class="radio"><B>Sexe:</B><label for="male" required value="<?php if(isset($sexe)) { echo $sexe; } ?>">
            <INPUT type="radio" name="sexe" value="Masc" checked>Masc.</INPUT></label>
            <label><INPUT type="radio" name="sexe" value="fem">Fém.</INPUT></label>
            
		</div></label>
		<div class="textbox">
		<B>Date d'inscription:</B><input type="date" name="dateInscription" placeholder="dateInscription" min="2014-09-01" max="2020-10-31" required value="<?php if(isset($dateInscription)) { echo $dateInscription; } ?>"></div>
		<div>
            <input Type="submit" value="Modifier">
  		</div>
            </form></div>
    </body>
</html>



