<html>
<body>
<?php
session_start();
$_SESSION["loggedinuser"]=$_POST['uname'];
//connection creation
$conn=new mysqli('localhost','root','');
if($conn->connect_error){
die("connection failed:" . $conn->connect_error);
}

echo "DB Connected successfully";
mysqli_select_db($conn,"sample");
echo "DB is selected as sample successfully" . "<br>" . PHP_EOL;
echo $_POST['uname'] . "<br>" . PHP_EOL;
echo $_POST['upass'] . "<br>" . PHP_EOL;
$authuname= $_POST['uname'];
$authupass=$_POST['upass'];

$sql = "SELECT uname,upass FROM sample_table WHERE uname='$authuname' AND upass='$authupass'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "authentication successful";

} else {
    echo "authentication failed";
}
mysqli_close($conn);

include("reservation.php");
?>
<a href="modify.php">MODIFY</a>
</body>
</html>