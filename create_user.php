<?php

include('config/connection.php');

?>

<h2>Create a new User</h2>
<form action="" method="post">
  <label for="fname" >Name: </label><br>
  <input type="text" name="fname" placeholder="Enter name.." value=""><br>
  <label for="lcountry">Country: </label><br>
  <input type="text" name="lcountry" placeholder="Enter Country.." value=""><br><br>
  <label for="ladmin">Admin access: </label><br>
  <select name="ladmin">
  
  <option value="1">Yes</option>
  <option value="0" selected>No</option>
  </select>
  

  <input type="submit"  name="send" value="Submit">
</form> 

<?php
if(isset($_POST['send'])){

$isadmin=$_POST['ladmin'];
$name=$_POST['fname'];
$country=$_POST['lcountry'];

mysqli_query($conn, "INSERT INTO users VALUES (NULL, '$name', '$country', $isadmin)");
header("Location:/Vanilla");
}

?>