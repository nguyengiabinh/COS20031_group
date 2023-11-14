<!DOCTYPE html>
<html>
<body>

<?php
session_start();

// initializing variables   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "s104191076_db";
$errors = array(); 
$_SESSION['success'] = "";

// connect to the database
$conn = mysqli_connect("localhost", "root", "", "s104191076_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT business_id, business_name, business_email, business_phone_number, business_email FROM s104191076_db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ($row = $result->fetch_assoc()); {
        echo "<br> business id: ". $row["business_id"]. 
        echo "<br> business name: ". $row["business_name"] . 
        echo "<br> business email: " $row["business_email"] .
        echo "<br> business phone number:". $row["business_phone_number"].
        echo "<br> business description:". $row["business_description"].
    }
    } else {
        echo "0 results";
    }


$conn->close();   
        ?> 



</body>
</html>