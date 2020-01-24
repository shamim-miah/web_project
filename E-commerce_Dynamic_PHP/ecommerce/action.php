
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap4.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Web technology & programming project (Trojan Horses)</title>
</head>

<body>

<?php

$host="localhost";
$username="root";
$password="";
$db="ecommerce";

$conn=mysqli_connect("$host","$username","$password","$db")or die("not connected");



$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM registration WHERE email='$email' and password='$password'";
$output=mysqli_query($conn,$sql);

$check=mysqli_num_rows($output);

if($check==1){
	echo '<div class="alert alert-warning">Already register here<a href="login.php"><span class="login_a btn btn-color">login</span></a></div>';

}else{
	$sql="INSERT INTO registration(username,email,password) VALUES('$username','$email','$password')";

    mysqli_query($conn,$sql);
    echo '<div class="alert alert-success">Registration Successful<a href="login.php"><span class="login_a btn btn-color">login</span></a></div>';

}


?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
		integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous">
	</script>
</body>
