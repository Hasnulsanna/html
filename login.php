<?php
require 'config.php';
if(isset($_POST["submit"])){
    $username_email=$_POST["usernameemail"];
    $password=$_POST["password"];
    $result=mysqli_query($conn,"SELECT * FROM th_user WHERE Usrname = '$username_email' OR Email = '$username_email'");
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($password==$row["Password"]){
            $_SESSION["login"]=true;
            $_SESSION["Id"]=$row["Id"];
            header("Location:index.php");

        }
        else{
            echo 
            "<script>alert('Wrong Password');</script>";
        }

    }
    else{
        echo "<script>alert('Please Register');</script>";
    }
}
?>
<html>
<head>
<title>Login</title></head>
<body>
    <form action="" method="post">
        <label for="usernameemail">Username Or Email Address:</label>
        <input type="text" name="usernameemail" id="usernameemail" required value=""><br>
        <label for="password" >Password:</label>
        <input type="password" name="password" id="password" required value=""><br>
        <button type="submit" name="submit">Login</button><br>
    </form>
    <a href="registartion.php">Register</a>
    
</body>
</html>

