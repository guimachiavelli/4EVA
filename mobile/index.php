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

		<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="js/4evaglobal.js"></script>
		
		<link rel="image_src" href="img/title.png">
		
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
						<img src="img/click4luv.png" alt="Two Clicks away from your perfect lover">
						<a id="vai-genero" href="#"><img src="img/2click4luv.png" alt="Click here for love"></a>
					</section>
					
					
					<section id="genero">

				    	<form action="../includes/insert-number.php" method="get">
					    	<h3><img src="img/interessatoin.png" alt="I am interested in:"></h3>
					    	
					    	<div>
					    		<input class="radio" type="radio" name="gf_type" value="1"><label for="1"><img src="img/vdonne.png" alt="Women"></label>
					    		<br>
					    		<input class="radio" type="radio" name="gf_type" value="2"><label for="2"><img src="img/vuomini.png" alt="Men"></label>
				    		</div>
				    		<input type="hidden" name="phonenumber" value="<?php echo $curl_phonenumber; ?>">
				    		
							<input id="submit" type="image" src="img/cominciaamare2.png" alt="start loving – click here!">
				    	</form>
				    	
				    </section>
				</section>
				
			</div>
		</div>
		

	</body>
</html>