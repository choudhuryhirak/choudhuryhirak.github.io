<?php
DEFINE ('DB_HOST', 'localhost');


// DEFINE('DB_USER', 'root');
// DEFINE('DB_PASSWORD', '');
// DEFINE('DB_NAME', 'miradorlocal');

// for demo site

// DEFINE ('DB_USER', 'd2vrulu4_mddemo');
// DEFINE ('DB_PASSWORD', 'Abravebravelab');
// DEFINE ('DB_NAME', 'd2vrulu4_Miradorlife_demo');


// for live site
DEFINE ('DB_USER', 'd2vrulu4_mirador');
DEFINE ('DB_PASSWORD', 'Abravebravelab');
DEFINE ('DB_NAME', 'd2vrulu4_MiradorLife');

//Make Connection

$conn=@mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

// if($conn)
// {
//   echo("<p>Database connection successful!</p>");
// }


if (!$conn)
{
    die('Did not connect to MySQL:' .mysqli_connect_error());
}
// select the database

mysqli_select_db($conn, DB_NAME);

?>
