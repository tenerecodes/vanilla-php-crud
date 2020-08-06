<?php

include('config/connection.php');

$query = mysqli_query($conn, "SELECT * FROM users order by id desc");

//$result = mysqli_fetch_array($query, MYSQLI_NUM);

//var_dump($result);

?>
<table>
  <tr>
    <th>Name</th>
    <th>Country</th>
    <th>Admin</th>
  </tr>
  <?php while($result = mysqli_fetch_array($query, MYSQLI_NUM)){ ?>
  <tr>
    <td><a href="detail_user.php?id=<?php echo $result[0] ?>&def=5"> <?php echo $result[1] ?></a> </td>
    <td><?php echo $result[2] ?></td>
    <td><?php if($result[3] == 1) { echo "Yes"; } else { echo "No"; } ?></td>
  </tr>
  <?php }?>
</table>