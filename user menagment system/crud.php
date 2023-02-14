<?php
$name = $_POST['Name'];
$email = $_POST['email'];
$user_name = $_POST['Username'];
$password = $_POST['password'];

$con = mysqli_connect("localhost","root","","Registration");
if(!$con){
    die("connection error.".mysqli_connect_error());
}
$querry="INSERT into users values('$name','$email','$user_name','$password')";
if(mysqli_query($con,$querry))
{
    echo "<br><br>Registration succesfull";
}
else
{
    echo "<br><br>Registration problem";
}

?>
<html>
    <body><br><br><br><br>
        <br><a href="Registration.html">Registration Page</a><br>
        <a href="login.php">Login page</a><br>
        <a href="select.php">view users</a>
    </body>
</html>