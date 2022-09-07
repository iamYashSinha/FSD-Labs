
<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "loginsystem";



// Connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check if connection is
// Successful or not
if (mysqli_connect_error()) {
    echo "Failed to Connect!";
    exit();
}
echo "Connected successfully";

?>