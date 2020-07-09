<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf_8_unicode_ci" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Liste des étudiants</title>
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link ref="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/ddtf.js"></script>
        <script>
            $('#mytable').ddTableFilter();
        </script>
        
        <style type="text/css">
            table{
                border-collapse: collapse;
                width: 100%;
                font-family: monospace;
                text-align: left;
            }
            thead{
	 	background: darkgreen;

	}
    td,th{
     	width: 100px;
     	text-align: center;
     	border: 1px solid white;
    }
        </style>
    
    </head>
    <body>
        <!--bar-->
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
    <br>
        <br>
        <br>
    <div class="grid">
      	<table  id="mytable" class="table table-striped">
      		<thead>
      			<tr>
      				<th>Matricule</th>
      				<th>Nom et Prénom</th>
                    <th>Sexe</th>
      				<th>Cycle</th>
      				<th>Filière</th>
                    <th>Email</th>
      				<th colspan="2">Actions</th>
      			</tr>
      		</thead>
            <tbody>
            <?php
$servername="localhost";
$username="root";
$pass="";    
        
        $conn = mysqli_connect($servername, $username, $pass, $dbname="insea");
if($_SESSION['nom']=='Admin'){    
                $sql = "SELECT * FROM insea";
		 		
		 			$result = mysqli_query($conn, $sql);
                  
					if (mysqli_num_rows($result) > 0) {
    						// Parcourir les lignes de résultat

    					while($row = mysqli_fetch_assoc($result)) {
        					echo "<tr><td> " .$row["Matricule"]."</td><td>" ."<a href=_affichageEtu1.php?matricule=". 
							$row["Matricule"] .">". 
							$row["Nom"]." " . 
							$row["Prenom"] . "</a></td><td>".$row["Sexe"] . "</td><td>". $row["Cycle"]. "</td><td>". $row["Filiere"]. "</td><td>"."<a href=_sendpage1.php?email=".$row["Email"].">".$row["Email"]."</a></td><td><a href=\"supp_exe.php?matricule=".
							$row["Matricule"]."\" onclick=\"return confirm('Vous voulez vraiment supprimer cet etudiant')\">Supprimer</a></td></tr>";
    					}
                        
					}
}else{
   header('Location:_connexion.php');
}
?>
            </tbody>
            </table>
      </div>
    </body>
</html>