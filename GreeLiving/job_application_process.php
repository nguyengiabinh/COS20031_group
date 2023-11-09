<?php
// ensure that this page cannot be access directly
if(!(isset($_POST["job_application_first_name"])) && 
!(isset($_POST["job_application_last_name"])) && 
!(isset($_POST["job_application_email"])) && 
!(isset($_POST["job_application_phone"])) && 
!(isset($_POST["position"]))) 
{
    header 
    (
        "location:job_application.php"
    );
}

// Limit file size to 5 MB
ini_set('upload_max_filesize', '5M');
ini_set('post_max_size', '5M');
// error messages
$errMsg = "";
// save error into this array for later error demonstation in fix order
$errSpot=array();
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
    $errMsg .= "<p>Your firstname cannot have number inside it.</p>";
    array_push($errSpot,"firstname");
}

// get lastname from job application
if(isset($_POST["job_application_last_name"])) 
{
    $lastname = sanitise_input($_POST["job_application_last_name"]);
}

// check if lastname is alphabetic
if (!preg_match('/^[a-zA-Z\s]+$/', $lastname)  && strlen($lastname)!=0) 
{
    $errMsg .= "<p>Your lastname cannot have number inside it.</p>";
    array_push($errSpot,"lastname");
}

// get email from job application
if(strlen($_POST["job_application_email"])!=0) 
{
    $email = sanitise_input($_POST["job_application_email"]);
} 

// get phone number from job application
if(strlen($_POST["job_application_phone"])!=0) 
{
    $phoneNum = sanitise_input($_POST["job_application_phone"]);
}

// get desired position from job application
if(strlen($_POST["position"])!=0) 
{
    $position = sanitise_input($_POST["position"]);
}

// get desired salary from job application
if(strlen($_POST["salary_req"])!=0) 
{
    $salaryDesire = sanitise_input($_POST["salary_req"]);
}

// get start working statement from job application
if(strlen($_POST["start_working"])!=0) 
{
    $startWork = sanitise_input($_POST["start_working"]);
}

// get previous business name from job application
if(strlen($_POST["prev_company"])!=0) 
{
    $previousCompany = sanitise_input($_POST["prev_company"]);
}

// get the CV image or pdf from job application
// check if file upload exceed allow thresshold
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $allowedFileSize = 5 * 1024 * 1024; // 5 MB in bytes
    if ($_FILES["cv_photo"]["error"] == UPLOAD_ERR_INI_SIZE ) 
    {
        $errMsg .= "<p>Error: The uploaded file exceeds the allowed maximum file size of 5 MB.</p>";
        array_push($errSpot,"cv_photo");
    } 
    elseif ($_FILES["cv_photo"]["error"] == UPLOAD_ERR_OK) 
    {
    }

}

// get prefered contact from job application
if(strlen($_POST["prefer_contact"])!=0) 
{
    $preferContact = $_POST["prefer_contact"];
}

// get comment from job application
if(strlen($_POST["questions"])!=0) 
{
    $comment = sanitise_input($_POST["questions"]);
} 
?>