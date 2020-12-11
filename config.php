<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "my_db";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
mysqli_select_db($conn,$dbname);
# End of Database Connection
?>
