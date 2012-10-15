<?php 
	//include('includes/header.php');
	require_once('con.php');
	
	$sql="INSERT INTO user (mail, gf) VALUES ('$_GET[email]','$_GET[gf_type]')";
	
	if (!mysql_query($sql,$con)) { 
		die('Error: ' . mysql_error());  
	} else {
		header ('Location: http://localhost:8888/4eva/thanks.php');
		exit ();
	}
	
?>