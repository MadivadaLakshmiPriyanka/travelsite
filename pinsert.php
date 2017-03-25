<html>
<body>
<?php
//connection creation
$conn=new mysqli('localhost','root','');
if($conn->connect_error){
die("connection failed:" . $conn->connect_error);
}

echo "DB Connected successfully";
mysqli_select_db($conn,"bank");
echo "DB is selected as sample successfully" . "<br>" . PHP_EOL;
echo $_POST['uname'] . "<br>" . PHP_EOL;
session_start();
/*$_SESSION["loggedinuser"]=$_POST['uname'];
$username= $_POST['uname'];
$password=$_POST['upass'];
echo $_POST['upass'] . "<br>" . PHP_EOL;
$sql = "DELETE FROM sample_table WHERE uname='$username'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$sql="INSERT INTO `sample_table` (`uname`,`upass`) VALUES('$_POST[uname]','$_POST[upass]')";
if($conn->query($sql)===TRUE){
echo "New record created successfully";
}
else
{
echo "Error" . $sql . "<br>" . $conn->error;
}*/
$sql = "SELECT bankname FROM bank ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "bname: " . $row["bankname"] ;
    }
} else {
    echo "0 results";
}


mysqli_close($conn);
?>
<form action="auth.php" method="post">
Username<input type="text" placeholder="Enter username" autofocus required name="uname">
Password:<input type="password" placeholder="Enter password" required name="upass">
Submit:<input type="submit" value="LOGIN" name="LOGIN">
Reset:<input type="reset" value="clr">
</form>

</body>
</html>