<?php 
 
// Starting the session, necessary

// for using session variables
session_start();

$servername = "localhost";
$username = "username";
$password = "";
$businessname = "business_name";
$businessid = "business_id";
$dbname = "myDB";
$errors = array(); 















// Registration code
if (isset($_POST['reg_user'])) {
  
    $businessname = mysqli_real_escape_string($conn, $_POST['business_name']);
    $businesid = mysqli_real_escape_string($conn, $_POST['business_id']);

    if (empty($businessname)) { array_push($errors, "business name is required"); }
    if (empty($businesid)) { array_push($errors, "business id is required"); }
    // If the form is error free, then register the user
    if (count($errors) == 0) {
                  
        // Inserting data into table
        $query = "INSERT INTO users (business_name, business_id) 
                  VALUES('$businessname', '$businessid')"; 
         
        mysqli_query($conn, $query);
  
        // Storing username of the logged in user,
        // in the session variable
        $_SESSION['business_name'] = $businessname;
         
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
    $businessname = mysqli_real_escape_string($conn, $_POST['business_name']);
  
    // Error message if the input field is left blank
    if (empty($businessname)) {
        array_push($errors, "business name is required");
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