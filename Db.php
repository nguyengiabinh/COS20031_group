<?php

//create temporary file to store database password
$tempFile = tempnam("/tmp", "DB_PASS");

//store the password into the temporary file
file_put_contents($tempFile, "your_database_password");

//access the temporary file and read the database password
$password = file_get_contents($tempFile);

//create connection to database
$conn = new mysqli("localhost", "your_username", $password, "your_database_name");

//check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// create a temporary php file to store all user and business profiles
$tempFile2 = tempnam("/tmp", "user_business_profiles");

// retrieve all user profiles from the database
$userProfilesQuery = "SELECT user_id, first_name, last_name, date_of_birth, user_email, user_phone_number, user_address FROM user_profile";
$userProfilesResult = $conn->query($userProfilesQuery);

// retrieve all business profiles from the database
$businessProfilesQuery = "SELECT business_id, business_name, business_email, business_phone_number, business_description FROM business_profile";
$businessProfilesResult = $conn->query($businessProfilesQuery);

//write all user profiles into the temporary file
while ($row = $userProfilesResult->fetch_assoc()) {
    $data = implode(',', $row);
    file_put_contents($tempFile2, $data . PHP_EOL, FILE_APPEND);
}

//write all business profiles into the temporary file
while ($row = $businessProfilesResult->fetch_assoc()) {
    $data = implode(',', $row);
    file_put_contents($tempFile2, $data . PHP_EOL, FILE_APPEND);
}

// close the database connection
$conn->close();

?>