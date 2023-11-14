<!DOCTYPE html>
<html>
<body>

<?php
session_start();

// initializing variables   
$servername = "localhost";
$username = "username";
$password = "";
$businessname = "business_name";
$businessid = "business_id";
$dbname = "myDB";
$errors = array(); 
$_SESSION['success'] = "";

// connect to the database
$conn = mysqli_connect("localhost", "username", "", "myDB");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, first_name, last_name, address, email FROM Db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()); {
        echo "<br> business id: ". $row["business_id"]. " - business name: ". $row["business_name"] . " - business email: " $row["business_email"] . "<br>";
        echo "business phone number:". $row["business_phone_number"]. "-business description:". $row["business_description"].
    }
    } else {
        echo "0 results";
    }


$conn->close();   
        ?> 



</body>
</html>