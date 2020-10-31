
<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['field'];

		$to='joachim.simon.45@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Message du formulaire Loiret dépannage';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
      echo "<h1>Message envoy&eacute;! Merci"." ".$name.", Nous reviendrons vers vous rapidement !</h1>
      <a href=/index.html>Revenir à la page d'accueil</a>";
		}
		else{
			echo "Nous avons rencontré un problème, veuillez recommencer !";
		}
	}
?>