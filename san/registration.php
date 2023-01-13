<?php
require'connect.php';
if(isset($_POST["submit"])){
$name=$_POST["name"];
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirm=$_POST["confirm"];
$duplicate=mysqli_query($conn,"SELECT * FROM san_tb WHERE (Username='$username' OR Email='$email'");
if(mysqli_num_rows($duplicate)> 0){
	echo "<script>alert('The usser already registered');</script>";
}
else{
	if($password==$confirm){
	$result=mysqli_query($conn,"INSERT INTO san_tb(Name,Username,Email,Password)VALUES('$name','$username','$email','$password')");
	echo "<script>alert('Registration successfull');</script>;"
}
	else{
	echo "<script>alert('Password doesnt match');</script>;"
}
}
}
?>























<html>
<head>
<title>Registration form</title>
</head>
<body>
<h1>Registration</h1>
<form action="" method="post">
<lable for="Name">Name:</label>
<input type="text" name="name" id="name" required value=""><br>
<lable for="Email">Username:</label>
<input type="text" name="username" id="username" required value=""><br>
<lable for="Email">Email:</label>
<input type="text" name="email" id="email" required value=""><br>
<lable for="password">Password:</label>
<input type="password" name="password" id="password" required value=""><br>
<lable for="confirm">Confirm Password:</label>
<input type="password" name="confirm" id="confirm" required value=""><br>
<button type="submit" name="submit">Register</button>
</form>
<br><a href="login.php">Login</a>
</body>
</html>
