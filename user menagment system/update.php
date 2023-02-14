<?php
    echo "<h4>Update Users</h4>";
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $user_name = $_POST['Username'];
    $password = $_POST['password'];

    if(isset($_POST['Submit']))
    {
        $con = mysqli_connect("localhost","root","","Registration");
        if(!$con){
            die("connection error.".mysqli_connect_error());
        }   
             
        $sql ="UPDATE users SET user='$name',email='$email',password='$password' WHERE username='$user_name'";

        if (mysqli_query($con, $sql)) 
        {  
            echo "Record updated successfully";
        }
         else{
             echo "Error deleting record: ". mysqli_error($conn);
            }
    }    
?>
<html>
    <body>        
    <form action="" method="post">
            <label>Name</label><br>
            <input type="text" name="Name"><br>
            <label>email id </label><br>
            <input type="email" name="email"><br>
            <label>User_name </label><br>
            <input type="text" name="Username"><br>
            <label>Password</label><br>
            <input type="password" name="password"><br>
            <input type="submit" name="Submit"> 
        </form>
        <a href="select.php">view users</a><br>
        <a href="Registration.html">Registration page</a>
    </body>
</html>