<?php

include('config/connection.php');

$get_users = mysqli_query($conn, "SELECT * FROM users order by id desc");

// Delete a user by id


  

//$result = mysqli_fetch_array($query, MYSQLI_NUM);

// var_dump($get_users);

?>
<table>
  <tr>
    <th>Name</th>
    <th>Country</th>
    <th>Admin</th>
    <th>Edit</th>
  </tr>
  <?php while($result = mysqli_fetch_array($get_users, MYSQLI_NUM)){ ?>
  <tr>
    <td><a href="detail_user.php?id=<?php echo $result[0] ?>&def=5"> <?php echo $result[1] ?></a> </td>
    <td><?php echo $result[2] ?></td>
    <td><?php if($result[3] == 1) { echo "Yes"; } else { echo "No"; } ?></td>
    <td><a href="delete.php?id=<?php echo $result[0] ?>"><button style="background-color:red" type="button">Delete</button></a></td>
  </tr>
  <?php }?>
</table>