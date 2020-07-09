<!Doctype html>
<html>
    <head>
        <meta charset="utf_8_unicode_ci" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <link rel="stylesheet" href="css/style3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link ref="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
      <li class="nav-item active">
        <a class="nav-link" href="accueil.html">Accueil</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="register.php">Inscription</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="connexion.php">Connexion</a>
      </li>
    </ul>
      </div>
</nav>
        </section>
<!--inscription-->

<?php 
$servername="localhost";
$username="root";
$pass="";    
        
        $mysqli = mysqli_connect($servername, $username, $pass, $dbname="insea");
if(date('Y-m-d')<='2020-10-10'){   
    if(isset($_POST["submit"]))
{
    
    $matricule=mt_rand(1, 999999);
    $fname=mysqli_real_escape_string($mysqli,$_POST["fname"]);
    $lname=mysqli_real_escape_string($mysqli,$_POST["lname"]);
    $dateNaissance=mysqli_real_escape_string($mysqli,$_POST["dateNaissance"]);
    $email=mysqli_real_escape_string($mysqli,$_POST["email"]);
    $password=md5($_POST["password"]);
    $repeatpassword=md5($_POST["repeatpassword"]);
    $cycle=mysqli_real_escape_string($mysqli,$_POST["cycle"]);
    $filiere=mysqli_real_escape_string($mysqli,$_POST["filiere"]);
    $sexe=mysqli_real_escape_string($mysqli,$_POST["sexe"]);
   $dateInscription=mysqli_real_escape_string($mysqli,$_POST["dateInscription"]);
        
        
        $pname1="image/photo/".$matricule."_Photo_".$_FILES["Photo"]["name"];
        
        $tname1=$_FILES["Photo"]["tmp_name"];
        
    
        $pname2="image/CIN/".$matricule."_CIN_".$_FILES["CIN"]["name"];
        
        $tname2=$_FILES["CIN"]["tmp_name"];
     
        $pname3="image/attestation/".$matricule."_Attes_".$_FILES["Attestation"]["name"];
        
        $tname3=$_FILES["Attestation"]["tmp_name"];
        //Generate a validation key (Vkey)
        
        $vkey=md5(time().$matricule);  
        
        
        if($password==$repeatpassword)
        {
            if(copy($tname1,$pname1) && copy($tname2,$pname2) && copy($tname3,$pname3)){
                    $insertion="INSERT INTO insea(Matricule,Nom,Prenom,DateNaissance,Email,Password,Cycle,Filiere,Sexe,DateInscription,Photo,CIN,Attestation,vkey,estVerifie)VALUES('$matricule','$lname','$fname','$dateNaissance','$email','$password','$cycle','$filiere','$sexe','$dateInscription','$pname1','$pname2','$pname3','$vkey','0')";
                    
                    if(mysqli_query($mysqli,$insertion)){
                        echo "inscription réussite";
                        
                        //Send Email
                        
                    $to=$email;
                    $subject="Email Verification";
                    $message="Votre matricule:$matricule\n
                    Cliquez sur lien pour vérifier votre inscription: <a href='http://localhost/easyPHP/projet/verify.php?vkey=$vkey'>Verification";
                    $headers="MIME-Version:1.0"."\r\n";
                    $headers="Content-type:text/html;charset=UTF-8"."\r\n";
                     
                   mail($to,$subject,$message,$headers);
                   header('location:checkMail.html');
                        
                    }else{echo "<h5>Inscription n'est pas réussite</h5>";}
                }else{
                    echo "<h5>upload failed</h5>";
                }
        }else{
            echo "<h5>les deux passwords doivent être identiques</h5>";}
    }else{
        echo "<h5>Veuillez saisir tous les champs</h5>";
    }

}else{echo "<h5>la date finale d'inscrpition (2020-10-10) est déjà passé, vous ne pouvez plus vous inscrire. Veuillez contacter l'administration.</h5>";
     header( "refresh:4;url=accueil.html" );}
     
?>
           
<div class="Inscription">
		<form method="post" enctype="multipart/form-data" action="register.php">
		<h1>Inscription à l'INSEA</h1>
		<hr>
		<div class="textbox"><B>Nom:</B><input type="text" name="lname" id="lname" placeholder="Votre nom" size="20" required></div>
		<div class="textbox"><B>Prénom:</B><input type="text" name="fname" id="fname" placeholder="Votre prénom" size="20" required></div>
		<div class="textbox"><B>Date de naissance:</B><input type="date" name="dateNaissance" placeholder="dateNaissance" min="1970-01-01" max="2001-12-31" required></div>
        <div for="email"><B>Enter your email:</B>
            <input type="email" id="email" name="email" required>  
		</div>
        <div for="password">
            <label><B>Mot de passe:</B></label>
            <input type="password" name="password" required>  
            <label><B>repeter le mot de passe:</B></label>
            <input type="password" name="repeatpassword" required> 
		</div>
		<div class="select">
            <B>Cycle:</B><select name="cycle" id="cycle" required>
			<option value="IE">Cycle ingénieurs d'Etat</option>
			<option value="Master">Cycle Master</option>
			<option value="Doctorat">Cycle Doctorat</option>
                </select></div>
		<div class="select"><B>Filière:</B><select name="filiere"  id="filiere" required>
			<option value="Act-Fin">Actuariat-Finance</option>
			<option value="Stat-Eco">Statistique-Economie Appliquée</option>
			<option value="Stat-Démo">Statistique-Démographie</option>
			<option value="ROAD">Recherche Opérationnelle et Aide à la Décision</option>
			<option value="DSE">Ingénierie des Données et des Logiciels</option>
			<option value="DS">Science des Données</option>
			<option value="etc">etc</option>
		</select></div>
		<div class="radio"><B>Sexe: </B><label for="male" required>
            <label class="sexe"><INPUT type="radio" name="sexe" value="Masc" checked>Masc.</INPUT></label>
                <label><INPUT type="radio" name="sexe" value="Fem">Fém.</INPUT></label>
		</label>
		</div>
		<div class="textbox">
		<B>Date d'inscription:</B><input type="date" name="dateInscription" placeholder="dateInscription" min="2014-09-01" max="2020-10-31" required></div>
		<div name="Photo"><B>Votre photo:</B>
  		<input type="file" name="Photo" accept="image/*" required></div>
  		<div name="CIN"><B>Copie de la CIN:</B>
  		<input type="file" name="CIN" accept="image/*" required></div>
  		<div name="Attestation"><B>Attestation de réussite (CNC, DEUG ou Licence):</B>
  		<input type="file" name="Attestation" accept="image/*" required>
  		</div>
		<div>
            <INPUT classe="envoi" type="submit" name="submit" value="S'inscrire" ></INPUT>
            <INPUT classe="envoi" type="reset" name="reset" value="Reset" ></INPUT>
  		</div>
        </form></div></body></html>