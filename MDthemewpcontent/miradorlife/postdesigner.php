<?php

include("db.php");


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$company = $_POST['company'];
$mnumber = $_POST['Mnumber'];
$email = $_POST['email'];
$city = $_POST['city'];
$kindofproject = $_POST['kindofproject'];
$requirement = $_POST['requirement'];






$SQLB="insert into designers
        (FirstName, LastName, Company, Mnumber, Email, City, KindOfProject, Requirement)
        values
        ('".$firstname."', '".$lastname."', '".$company."', '".$mnumber."', '".$email."', '".$city."', '".$kindofproject."', '".$requirement."')";

$exeSQLB=mysqli_query($conn, $SQLB) or die(mysqli_error($conn));



// echo("<p>succesfully submitted!</p>");


 $content="From: $firstname \n Email: $email \n FirstName : $firstname \n Mobile Number: $mnumber \n City: $city \n Kind Of Project: $kindofproject \n Requirement: $requirement  ";
 $recipient = "support@miradorlife.com";

 $headers .= "Reply-To: $recipient \r\n";
 $headers .= "Return-Path: $email \r\n";
 $headers = "From: $email \r\n";

 $headers .= "Organization: MiradorLife\r\n";
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
 $headers .= "X-Priority: 3\r\n";







 mail($recipient, $subject, $content, $headers) or die("Error!");


include 'thanksdesigner.html';

?>
