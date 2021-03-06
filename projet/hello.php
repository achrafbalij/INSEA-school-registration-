<?php

session_start();
if($_SESSION['nom']=='Admin'){   
	if(isset($_POST['submit'])){
        $email=$_POST['email'];
		$sujet=$_POST['sujet'];
		$msg=$_POST['msg'];

		$to=$email; 
		$subject=$sujet;
		$message=$msg;
		$headers="MIME-Version:1.0"."\r\n"."Content-type:text/html;charset=UTF-8"."\r\n";

		if(mail($to, $subject, $message, $headers)){
			header('Location:_listeEtudiant.php');
		}
		else{
			echo "Something went wrong!";
            header('Location:hello.php');
		}
	}
    }else{
   header('Location:_connexion.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Composer</title>
	<style type="text/css" media="screen">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: helvetica;
		}
		body{
			background-color: darkgreen;
		}
		.main{
			width: 500px;
			margin: 50px auto;
			border-radius: 10px;
			border: 5px solid #dc143c;
			border-left: 40px solid #dc143c;
			box-shadow: 1px 2px 10px #555;
		}
		.info{
			width: 100%;
			background-color: #dc143c;
			padding: 7px;
			text-shadow: 1px 1px 1px #222;
			color: #fff;
			font-size: 20px;
		}
		.form-box{
			padding: 20px;
			background-color: #eee;
		}
		label{
			color: navy;
			font-size: 18px;
		}
		.inp,.msg-box{
			width: 100%;
			padding: 10px;
			margin-top: 4px;
			margin-bottom: 5px;
			border-radius: 5px;
			border: 2px solid #dc143c;
			font-weight: bold;
			color: #dc143c;
			border-right: 15px solid #dc143c;
			border-left: 15px solid #dc143c;
			resize: none;
		}
		.msg-box{
			height: 80px;
		}
		.inp:focus,.msg-box:focus{
			outline: none;
			border: 2px solid navy;
			border-right: 15px solid navy;
			border-left: 15px solid navy;
		}
		.sub-btn{
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			margin-top: 5px;
			border: none;
			background: linear-gradient(#dc143c,#800000);
			cursor: pointer;
			color: #fff;
			font-size: 20px;
			text-shadow: 1px 1px 1px #444;
		}
		.sub-btn:hover{
			background: linear-gradient(#800000,#dc143c);
			opacity: 0.8;
			transition: all ease-out 0.2s;
		}
		.sub-btn:focus{
			outline: none;
		}
		@media(max-width: 720px){
			.main{
				width: 90%;
			}
		}
	</style>
</head>
<body>
	<div class="main">
		<div class="info">Envoyer un Email</div>
		<form action="" method="post" name="form" class="form-box">
			<label for="email">A</label><br>
			<input type="email" name="email" class="inp" placeholder="Entrer l'email" required><br>
			<label for="sujet">Sujet</label><br>
			<input type="text" name="sujet" class="inp" placeholder="Entrer le sujet de l'email" required><br>
			<label for="message">Message</label><br>
			<textarea name="msg" class="msg-box" placeholder="Entrer le corps de votre message ici..." required></textarea><br>
			<input type="submit" name="submit" value="Send" class="sub-btn">
		</form>
	</div>
</body>
</html>