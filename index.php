
<?php

$servername = "sql2.njit.edu";
$username = "pm487";
$database = "pm487";
$password = "kKmilXOt";

//  Create a new connection to the MySQL database using PDO
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
    echo "<br>";
} 
else
{
echo "Connected successfully <br>";
}
?>



