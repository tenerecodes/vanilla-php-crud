<?php 

// error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";
$username = "root";
$password = "";
$db = "vanilla";

$conn = mysqli_connect($servername, $username, $password, $db);



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Database Connection loaded successfuly";

?>