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

echo "Loggedin user is:" . $_SESSION["loggedinuser"];



$sql = "SELECT * FROM `reservations` WHERE name='$_SESSION[loggedinuser]'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "date: " . $row["date"]. " - source: " . $row["source"]. " -destination" . $row["destination"]. "bank: " . $row["bankname"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>







</body>
</html>