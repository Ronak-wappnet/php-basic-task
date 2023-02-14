<?php
    echo "<h4>Delete user</h4>";
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $con = mysqli_connect("localhost","root","","Registration");
        if(!$con){
            die("connection error.".mysqli_connect_error());
        }        
        $sql ="DELETE FROM users WHERE username='$username'";

        if (mysqli_query($con, $sql)) 
        {  
            echo "Record deleted successfully";
        }
         else{
             echo "Error deleting record: ". mysqli_error($conn);
            }
    }    
?>
<html>
    <body>
        
        <form method="post">
            Enter username : <br>
            <input type="text" name="username"><br>
            <input type="submit" name="submit">
        </form>
        <a href="select.php">view users</a><br>
        <a href="Registration.html">Registration page</a>
    </body>
</html>