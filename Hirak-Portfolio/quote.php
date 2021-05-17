<?php
include("db.php");
$pagename="Contact Site";



$fname=$_POST['firstname'];


$lname=$_POST['lastname'];


$email=$_POST['email'];


$phone=$_POST['phonenumber'];



$services=implode(',', $_POST['se']);


$probrief=$_POST['message'];
$inprobrief=mysqli_real_escape_string($conn, $probrief);


$estimate=$_POST['estimate'];




$SQLA="insert 
into users
        (Fname, Lname, Email, PNumber, Services, PBrief, Estimate)
            values
            ('".$fname."', '".$lname."', '".$email."', '".$phone."', '".$services."', '".$inprobrief."', '".$estimate."')";
        
$exeSQLA=mysqli_query($conn, $SQLA) or die(mysqli_error($conn));

include 'thanksquote.html';

?>