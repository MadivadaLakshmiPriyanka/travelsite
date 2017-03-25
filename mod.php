<html>
<head>
<title>retreive</title>
<style type="text/css">
h1{
color:yellow;
text-align:center;
}
th{
font-size:24px;
color:white;
}
a{
color:white;
}
</style>
</head>
<body bgcolor="olive">

<h1>CITIES</h1>

<hr color="yellow" size="5" width="35%">



<?php
echo "<table width=640 border=5 bordercolor=white bgcolor=green align=center cellpadding=12>";
echo "<tr>";
echo "<th>source</th>";
echo "<th>destination</th>";

echo "</tr>";

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"dropdown");

$res=mysqli_query($con,"SELECT sourcename FROM `source`");

echo "<th>

<a href=add.php>Add</a>
<a href=delete.php>Delete</a>

 </th>";
 echo "<th>

<a href=add.php>Add</a>
<a href=delete.php>Delete</a>

 </th>";

while($row=mysqli_fetch_assoc($res))
{
//echo "<pre>";
//print_r($data);
//echo "</pre>";

echo "<tr>";
echo "<th>".$row['sourcename']."</th>";

echo "<th>".$row['destinationname']."</th>";


echo "</tr>";
}

echo "</table>";
?>
</body>
</html>