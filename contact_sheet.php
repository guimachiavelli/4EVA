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
		
		
		<meta name="apple-mobile-web-app-capable" content="yes" />

		<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="js/4evaglobal.js"></script>
		
		<?php
			require_once('includes/con.php');
			mysql_query("set names utf8");
		?>
	</head>


	<body>

		<?php
			

			

			
			
			$text = mysql_query("SELECT * FROM lover ORDER BY id");


			$the_counter = 0;
		    //start parsing through possible smses
		    while($text_row = mysql_fetch_array($text)) {
		    	
		    	
		    	
		    	if ($text_row['img'] != '') {
		    		$the_counter++;
		    	}
		    	
		    	
		    	
		    	$sms_type = $text_row['msg_type'];
		    	$gf_id = $text_row['gf_id'];
		    	
		    	if ($sms_type == 1) {
		    		$type = 'FIRST';
		    	} elseif ($sms_type == 2) {
		    		$type = 'JUICE';
		    	} elseif ($sms_type == 3) {
		    		$type = 'SAD';
		    	} elseif ($sms_type == 4) {
		    		$type = 'BREAK';
		    	}
		    	
		    	if ($gf_id == 1) {
		    		$gf_type = 'GIRL';
		    	} elseif ($gf_id == 2) {
			    	$gf_type = 'BOY';
		    	}
		    	
		        echo
		        	'<div>'
			        	. $type . ' – ' . $gf_type . ' – ' . $text_row['id'] . 
			        	'<br> ' 
			        	. $text_row['msg'] . 
			        	'<br>';
			    if ($text_row['img'] != '') { echo '<img src="http://lovemessageservice.com/mailing/' . $text_row['img'] . '">'; 
			    
			    echo $text_row['img'];
			    
			    } else { echo 'ONLY SMS, NO IMAGE'; }
			    
			    
			    echo 	'<br><br><br><br></div>';
		    }
		    
		    echo $the_counter;
		?>



	</body>
</html>