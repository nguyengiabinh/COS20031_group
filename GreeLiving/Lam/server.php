<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$errors = array(); 

$conn = mysqli_connect("localhost", "root", "", "s104191076_db");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
    . mysqli_connect_error());
}
 $sql = "CREATE DATABASE s104191076_db";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();
  
// Registration code
if (isset($_POST['reg_user'])) {
  
    $businesid = mysqli_real_escape_string($conn, $_POST['business_id']);
    $businessname = mysqli_real_escape_string($conn, $_POST['business_name']);


    if (empty($businesid)) { array_push($errors, "business id is required"); }
    if (empty($businessname)) { array_push($errors, "business name is required"); }

    // If the form is error free, then register the user
    if (count($errors) == 0) {
                  
        // Inserting data into table
        $query = "INSERT INTO users (business_id, business_name) 
                  VALUES('$businessid', '$businessname')"; 
         
        mysqli_query($conn, $query);
  
        // Storing username of the logged in user,
        // in the session variable
        $_SESSION['business_id'] = $businessid;
         
        // Welcome message
        $_SESSION['success'] = "You have logged in";
         
        // Page on which the user will be 
        // redirected after logging in
        header('location: index.php'); 
    }
}
  
// User login
if (isset($_POST['login_user'])) {
     
    // Data sanitization to prevent SQL injection
    $businessid = mysqli_real_escape_string($conn, $_POST['business_id']);
  
    // Error message if the input field is left blank
    if (empty($businessid)) {
        array_push($errors, "business id is required");
    }
}
  
if (count($errors) == 0) {
         
    $query = "SELECT * FROM business_profile WHERE businessid=
            '$businessid' AND businessname='$businessname'";
    $results = mysqli_query($conn, $query);
}
  
    if (mysqli_num_rows($results) == 1 )
    {
             
            // Storing username in session variable
            $_SESSION['business_name'] = $businessname;
             
            // Welcome message
            $_SESSION['success'] = "You have logged in!";
             
            // Page on which the user is sent
            // to after logging in
            header('location: index.php');
        
    }
  
?>