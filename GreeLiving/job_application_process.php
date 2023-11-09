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
    $uploadfile = $_FILES["cv_photo"]["name"];
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

//Get current date 
$currentDate = date("d-m-Y");

// Get the auto-incremented ID and put 'JA' before it
$applicationID = 'JA' . mysqli_insert_id($conn);

//Set status for the application status
$appStatus = "Pending";

// redirect to proper page after checking 
if ($errMsg!="" ) 
{
    // if there is error in the application input
    header ("location:fix_order.php");
} 
else 
{
    require_once ("settings.php");
        
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
}

if (!$conn) 
{
    echo "<p>Database connection failure</p>";
}
else 
{
    $errors = [];
    $table1 ="CREATE TABLE IF NOT EXISTS job_application 
    (
        `application_id` int(11) NOT NULL AUTO_INCREMENT,
        `user_id` int(11) NOT NULL,
        `job_id` int(11) NOT NULL,
        `education_id` int(11) NOT NULL,
        `job_application_date` date DEFAULT NULL,
        `job_application_status` varchar(255) DEFAULT NULL,
        `job_application_first_name` varchar(255) NOT NULL,
        `job_application_last_name` varchar(255) NOT NULL,
        `job_application_email` varchar(255) NOT NULL,
        `job_application_phone` varchar(255) NOT NULL,
        `position` varchar(255) NOT NULL,
        `salary_req` varchar(255) DEFAULT NULL,
        `start_working` varchar(255) DEFAULT NULL,
        `prev_company` varchar(255) DEFAULT NULL,
        `cv_photo` varbinary(5000) DEFAULT NULL,
        `prefer_contact` varchar(25) DEFAULT NULL,
        `questions` TEXT DEFAULT NULL,
        PRIMARY KEY  (application_id),
        FOREIGN KEY (`user_id`) REFERENCES user_profile(user_id),
        FOREIGN KEY (`job_id`) REFERENCES job_offer(job_id),
        FOREIGN KEY (`education_id`) REFERENCES education(education_id)
    );";

    $add = "";

}
?>