<?php
	/* $email_from = 'ryanoconnor.dev@gmail.com';
	$email_subject = "(put the info I want here for easy access";
	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".

  $to = "krete77@yahoo.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);

  mail("krete77@yahoo.com", "subject", "message");
*/


require_once('/opt/kwynn/kwutils.php'); // a clone of https://github.com/kwynncom/kwynn-php-general-utils

// kwas() is current defined on line 50, but that of course is subject to change
kwas($res = mail('bob@example.com', 'testing', 'test'), 'mail() failed - Kwynn demo 2022/01/11 21:58 EST / GMT -5');
exit(0); // I am simply emphasizing that this is the end of the code -- do NOT close the PHP tag!!!!



<form method="post" name="myemailform" action="submit_weight.php">

    Enter Name:	<input type="text" name="name">

    Enter Email Address:	<input type="text" name="email">

    Enter Message:	<textarea name="message"></textarea>

    <input type="submit" value="Send Form">
</form>
