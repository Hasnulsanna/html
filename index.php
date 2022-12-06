<?php
require 'config.php';
if(!empty($_SESSION["Id"])){
    $id=$_SESSION["Id"];
    $_result=mysqli_query($conn,"SELECT * FROM th_user WHERE Id='$id'");
    $row=mysqli_fetch_assoc($_result);
}
else{
    header("Location:login.php");
}
?>



<html>
<title>index</title>
<head></head>
<body>
<h1>WELCOME <?php echo $row["Name"];?></h1>
<a href="logout.php">logout</a>
</body>
</html>

