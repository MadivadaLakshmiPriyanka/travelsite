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
  <script src="https://code.jquery.com/ui/1.12.1/jquery -ui.js"></script>
  <script>
  $(function() 
 { 
 $( "#datepicker" ).datepicker({
 changeMonth:true,
 changeYear:true,
 yearRange:"-100:+0",
 dateFormat:"yy-mm-dd"
 //format: 'yyyy-mm-dd'
 });
 });
  /*$( function() {
    $( "#datepicker" ).datepicker();
  
    dateFormat:'yy-mm-dd'
  } );*/
  </script>
</head>
<body bgcolor="olive">
<form action="createreservation.php" method="post">
<font size="6" color="red">

<table width=640 border=5 bordercolor="black" align="center" bgcolor="green" cellpadding="12">
<tr>
<td>SOURCE</td>
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
$sql="SELECT sourcename FROM source WHERE sourcename <> 'NULL'";
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
$sql="SELECT destinationname FROM source WHERE destinationname <> 'NULL'";
$result = $conn->query($sql);
echo "select destiny";
echo "<select name='selecteddestination'>";

while($row = $result->fetch_assoc())
{
  
  echo "<option value='".$row['destinationname']."'>".$row['destinationname']."</option>";
  //echo "<option value='".$row['sourcename']."'>".$row['sourcename']."</option>";


  
  //echo "name: " . $row["sourcename"]; 
}
echo '</select>';
?>
</td>
</tr>
<input type="text" id="datepicker" name="datepicker" value="Date"/>
<!--<p>Date: <input type="text" id="datepicker"></p>-->

<tr>
<td>SELECT BANK</td>
<td>


<?php
$sql="SELECT bankname FROM source WHERE bankname <> 'NULL'";
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
<b>CONTACT US:09876543210</b><br>
<a href="Mail ID:">travelservices@gmail.com</a><br>

</body>
</html>


