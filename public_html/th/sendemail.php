<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    $name = trim(stripslashes($_POST['name'])); 
    $email = trim(stripslashes($_POST['email'])); 
    $message = trim(stripslashes($_POST['message'])); 

    $email_from = $email;
	$subject = 'From: <'.$email_from.'> - tadessehagos.com Contact US';
    $email_to = 'merhawifissehaye@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

    $success = mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

	if(!$success) {
		$status['type'] = 'failure';
		$status['message'] = $body;
	}
    echo json_encode($status);
    die; 
