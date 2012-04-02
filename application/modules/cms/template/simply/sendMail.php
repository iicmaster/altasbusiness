<?php
	
	

	/*

	  * YOUR EMAIL ***

	*/

	

	

	$adminEmail = "info@yourdomain.com";

	

	

	/*

	  * VALIDATE EMAIL ***

	*/

	

	

	function validateEmail($email){

		return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);

	}

	

	

	/*

	  * CHECK FORM ***

	*/

	

	

	$post = (!empty($_POST)) ? true : false;

	

	if($post) {

		

		$name = stripslashes($_POST['name']);

		$email = trim($_POST['email']);

		$subject = stripslashes($_POST['subject']);

		$message = stripslashes($_POST['message']);

		$error = '';

		

		
		/*

		  * CHECK MESSAGE ***

		*/

		
		

		if(!$message || $message == "Message") {

			$error = "Please, type in a message.";

		}
		

		

		/*

		  * CHECK SUBJECT ***

		*/

		
		

		if(!$subject || $subject == "Subject") {

			$error = "Please, type in the subject.";

		}

		
		

		/*

		  * CHECK MAIL ***

		*/

		
		

		if(($email && !validateEmail($email)) || $email == "Email") {

			$error = "Please, check your e-mail.";

		}



		
		if(!$email || $email == "Email") {

			$error = "Please, type in your e-mail.";

		}





		/*

		  * CHECK NAME ***

		*/

		
		

		if(!$name || $name == "Name") {

			$error = "Please, type in your name.";

		}

		
		

		/*

		  * ACTION ***

		*/
		

		

		if(!$error) {

			$mail = mail($adminEmail, $subject, $message,

     			"From: ".$name." <".$email.">\r\n"

    			."Reply-To: ".$email."\r\n"

    			."X-Mailer: PHP/" . phpversion());

			if($mail) {

				echo 'ok';

			}

		} else {

			echo '<p>'.$error.'</p>';

		}
		
		

	}

?>