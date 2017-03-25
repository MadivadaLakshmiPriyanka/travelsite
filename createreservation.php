<html>
<body>
<?php
session_start();

//connection creation
$conn=new mysqli('localhost','root','');
if($conn->connect_error){
die("connection failed:" . $conn->connect_error);
}

echo "DB Connected successfully";
mysqli_select_db($conn,"sample");
echo "DB is selected as sample successfully" . "<br>" . PHP_EOL;
echo "Loggedin user is:" . $_SESSION["loggedinuser"]. "<br>" . PHP_EOL;


echo "selected date is :" . $_POST['datepicker'] ;
echo "selected source is :" . $_POST['selectedsource'] ;
echo "selected destination is :" . $_POST['selecteddestination'] ;
echo "selected bank is :" . $_POST['selectedbank'] ;

$sql="INSERT INTO `reservations` (`name`,`date`,`source`,`destination`,`bankname`) VALUES('$_SESSION[loggedinuser]','$_POST[datepicker]','$_POST[selectedsource]','$_POST[selecteddestination]','$_POST[selectedbank]')";
if($conn->query($sql)===TRUE){
echo "New record created successfully";
}
else
{
echo "Error" . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>


</body>
</html>