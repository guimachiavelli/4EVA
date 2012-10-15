<?php 
	//include('includes/header.php');
	require_once('con.php');
	
	//$result = mysql_query("SELECT * FROM tweet_info ORDER BY id DESC LIMIT 200 ");
	
	/*
		sms types
		
		schedule
		morning
		noon
		night
		
		moment
		1 - starter – first message
		2 - filler – from 2 to 5
		3 - trigger – 6 and 7
		4 - ender – 8
	*/

	for ($i=0; $i<count($_GET['schedule']); $i++){
		$schedule = $_GET['schedule'][$i];
	}
	
	$sql="INSERT 
		INTO lover (
			sms, 
			sms_type, 
			gf_id, 
			schedule
		) VALUES (
			'$_GET[sms_text]',
			'$_GET[sms_type]',
			'$_GET[gf_id]', 
			'$schedule'
		)";
	
	if (!mysql_query($sql,$con)) { die('Error: ' . mysql_error());  }
	echo "1 record added";
	
?>