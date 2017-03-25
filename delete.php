<html>
<head>
<title>delete</title>
</head>
<body bgcolor="olive">
<font size="6" color="white">
<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

//$empno=$_GET['empno'];

$con=mysqli_connect("localhost","root","","dropdown");
mysqli_select_db($con,"dropdown");
$res=mysqli_query($con,"UPDATE source SET sourcename='NULL' WHERE sourcename='VIZAG' ");


var_dump($res);
header("Location:modify.php");
?>
</font>
</body>
</html>