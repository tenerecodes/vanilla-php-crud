<?php

include('config/connection.php');
$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");

$result = mysqli_fetch_array($query, MYSQLI_NUM);

// $id = $_GET['id'];
?>

<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $result[0] ?>">
  <label for="fname">Name: </label><br>
  <input type="text" name="fname" value="<?php echo $result[1] ?>"><br>
  <label for="lcountry">Country: </label><br>
  <input type="text" name="lcountry" value="<?php echo $result[2] ?>"><br><br>
  <input type="submit"  name="send" value="Submit">
</form> 

<?php
if(isset($_POST['send'])){

$id=$_POST['id'];
$name=$_POST['fname'];
$country=$_POST['lcountry'];

mysqli_query($conn, "UPDATE users SET name = '$name', country = '$country' WHERE id = $id;");

header("Location:/Vanilla/detail_user.php?id=$id");
}

?>