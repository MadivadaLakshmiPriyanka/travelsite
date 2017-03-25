<?php
$conn=new mysqli('localhost','root','');
mysqli_select_db($conn,"bank");
?>

<html>
<head>
<style type="text/css">
th{
font-size:24px;
color:pink;
}
input,textarea{
font-size:22px;
padding:5px;
border-radius:9px;
}
</style>
</head>
<body bgcolor="olive">
<form action="pinsert.php" method="post">
<font size="6" color="red">

<table width=640 border=5 bordercolor="black" align="center" bgcolor="green" cellpadding="12">
<tr>
<td>SELECT BANK</td>
<td>


<?php
$sql="SELECT bankname FROM bank";
$result = $conn->query($sql);
//echo "select bank";
echo "<select name='selectedbank'>";

while($row = $result->fetch_assoc())
{
  

  echo "<option value='".$row['bankname']."'>".$row['bankname']."</option>";


  
  //echo "name: " . $row["sourcename"]; 
}
echo '</select>';
?>

</td>
</tr>
<tr>
<td>
ENTER CARD NUMBER
</td>
<td>
<input type="text" name="name">
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="submit" name="submit">
<input type="reset" value="reset">
</td>
</tr>
</table>
</font>
</form>
</body>
</html>


