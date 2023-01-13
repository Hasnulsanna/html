<?php
session_start();
$conn=mysqli_connect('localhost','root','cetmca','san');
if($conn){
echo "connect";
}
?>
