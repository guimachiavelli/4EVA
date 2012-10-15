<!DOCTYPE html>

<html>

	<head>
		<title>4EVA</title>
		<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="love message service">
		<meta name="author" content="pinar&viola, gui machiavelli, pinar demirdag, viola renate ">
		<meta name="keywords" content="love, message, sms, service, girlfriend, boyfriend, kinky, sexy">

		<!--  Mobile viewport optimized: j.mp/bplateviewport -->
		<meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8;">
		
		<link rel="shortcut icon" href="/favicon.gif">
		 
		<!-- CSS : implied media="all" -->
		<link rel="stylesheet" href="css/4eva.css" type="text/css">
		
		<meta name="apple-mobile-web-app-capable" content="yes" />

		<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="js/4evaglobal.js"></script>
		
		<?php
			require_once('../includes/con.php');
		
			if (isset($_GET['phonenumber'])) {
				$curl_phonenumber = $_GET['phonenumber'];
			} else {
				$curl_phonenumber = '98908768';
			}
			
		?>
	</head>


	<body>
		<div id="bg2">
			<div id="wrap">
	
				<header>
					<h1><img src="img/title.png" alt="4EVA"></h1>
					<h2><img src="img/luvmsgsrvc.png" alt="Love Message Service"></h2>
				</header>
			
				<section id="contenuto">
					<section id="inizio">
<img src="img/thanks.png" alt="Two Clicks away from your perfect lover">
					</section>
					
					
				</section>
				
			</div>
		</div>
		

	</body>
</html>