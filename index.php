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
echo "Welcome";


$query = mysqli_query($conn, "SELECT * FROM users order by id desc");

$result = mysqli_fetch_array($query, MYSQLI_NUM);

var_dump($result);

?>
<table>
  <tr>
    <th>Name</th>
    <th>Country</th>
    <th>Admin</th>
  </tr>
  <tr>
    <td><?php echo $result[1] ?> </td>
    <td><?php echo $result[2] ?></td>
    <td><?php if($result[3] == 1) { echo "Yes"; } else { echo "No"; } ?></td>
  </tr>
</table>