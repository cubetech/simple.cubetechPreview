<?php 

	$submit = $_GET['submit'];

?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<title>cubetech - Web, Hosting, Design, Infrastruktur, Mac, Linux</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Cambo' rel='stylesheet' type='text/css'>
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	
	<body>
	
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&appId=153499901388453";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<div id="header">
			<div id="logo">
				<a href="./"><img src="_image/logo_new_greybrown.png" class="logo" alt="logo" /></a>
			</div>
			<div id="banner" style="">
				<h1>Wir sind noch nicht ganz fertig.</h1>
				<h4>cubetech ist ein Berner Web- und Dienstleistungsunternehmen.</h4>
			</div>
		</div>
		<div id="container">
		
			<div id="left">
				<h2>Bleibe auf dem Laufenden!</h2>
					<?php 
						if($submit!='true' || $submit=='wrong' || $submit=='nomail') {
					?>
				<div id="error">					
					<?php
							if($submit=='wrong') {
								echo '<warning>Etwas ist schief gelaufen! Bitte nochmals ausfüllen.</warning>';
							} elseif($submit=='nomail') {
								echo '<warning>Ung&uuml;ltige Mailadresse! Sollte die Mail korrekt sein, kontaktieren Sie uns direkt per Mail, besten Dank!</warning>';
							}
					?>
					&nbsp;
				</div>
					<form action="submit.php" method="post">
						<input type="text" name="name" class="textfield" value="Dein Name..." onClick="javascript:if(this.value=='Dein Name...') {this.value=''};" onblur="this.value=!this.value?'Dein Name...':this.value;"  /><br /><br />
						<input type="text" name="mail" class="textfield" value="Deine Mailadresse..." onClick="javascript:if(this.value=='Deine Mailadresse...') {this.value=''};;" onblur="this.value=!this.value?'Deine Mailadresse...':this.value;" />
						<br /><br />
						<input type="submit" class="submit" value="Abschicken" /><br />
						<small style="font-size: 0.7em;"><i>Kein Spam, versprochen!</i></small>
					</form>
				<?php 
					} else {
				?>
					<div id="error">&nbsp;</div>
					Herzlichen Dank f&uuml;r Deinen Eintrag!<br /><br />
					Wir werden Dich mit spannenden News zu unserer Unternehmung auf dem Laufenden halten.
				<?php } ?>
				<br /><br />
				<div class="fb-like" data-href="http://www.facebook.com/cubetech" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
			</div>
			<div id="middle">&nbsp;</div>
			<div id="right">
				<h2>Kontaktiere uns!</h2>
				<div id="error">&nbsp;</div>
				<h3>Adresse</h3>
				<div id="address">
					Winkelriedstrasse 42b<br />
					3014 Bern (Schweiz)<br />
				</div>
				<div id="gmaps">
					<a href="http://g.co/maps/btdvb" target="_blank"><img src="_image/google-maps-icon.png" alt="googlemaps" style="width: 3.5em;" /></a>
				</div>
				<h3>Telefon</h3>
				+41 (0) 31 511 51 59<br />
				<h3>Mail</h3>
				<a href="mailto:new@cubetech.ch">new@cubetech.ch</a><br />
			</div>
		
		</div>
		
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-24407907-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>

	</body>
	
</html>