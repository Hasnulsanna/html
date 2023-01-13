<?php
session_start();
$conn=mysqli_connect("localhost","root","cetmca","login");
if($conn){
echo "connected"; 
}
?>


