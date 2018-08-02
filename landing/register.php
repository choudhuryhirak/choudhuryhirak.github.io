<?php
    
include("db.php");

$email = $_POST['email'];

$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$phonenumber=$_POST['phonenumber'];



if (isset($_POST['doctor']) && $_POST['doctor'] == 'positive')
{
    $SQLA="insert into AdUsersDoctors
            (Email, FirstName, LastName, PhoneNumber)
            values
            ('".$email."', '".$firstname."', '".$lastname."', '".$phonenumber."')";
    
    $exeSQLA=mysqli_query($conn, $SQLA) or die(mysqli_error($conn));
    include 'thanks.html';
    
}
else
{
    $SQLB="insert into AdUsersNotDoctors
            (Email, FirstName, LastName, PhoneNumber)
            values
            ('".$email."', '".$firstname."', '".$lastname."', '".$phonenumber."')";
    
    $exeSQLB=mysqli_query($conn, $SQLB) or die(mysqli_error($conn));
    include 'thanks.html';
    
    
}






?>