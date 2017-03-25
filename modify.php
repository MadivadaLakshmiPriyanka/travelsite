<?php
$conn=new mysqli('localhost','root','');
mysqli_select_db($conn,"dropdown");
?>
<html>
<body>
<table width=640 border=5 bordercolor="black" align="center" bgcolor="green" cellpadding="12">
<tr>
<!--<td>SOURCE</td>-->
<td>
<?php
//$sql="SELECT sourcename FROM `source`";
$sql="SELECT sourcename FROM source WHERE sourcename <> 'NULL'";
$result = $conn->query($sql);
echo "select source";
echo "<select name='selectedsource'>";

while($row = $result->fetch_assoc())
{
  //echo "source: " . $row["sourcename"]. "<br>";

  echo "<option value='".$row['sourcename']."'>".$row['sourcename']."</option>";


  
  //echo "name: " . $row["sourcename"]; 
}
echo '</select>';
?>
<!--<input type="button" value="add">
<input type="button" value="delete">-->
<?php
echo "<th>

<a href=add.php>Add</a>
<a href=delete.php>Delete</a>

 </th>";
?>

</td>
</tr>

<tr>
<!--<td>DESTINATION</td>-->
<td>
<?php
$sql="SELECT destinationname FROM source WHERE destinationname <> 'NULL'";
$result = $conn->query($sql);
echo "select destiny";
echo "<select name='selecteddestination'>";

while($row = $result->fetch_assoc())
{
  

  echo "<option value='".$row['destinationname']."'>".$row['destinationname']."</option>";


  
  //echo "name: " . $row["sourcename"]; 
}
echo '</select>';
?>
<!--<input type="button" value="add">
<input type="button" value="delete">-->
<?php
echo "<th>

<a href=add.php>Add</a>
<a href=delete.php>Delete</a>

 </th>";
?>

</td>
</tr>
</table>
</body>
</html>