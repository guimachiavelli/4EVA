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
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
		
		
		<script src="js/4evaglobal.js"></script>
		
		<link rel="image_src" href="http://lovemessageservice.com/img/fbimage.jpg">
		<?php require_once('includes/con.php');	?>
	</head>


	<body>
		<div id="bg2">
			<div id="wrap">
	
				<header>
					<h1><img src="img/title.png" alt="4EVA"></h1>
					<h2><img src="img/subtitle.png" alt="A free e-mail service bringing an ideal boyfriend or girlfriend to your mailbox"></h2>
				</header>
			
				<section id="contenuto">
					<section id="inizio">
						<img src="img/maintext.png" alt="The romance will be spread in ten intimate messages. Once the love is over, you will not receive any e-mail from this service again. 4eva is a project by Pinar&Viola and is spam proof. ">
					</section>
					
					<section id="genere">

				    	<form id="4evaform" action="includes/insert-user.php" method="get">
	
					    	<div class="field">
						    	<h3><img src="img/wanta.png" alt="I want a:"></h3>
					    		<input class="radio required" type="radio" name="gf_type" value="1"><label for="1"><img src="img/gf.png" alt="girlfriend"></label>
					    		<input class="radio required" type="radio" name="gf_type" value="2"><label for="2"><img src="img/bf.png" alt="boyfriend"></label>
				    		</div>
				    		
				    		<div class="field">
				    			<label class="email" for="1"><img src="img/mial.png" alt="Enter your e-mail here"></label><input class="required email" type="email" name="email" value="">
				    		</div>
				    		
							<input type="image" src="img/startloving.gif" alt="start loving – click here!">
				    	</form>
				    	
				    </section>
				</section>
				
			</div>
		</div>
		
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-32728606-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
	</body>
</html>