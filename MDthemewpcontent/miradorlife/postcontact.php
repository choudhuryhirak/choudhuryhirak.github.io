<?php

include("db.php");


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$pnumber = $_POST['number'];
$message = $_POST['message'];

$SQLA="insert into contact
        (FirstName, LastName, Email, Subject, Mnumber, Message)
        values
        ('".$firstname."', '".$lastname."', '".$email."', '".$subject."', '".$pnumber."', '".$message."')";

$exeSQLA=mysqli_query($conn, $SQLA) or die(mysqli_error($conn));

// echo("<p>succesfully submitted!</p>");


 $content="From: $firstname \n Email: $email \n Message: $message \n Phone Number: $pnumber";
 $recipient = "support@miradorlife.com";

 $headers .= "Reply-To: $recipient \r\n";
 $headers .= "Return-Path: $email \r\n";
 $headers = "From: $email \r\n";

 $headers .= "Organization: MiradorLife\r\n";
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
 $headers .= "X-Priority: 3\r\n";



 mail($recipient, $subject, $content, $headers) or die("Error!");


include 'thankscontact.html';


?>
