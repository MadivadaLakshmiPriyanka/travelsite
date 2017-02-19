<?php
$conn=new mysqli('localhost','root','');
mysqli_select_db($conn,"dropdown");
?>

<html lang="en">
<!--<html>-->
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
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body bgcolor="olive">
<form action="createreservation.php" method="post">
<font size="6" color="red">

<table width=640 border=5 bordercolor="black" align="center" bgcolor="green" cellpadding="12">
<tr>
<<td>SOURCE</td>
<td>
<!--<input type="text" placeholder="enter city" required name="source">
<input list="browsers" placeholder="select source city" required name="source">


  <datalist id="browsers">
    <option value="Internet Explorer">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist> 

-->
<!--<input type="text" placeholder="select source city" required name="source">
-->

<?php
$sql="SELECT sourcename FROM `source`";
$result = $conn->query($sql);
echo "select source";
echo "<select name='selectedsource'>";

while($row = $result->fetch_assoc())
{
  

  echo "<option value='".$row['sourcename']."'>".$row['sourcename']."</option>";


  
  //echo "name: " . $row["sourcename"]; 
}
echo '</select>';
?>

</td>
</tr>
<tr>
<td>DESTINATION</td>
<td>
<!--
<input type="text" placeholder="enter city" required name="destination">
-->
<!--<input type="text" placeholder="select destination city" required name="destination">-->


<?php
$sql="SELECT sourcename FROM `source`";
$result = $conn->query($sql);
echo "select destiny";
echo "<select name='selecteddestination'>";

while($row = $result->fetch_assoc())
{
  

  echo "<option value='".$row['sourcename']."'>".$row['sourcename']."</option>";


  
  //echo "name: " . $row["sourcename"]; 
}
echo '</select>';
?>


</td>
</tr>
<p>Date: <input type="text" id="datepicker"></p>
<tr>
<td colspan="2">
<input type="submit" value="submit" name="submit">
<input type="reset" value="reset">
</td>
</tr>
</table>
</font>
</form>
<b>CONTACT US:09876543210</b><br>
<a href="Mail ID:">travelservices@gmail.com</a>

<form name="form1" action="" method="post">
<select>

<?php

$sql=mysqli_query($conn,"SELECT * FROM `table` ");
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
	

?>

<option>
<?php
echo "name: " . $row["name"]; 
?>
</option>

<?php


}
?>
<option></option>
</select>
</form>



</body>
</html>


