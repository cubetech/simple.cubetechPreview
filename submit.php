<?php

	include('_env/function.mail.php');

	$name = htmlentities($_POST['name']);
	$mail = htmlentities($_POST['mail']);
	
	if(!validEmail($mail)) {
		header('Location: ./?submit=nomail');
	} else {
	
		if(!$name || !$mail || $mail=='' || $name=='' || $mail=='Deine Mailadresse...' || $name=='Dein Name...') {
			header('Location: ./?submit=wrong');
		} else {
		
			mail('new@cubetech.ch', 'Neuer Eintrag', $name . ', ' . $mail);
			
			header('Location: ./?submit=true&mail='.$mail);
			
		}
		
	}
	
?>