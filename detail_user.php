<?php

include('config/connection.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");

$result = mysqli_fetch_array($query, MYSQLI_NUM);

//var_dump($result);

?>
<table>
  <tr>
    <th>Name</th>
    <th>Country</th>
    <th>Admin</th>
  </tr>
  
  <tr>
    <td> <?php echo $result[1] ?></td>
    <td><?php echo $result[2] ?></td>
    <td><?php if($result[3] == 1) { echo "Yes"; } else { echo "No"; } ?></td>
  </tr>
 
</table>