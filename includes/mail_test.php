<?php

	require_once('lib/swift_required.php');
	
	// Create the Transport
	$transport = Swift_SmtpTransport::newInstance('mailout.one.com', 25)
	  ->setUsername('')
	  ->setPassword('')
	;
	
	// Create the Mailer using your created Transport
	$mailer = Swift_Mailer::newInstance($transport);
	
	// Create a message
	$message = Swift_Message::newInstance('Wonderful Subject')
	  ->setFrom(array('john@doe.com'))
	  ->setBody('Here is the message itself')
	  ;
	
	// Send the message
	$failedRecipients = array();
	$numSent = 0;
	$to = array('gt.macki@gmail.com');
	
	foreach ($to as $address => $name)
	{
	  if (is_int($address)) {
	    $message->setTo($name);
	  } else {
	    $message->setTo(array($address => $name));
	  }
	
	  $numSent += $mailer->send($message, $failedRecipients);
	}
	
	printf("Sent %d messages\n", $numSent);
	
	if (!$mailer->send($message, $failures)) {
 		 echo "Failures:";
	  	 print_r($failures);
	}
?>