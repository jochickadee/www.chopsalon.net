<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $stylist = $_POST['stylist'];
    $message = $_POST['message'];
    $from = 'From: Chop Salon.net'; 
    $to = 'johanna.lonn@gmail.com'; 
    $subject = 'A message from ChopSalon.net';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Preferred Stylist: $stylist\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>