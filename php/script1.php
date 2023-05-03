<?php
	// First of all, we need to check if there is a post request.
	if(isset($_POST['message'])){
		/* if we have a post request, we have to decode the json string that
		we are receiving */
		$data = json_decode($_POST['message']);
		/* The decoded json string is now a php object */

		/* Next i loop trough the object to check for empty fields.
		I know that we have done this check in the javascript file, but never rely on front end validation.
		Front end validation is only done for a better user experience. */
		foreach ($data as $value) {
			if(empty(trim($value))){
				/* If there is an empty field, we send a message back to the javascript file. */
				echo "Erreur : Tous les champs sont requis !";
				exit(); /* and we stop the script here. */
			}
		}
		/* If there are no empty fields, i create new variables containing the input values
		just to keep our script simple, so we can understand what is going on. */
		$lastname = $data->lname;
		$firstname = $data->fname; /* Remember that $data is an object now */
		$email = $data->email;
		$tel = $data->tel;
		$categorie = $data->categorie;
		$message = $data->message;
		$file = $data->file;
		/* Now i will check if the incoming email's value is valid */
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			/* if email is not valid, we send a server response with an error message */
			echo "Erreur : Entrez une adresse email valide !";
			exit();
		}

		/* Now since we are here in this line, our incoming data are correct
		and we are going to send the email. */
		
		
		/* SET THE EMAIL ADDRESS YOU WANT TO RECEIVE THE MESSAGES  */
		/* =============================================== */
		$to = "contact@niceinformatique.fr";
		/* =============================================== */

		
		/* Next we have to add a subject */
		$subject = $firstname . " " . $lastname . " " . $tel . " -- Formulaire de devis";
		/* Next we are setting some basic headers */
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		/* We have to add also a from header, because we want to know the email address from
		the user who is contacting us. */
		$headers .= 'From: '. $email . "\r\n";
		$message = $categorie . " " . $file . " ";
		/* Next we are sending the email */
		$send = mail($to,$subject,$message, $headers);
		/* And last we check if the mail() function was successful*/
		if(!$send){
			echo "Εrreur : Message non envoyé . Veuillez réessayer !";
		}else{
			echo "Message envoyé avec succès !";
		}
	}