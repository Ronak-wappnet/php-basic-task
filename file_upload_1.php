<?php
    if(isset($_FILES['image'])){
        
        echo"<pre>";
        print_r($_FILES);
        echo"</pre>";
        $file_name=$_FILES['image']['name'];
        $file_size=$_FILES['image']['size'];
        $file_temp=$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];

        move_uploaded_file($file_temp,"/var/www/html/php-working/image/".$file_name);
    }
?>
<html>  
        <body>
            <form action="" method="POST"  enctype="multipart/form-data">
                    <label>choose file</label> 
                    <input type="file" name="image"/><br><br>
                    <input type="submit"/>
            </form>   
</body>
</html>