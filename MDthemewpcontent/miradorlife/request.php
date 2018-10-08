<?php

include("db.php");

$colltitle = $_POST['colltitle'];
$firstname = $_POST['requestfirstname'];
$lastname = $_POST['requestlastname'];
$email = $_POST['requestemail'];
$phonenumber = $_POST['requestphonenumber'];
$content = $_POST['requestcontent'];


if(isset($_POST['subscribe']) && $_POST['subscribe'] == 'yes')
{
  $subscribe = "Yes";
}
else {
  $subscribe = "No";
}



$SQLR = "insert into request
          (CollectionTitle, FirstName, LastName, Email, MobileNumber, Ritems, Subscribe)
          values
          ('".$colltitle."', '".$firstname."', '".$lastname."', '".$email."', '".$phonenumber."', '".$content."', '".$subscribe."')";

$exeSQLR = mysqli_query($conn, $SQLR) or die(mysqli_error($conn));

?>
