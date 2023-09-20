<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "phptut";

// Creating Database Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die ("Failed to Connect".mysqli_connect_error());
}
else {
    echo "Connection Successfull <br>";
}
$sql = "INSERT INTO `users` (`S.NO`, `Name`, `Age`, `Salary`) VALUES ('50', 'Rohit', '50', '4000')";
if (mysqli_query($conn, $sql))
{
    echo "Success";
}
else {
    echo "error". mysqli_error($conn);
}
mysqli_close($conn);
?>