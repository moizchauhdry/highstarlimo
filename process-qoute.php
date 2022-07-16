

<?php 

require 'myvendor/autoload.php';
$sendgrid = new SendGrid("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");
$email    = new SendGrid\Email();
$message = "Mr. ".$name . " fill out the qoute form. His details are :" . "<br><br>" . 
    "Name: ".$_POST['name']."<br>".
    "Email: ".$_POST['email']."<br>".
    "Phone: ".$_POST['phone']."<br>".
    "Pick up Address: ".$_POST['pickup']."<br>".
    "Destination Address: ".$_POST['destination']."<br>".
    "No. of Passangers: ".$_POST['nop']."<br>".
    "No. of Lugages: ".$_POST['nol']."<br>".
    "Vehicle: ".$_POST['vehicle']."<br>".
    "Date Time: ".date('m/d/Y h:i A', strtotime($_POST['datetime']))."<br>".
    "Instructions: ".$_POST['message']."<br>";
     $email->addTo("highstarlimo3@gmail.com")
      ->setFrom("info@highstarlimo.com")
      ->setFromName("HighstarLimo Inc.")
      ->setReplyTo($_POST['email'])
      ->setSubject("Someone Request a Qoute")
      ->setHtml($message);
      
      if ( $sendgrid->send($email)->code == 200 ) {
	    echo "<script>window.location.assign('thankyou.php?success=true')</script>";
	  }else{
	    echo "<script>window.location.assign('qoute.php')</script>";
	  }
