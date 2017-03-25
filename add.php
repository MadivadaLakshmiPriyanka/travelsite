<html>
<head>
<title>add</title>
</head>
<body bgcolor="olive">
<font size="6" color="white">
<?php

//echo "<pre>";
//print_r($_GET);
//echo "</pre>";

//$sourcename=$_GET['sourcename'];

$con=mysqli_connect("localhost","root","","dropdown");
mysqli_select_db($con,"dropdown");
$res=mysqli_query($con,"SELECT sourcename FROM `source`");
$ress=mysqli_query($con,"SELECT destinationname FROM 'source'");

$row=mysqli_fetch_assoc($res);
$row=mysqli_fetch_assoc($ress);

$sourcename=$row['sourcename'];
$destinationname=$row['destinationname'];

?>

<form method="post" action="update.php">
<table width="640" border="5" bordercolor="white" align="center" bgcolor="green" cellpadding="12">
<tr>
<td>SOURCENAME</td>
<td>
<input type="text" placeholder="Enter sourcename" autofocus required name="sourcename" value="<?php if(isset($sourcename))  echo "$sourcename";  ?>">
</td>
</tr>
<tr>
<td>DESTINATIONNAME</td>
<td>
<input type="text" placeholder="Enter destinationname" autofocus required name="destinationname" value="<?php if(isset($destinationname))  echo "$destinationname";  ?>">
</td>
</tr>
<tr>
<td colspan=2>
<input type="submit" value="submit" name="submit">
<input type="reset" value="clr">
</td>
</tr>
</table>
</form>
</font>
</body>
</html>