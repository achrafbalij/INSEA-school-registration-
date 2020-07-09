<?php
session_start();
$email=$_SESSION['email'];

	if(isset($_POST['submit'])){
		$sujet=$_POST['sujet'];
		$msg=$_POST['msg'];

		$to=$email; // Receiver Email ID, Replace with your email ID
		$subject=$sujet;
		$message=$msg;
		$headers="MIME-Version:1.0"."\r\n"."Content-type:text/html;charset=UTF-8"."\r\n";

		if(mail($to, $subject, $message, $headers)){
			header('Location:_listeEtudiant.php');
		}
		else{
			echo "Something went wrong!";
            header('Location:_sendpage1.php');
		}
	}
?>