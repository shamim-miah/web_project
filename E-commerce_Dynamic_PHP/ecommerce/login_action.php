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

$conn=mysqli_connect("$host","$username","$password","$db");
if($conn){
    echo"database is connected";
}else{
    echo"not connected";
}


//$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];



$sql="SELECT * FROM registration WHERE email='$email' and password='$password'";
$output=mysqli_query($conn,$sql);
$num_rows=mysqli_num_rows($output);

if($num_rows==1){
	//$row=mysqli_fetch_array($output,MYSQLI_ASSOC)

	header("location:index.php");

}else{
	echo'<div class="alert alert-info">password or email doesn\'t match<span class="again">Again:</span><a href="login.php"><span class="login_a btn btn-color again_btn">login</span></a></div>';

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