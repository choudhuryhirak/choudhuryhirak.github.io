<?php
include("db.php");
$pagename="Contact Confirmed";



$fname=$_POST['name'];


$lname=$_POST['lname'];


$email=$_POST['email'];


$message=$_POST['message'];
$inmessage=mysqli_real_escape_string($conn, $message);




$SQLB="insert into messa
        (FirstName, LastName, Email, Message)
            values
            ('".$fname."', '".$lname."', '".$email."', '".$inmessage."')";
        
$exeSQLB=mysqli_query($conn, $SQLB) or die(mysqli_error($conn));
include 'thankscontact.html';



?>