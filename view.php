<?php


$servername = "localhost";
$username = "kintautas";
$password = "kintautas";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



$sql = "SELECT id, firstName, lastName, email, phone, fileLink FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. ",First name: " . $row["firstName"]. ", Last name: " 
        . $row["lastName"].", E-mail: ".$row["email"].", Phone: ".$row["phone"].", File link: <a href='".$row["fileLink"]."'>File</a>"."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>