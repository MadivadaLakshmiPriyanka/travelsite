<?php
//session_start();
$username=$_POST['uname'];
$password=$_POST['upass'];
$dbusername=$data['username'];
$dbpassword=$data['password'];
if($username==$dbusername && $password==$dbpassword)
{
echo "Yes u logged in successfully";

$_SESSION['username']=$dbusername;
$_SESSION['password']=$dbpassword;

header("Location:admin.php");
}

/*if($username&&$password)
{
	$_SESSION['name'];
	$_SESSION['pass'];
	header("location:reservation.php");
}*/
else 
echo "Wrong.Try Again";
?>