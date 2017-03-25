<html>
<head>
<title>update</title>
</head>
<body bgcolor="olive">
<font size="6" color="white">
<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

$sourcename=$_POST['sourcename'];
$destinationname=$_POST['destinationname'];


$con=mysqli_connect("localhost","root","","dropdown");
mysqli_select_db($con,"dropdown");
$res=mysqli_query($con,"UPDATE source SET sourcename='$sourcename'");
$res1=mysqli_query($con,"UPDATE source SET destinationname='$destinationname'");
var_dump($res);
var_dump($res1);
header("Location:mod.php");
?>
</font>
</body>
</html>