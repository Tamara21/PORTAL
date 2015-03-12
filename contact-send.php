<?php

// Get email address
require_once 'config.php';

// Ensures no one loads page and does simple spam check
if (isset($_POST['name']) && empty($_POST['spam-check'])) {

    // Declare our $errors variable we will be using later to store any errors
    $error = '';

    // Setup our basic variables
    $input_name = strip_tags($_POST['name']);
    $input_email = strip_tags($_POST['email']);
    /// VER $input_subject = strip_tags($_POST['subject']);
    $input_message = strip_tags($_POST['message']);

    // We'll check and see if any of the required fields are empty
    //if( strlen($input_name) < 2 )
    //  $error['name'] =  "<script type=\"text/javascript\">window.location='contact.php';
    //alert('Por favor ingrese su Nombre.');</script>";
    // if( strlen($input_message) < 5 ) $error['message'] =  "<script type=\"text/javascript\">window.location='contact.php';
    //alert('Por favor deje su Mensaje.');</script>";
    // Make sure the email is valid
    //if( !filter_var($input_email, FILTER_VALIDATE_EMAIL) ) $error['email'] =  "<script type=\"text/javascript\">window.location='contact.php';
    //alert('Por favor Ingrese un Email Valido.');</script>";
    // Set a subject & check if custom subject exist
    //$subject = "Message from $input_name";
    //if( $input_subject ) $subject .= ": $input_subject";

    $message = "$input_message\n";
    $message .= "\n---\nEste Email ha sido enviado desde VER.com.";

    // Now check to see if there are any errors 
    if (!$error) {

        // No errors, send mail using conditional to ensure it was sent
        if (mail($your_email_address, $message, "From: $input_email")) {
            echo "<script type=\"text/javascript\">window.location='contact.php'; 
		alert('Mensaje enviado!');</script>";

            //echo '<p class="success">Mensaje enviado!</p>';
        } else {
            echo "<script type=\"text/javascript\">window.location='contact.php'; 
		alert('Ha habido un problema al enviar el mensaje!');</script>";

            //echo '<p class="error">Ha habido un problema al enviar el mensaje!</p>';
        }
    } else {

        // Errors were found, output all errors to the user
        $response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
        $response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
        $response .= (isset($error['message'])) ? $error['message'] . "<br /> \n" : null;

        echo "<p class='error'>$response</p>";
    }
} else {

    die('Direct access to this page is not allowed.');
}