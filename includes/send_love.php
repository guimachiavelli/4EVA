<?php 

	require_once('con.php');
	require_once('lib/swift_required.php');
	

	function escape_query($str) {
	    return strtr($str, array(
	        "\0" => "",
	        "'"  => "&#39;",
	        "\"" => "&#34;",
	        "\\" => "&#92;",
	        // more secure
	        "<"  => "&lt;",
	        ">"  => "&gt;",
	    ));
	}
	
?>
	
	<section id="main" class="render">

		<?php
				//get users that have fin = false
				$result = mysql_query("SELECT * FROM user WHERE fin='0' ORDER BY id DESC");
				
				
				//start the sending loop
				while($row = mysql_fetch_array($result)) {
				
					//organize user data in variables
					$user_id = $row[0];
					$user_mail = $row[1];
					$user_gf_type = $row[2];
					$user_received = $row[3];
					$user_count = $row[4];
					$user_fin = $row[5];
					
					//separate the ids of received messages
					$received_ids = explode(",", $user_received);
					
					//sets a user as finished
					if ($user_count == 9 && $user_fin != 1) { mysql_query("UPDATE user SET fin = 1 WHERE id='$user_id'"); }
					
					if ($user_count == 0) {
						$get_msg_type = 1;
					} elseif ($user_count >= 1 && $user_count < 5 ) {
						$get_msg_type = 2;
					} elseif ($user_count >= 5 && $user_count < 10 ) {
						$get_msg_type = 3;
					} elseif ($user_count > 9 ) {
						$get_msg_type = 4;
					}
					
						
					//get smses for the user's respective gf
    				$text = mysql_query("SELECT * FROM lover WHERE gf_id='$user_gf_type' AND msg_type='$get_msg_type' ORDER BY RAND()");
    				
    				//start parsing through possible msg
    				while($text_row = mysql_fetch_array($text)) {
    					
    					$text_id  = $text_row[0];
    					$text_msg = $text_row[1];
    					$text_img = $text_row[2];
    					
    					//checks the id of the sms with the already sent msg
    					$text_sent = in_array($text_id,$received_ids);
    					
    					//if the text has been sent, try the next one
    					//else, send msg an update that user's entry
    					if ($text_sent == 1 || !$text_img) {
    						continue;
    					} else {
							
							// Create the message
							$message = Swift_Message::newInstance()
								
								// Give the message a subject
								->setSubject('4EVA – Love Message Service')
								->setContentType('text/html')
								
								// Set the From address with an associative array
								->setFrom(array('sorry.hun.no.reply@lovemessageservice.com' => 'your truelove'))
								
								// Set the To addresses with an associative array
								->setTo(array($user_mail))
								
								// Give it a body
								->setBody(
									'<html><body>' .
										'<p style="text-align: left; font-size: 14px">' .
											$text_msg .
										'</p><br>' .
										'<img src="http://lovemessageservice.com/mailing/' . $text_img . '">' .
										'<br>' .
										'<a href="http://lovemessageservice.com/mailing/' . $text_img . '">http://lovemessageservice.com/mailing/' . $text_img . '</a>' .
										'<br><br><br>' .
										'<p style="text-align: left; font-size: small"><small>' .
											'4eva Love Message Service, Ecstatic Capsule Collection 2013 by <a href="http://pinar-viola.com">Pinar&Viola</a>' .
										'</p></small>' .
									'</body></html>'
								)
							
							  ;
							  
							// Create the Transport
							$transport = Swift_SmtpTransport::newInstance('mailout.one.com', 25)
							  ->setUsername('')
							  ->setPassword('')
							;
							
							// Create the Mailer using your created Transport
							$mailer = Swift_Mailer::newInstance($transport);
							
							// Send the message
							$numSent = $mailer->send($message);
							
							printf("Sent %d messages\n", $numSent);
							
    						//sendInfoToSms($user_phone, $text_sms);
    						mysql_query("UPDATE user SET received = CONCAT('$text_row[0],', received) WHERE id='$user_id'");
    						mysql_query("UPDATE user SET count = count + 1 WHERE id='$user_id'");
    						break;
    					}
    				}
				}
				

			
			mysql_close($con);
		?>
