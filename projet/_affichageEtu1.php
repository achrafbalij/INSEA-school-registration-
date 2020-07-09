<?php
session_start();

if(isset($_GET["matricule"])){
$matricule = $_GET["matricule"];
	  
    }
$servername="localhost";
$username="root";
$pass="";    
        
        $mysqli = mysqli_connect($servername, $username, $pass, $dbname="insea");

$sql="SELECT * FROM insea WHERE Matricule='$matricule'";
$result = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $nom=$row["Nom"];
            $prenom=$row["Prenom"];
            $sexe=$row["Sexe"];
            $dateNaissance=$row["DateNaissance"];
            $dateInscription=$row["DateInscription"];
            $filiere=$row["Filiere"];
            $cycle=$row["Cycle"];
            $photo=$row["Photo"];
            $attestation=$row["Attestation"];
            $cin=$row['CIN'];
            $email=$row['Email'];
}
?>
<html>
    <head>
        <meta charset="utf_8_unicode_ci" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link ref="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
        <style>
           *
{
    margin: 0;
    padding: 0;
}
/*---body---*/
#nav-bar
{
    position: sticky;
    top: 0;
    z-index: 10;
}
.navbar-brand img
{
    height: 100px;
    padding-left: 30px;
}
.navbar-nav li
{
    padding: 0 10px;
}
.navbar-nav li a
{
    float: right;
    text-align: left;
}
#nav-bar ul li a:hover
{
    color:darkseagreen !important;
}
.navbar
{
    background: #fff;
}
.navbar-toggler
{
    border: none !important;
}
.nav-link
{
    color: #555!important;
    font-weight: 600;
    font-size: 16px;
}
            
            .title
            {
                position: absolute;
                left: 15px;
                bottom: 0;
                color: darkgreen;
            }
            body
{
    font-family: sans-serif;
    color: darkgreen;
    background-color: #f1f1f1;
}
.profile-card
{
    width: 400px;
    margin: auto;
    background: #fff;
    box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);
}
.image-container
{
    position: relative;
    
}
.main-container
{
    padding: 20px;
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
      <li class="nav-item active">
        <a class="nav-link" href="_listeEtudiant.php">Liste des étudiant</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="_listeDemande.php">Liste des demandes</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="hello.php">Composer</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Se déconnecter</a>
        </li>
    </ul>
      </div>
</nav>
        </section>      
       
            <div class="profile-card">
            <div class="image-container">
                <?php echo "<img src= '$photo' style='width: 100%'>"?>
                <div class="title">
                    <?php echo "<h4>$nom $prenom</h4>"?>
                </div>
            </div>
            <div class="main-container">
                <p>matricule: <?php echo $matricule;?></p>
                <p><?php if($sexe=="Masc"){
    echo "né le:";
}else{
    echo "née le:";
} echo" ". $dateNaissance;?></p>
                <p> <?php if($filiere=="etc"){echo $cycle;}else{
    echo $filiere;
}?></p>
                <?php echo "<p>Inscrit le: $dateInscription</p>" ?>
                <?php echo "<p>Email:<a href=_sendpage1.php?email=".$email."> $email</a></p>" ?> 
                <div class="image-container1">
                    <hr>
                <p>Copie de la CIN:</p>
                    <?php echo "<img src= '$cin' style='width: 100%'>"?>
            </div>
                <div class="image-container1">
                    <hr>
                <p>Attestation de réussite (CNC, DEUG ou Licence):</p>
                    <?php echo "<img src= '$attestation' style='width: 100%'>"?>
            </div>
            
            
            </div>
        </div>
    
    </body>
</html>