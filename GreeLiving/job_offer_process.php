<?php
// ensure that this page cannot be access directly
if(!(isset($_POST["job_title"])) && 
!(isset($_POST["business_name"])) && 
!(isset($_POST["job_contact_email"])) && 
!(isset($_POST["job_contact_phone"])) && 
!(isset($_POST["job_location"])) && !(isset($_POST["job_description"])))
{
    header 
    (
        "location:job_offer.html"
    );
}

$errorcounter = 0;
// sanitise function that remove space, backslashes, and HTML
function sanitise_input ($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
}

// get firstname from job application
if(isset($_POST["job_application_first_name"])) 
{
    $firstname = sanitise_input($_POST["job_application_first_name"]);
} 

// check if firstname is alphabetic
if (!preg_match('/^[a-zA-Z\s]+$/', $firstname) && strlen($firstname)!=0) 
{
    echo "<p>Your firstname cannot have number inside it.</p>";
    $errorcounter = $errorcounter +1;

}
?>