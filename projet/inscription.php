<!DOCTYPE html>
<html>
	<head>
		<title>page d'inscription à l'INSEA</title>
		<LINK rel=STYLESHEET type="text/CSS" href="style.CSS">
	</head>
	<body>
	<!--<div id="top_header">
        <div class="logoheader">
          <h1 id="logo">

                    <a href="/index.php"><img border="0" src="/images/insea/logo.png" alt="INSEA" /></a>
                    <span class="header1">
                    </span></h1>
        </div><!-- end logoheader -->
        
		<div class="Inscription">
		<form>
		<h1>Inscription à l'INSEA</h1>
		<hr>
		<div>
		<B>Matricule:</B><input type="integer" name="Matr" id="Matr" placeholder="Votre Matricule" size="10" required>
		<B>Nom:</B><input type="text" name="fname" id="fname" placeholder="Votre prénom" size="20" required>
		<B>Prénom:</B><input type="text" name="lname" id="lname" placeholder="Votre nom" size="20" required>
		<B>Date de naissance:</B><input type="date" name="dateNaissance" placeholder="dateNaissance" min="1970-01-01" max="2001-12-31" required>
		</div>
		<br>
		<div>
		<B>Cycle:</B> <select id="Cycle" required>
			<option value="Cycle ingénieurs d'Etat">Cycle ingénieurs d'Etat</option>
			<option value="Cycle Master">Cycle Master</option>
			<option value="Cycle Doctorat">Cycle Doctorat</option>
		</select>
		<B>Filière:</B><select id="Filière" required>
			<option value="Actuariat-Finance">Actuariat-Finance</option>
			<option value="Statistique-Economie Appliquée">Statistique-Economie Appliquée</option>
			<option value="Statistique-Démographie">Statistique-Démographie</option>
			<option value="Recherche Opérationnelle et Aide à la Décision">Recherche Opérationnelle et Aide à la Décision</option>
			<option value="Ingénierie des Données et des Logiciels">Ingénierie des Données et des Logiciels</option>
			<option value="Science des Données">Science des Données</option>
			<option value="etc">etc</option>
		</select>
		<B>Sexe:</B><label for="male" required>
			<INPUT type="radio" name="sexe" value="Masc" checked>Masc.
			<INPUT type="radio" name="sexe" value="fem">Fém.
		</label>
		</div>
		<br>
		<div>
		<B>Date d'inscription:</B><input type="date" name="dateInscription" placeholder="dateInscription" min="2014-09-01" max="2020-10-31" required>
		<B>Votre photo:</B>
  		<input type="file" name="Photo" id="Photo" required>
  		<B>Copie de la CIN:</B>
  		<input type="file" name="CIN" id="CIN" required>
  		<B>Attestation de réussite (CNC, DEUG ou Licence):</B>
  		<input type="file" name="Attestation" id="Attestation" required>
  		</div>
		<br>
		<div>
  		<INPUT type="button" name="envoi" value="Envoyer !" >
  		<INPUT type="reset" name="vider" value="Annuler !">
  		</div>
		<br>
	</body>
</html>