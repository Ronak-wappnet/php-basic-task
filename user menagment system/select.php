<?php
$conn = mysqli_connect("localhost", "root","", "Registration");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT user, email, username,password FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "user --> ". $row["user"]. "    :  email --> " . $row["email"]. "   :  username -->" . $row["username"]. "   :  password -->" . $row["password"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<html>
  <body>
    <br><br>
    <a href="delete.php">delete user </a><br>
    <a href="update.php">update user </a><br>
    <a href="Registration.html">Registration page</a>
   
  </body>
</html>