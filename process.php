<?php
// error_reporting(-1);
// ini_set('display_errors', 'On');
// set_error_handler("var_dump");
// echo phpinfo();die();
// if(isset($_POST['submit'])){
//     $to = "aliriaz989@gmail.com"; // this is your Email address
//     $from = "info@highstarlimo.com"; // this is the sender's Email address
//     $name = $_POST['name'];
//     $subject = "Reservation";
//     $message = "Mr. ".$name . " fill out the reservation form. His details are :" . "\n\n" . 
//     "Name: ".$_POST['name']."\n".
//     "Email: ".$_POST['email']."\n".
//     "Phone: ".$_POST['phone']."\n".
//     "Pick up Address: ".$_POST['pickup']."\n".
//     "Destination Address: ".$_POST['destination']."\n".
//     "Date Time: ".date('m/d/Y h:i A', strtotime($_POST['datetime']))."\n".
//     "No. of Passangers: ".$_POST['nop']."\n".
//     "No. of Luggages: ".$_POST['nol']."\n".
//     "Vehicle: ".$_POST['vehicle']."\n".
//     "Plan: ".$_POST['plan']."\n".
//     "Message: ".$_POST['message']."\n";

//   $headers = "MIME-Version: 1.0" . "\r\n";
//     //$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//     $headers .= "From: ".$from. "\r\n" .
//     "Reply-To: ".$_POST['email'] . "\r\n" .
//     "X-Mailer: PHP/" . phpversion();

//     $sent = mail($to,$subject,$message,$headers,"-finfo@highstarlimo.com");
//     print_r($sent);die();
//     //die();
//         header('Location: thankyou.php?success=true');
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
//     }else{
//         header('Location: contact-us.php');
//     }
?>

<?php
ini_set('display_errors', 1);
require 'myvendor/autoload.php';
$sendgrid = new SendGrid("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");
$email    = new SendGrid\Email();
$message = "Mr. " . $name . " fill out the reservation form. His details are :" . "\n\n" .
  "Name: " . $_POST['name'] . "<br>" .
  "Email: " . $_POST['email'] . "<br>" .
  "Phone: " . $_POST['phone'] . "<br>" .
  "Pick up Address: " . $_POST['pickup'] . "<br>" .
  "Destination Address: " . $_POST['destination'] . "<br>" .
  "Date Time: " . date('m/d/Y h:i A', strtotime($_POST['datetime'])) . "<br>" .
  "No. of Passangers: " . $_POST['nop'] . "<br>" .
  "No. of Luggages: " . $_POST['nol'] . "<br>" .
  "Vehicle: " . $_POST['vehicle'] . "<br>" .
  "Plan: " . $_POST['plan'] . "<br>" .
  "Flight Number: " . $_POST['flight_no'] . "<br>" .
  "Message: " . $_POST['message'] . "<br>";
$email->addTo("info@highstarlimo.com")
  ->setFrom("info@highstarlimo.com")
  ->setFromName("HighstarLimo Inc.")
  ->setReplyTo($_POST['email'])
  ->setSubject("Your Reservation is Confirmed")
  ->setHtml($message);
if ($sendgrid->send($email)->code == 200) {
  echo "<script>window.location.assign('thankyou.php?success=true')</script>";
} else {
  echo "<script>window.location.assign('reservation.php')</script>";
}
// ini_set('display_errors', 1);
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require_once "vendor/autoload.php";

// if(isset($_POST['submit'])){
// $mail = new PHPMailer(true);

// //Set mailer to use smtp
// 	$mail->isSMTP();
// //Define smtp host
// 	$mail->Host = "s23.hosterpk.com";
// //Enable smtp authentication
// //	$mail->SMTPAuth = true;
// 	$mail->SMTPDebug = 2;
// //Set smtp encryption type (ssl/tls)
// 	$mail->SMTPSecure = "tls";
// //Port to connect smtp
// 	$mail->Port = "587";
// //Set gmail username
// 	$mail->Username = "info@highstarlimo.com";
// 	$mail->Password = "qC~*T~-%EPrY";
// //Set gmail password
// //	$mail->Password = "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";
// //Email subject
// 	$mail->Subject = "Reservation";
// //Set sender email
// 	$mail->setFrom("info@highstarlimo.com");
// 	$mail->addReplyTo($_POST['email'], $_POST['name']);
// //Enable HTML
// 	//$mail->isHTML(true);
// //Email body
// $message = "Mr. ".$name . " fill out the reservation form. His details are :" . "\n\n" . 
//     "Name: ".$_POST['name']."\n".
//     "Email: ".$_POST['email']."\n".
//     "Phone: ".$_POST['phone']."\n".
//     "Pick up Address: ".$_POST['pickup']."\n".
//     "Destination Address: ".$_POST['destination']."\n".
//     "Date Time: ".date('m/d/Y h:i A', strtotime($_POST['datetime']))."\n".
//     "No. of Passangers: ".$_POST['nop']."\n".
//     "No. of Luggages: ".$_POST['nol']."\n".
//     "Vehicle: ".$_POST['vehicle']."\n".
//     "Plan: ".$_POST['plan']."\n".
//     "Message: ".$_POST['message']."\n";
// 	$mail->Body = $message;
// //Add recipient
// 	$mail->addAddress('info@highstarlimo.com');
// //Finally send email
// 	if ( $mail->send() ) {
// 	    echo "<script>window.location.assign('thankyou.php?success=true')</script>";
// 	}else{
// 	    echo "<script>window.location.assign('reservation.php')</script>";
// 	}
// }
//Closing smtp connection
