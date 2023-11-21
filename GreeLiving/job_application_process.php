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
        "location:job_application.html"
    );
}

// Limit file size to 5 MB
ini_set('upload_max_filesize', '5M');
ini_set('post_max_size', '10M');
// error counter
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

// get lastname from job application
if(isset($_POST["job_application_last_name"])) 
{
    $lastname = sanitise_input($_POST["job_application_last_name"]);
}

// check if lastname is alphabetic
if (!preg_match('/^[a-zA-Z\s]+$/', $lastname)  && strlen($lastname)!=0) 
{
    echo "<p>Your lastname cannot have number inside it.</p>";
    $errorcounter = $errorcounter +1;

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
if ($_FILES["cv"]["error"] !== UPLOAD_ERR_OK) {
    switch ($_FILES["cv"]["error"]) {
        case UPLOAD_ERR_PARTIAL:
            exit('File only partially uploaded');
            break; 
        case UPLOAD_ERR_NO_FILE:
            exit('upload a CV or a resume yourself pls');
            break;
        case UPLOAD_ERR_EXTENSION:
            exit('File upload stopped by a PHP extension');
            break;
        case UPLOAD_ERR_FORM_SIZE:
            exit('File exceeds MAX_FILE_SIZE in the HTML form');
            break;
        case UPLOAD_ERR_INI_SIZE:
            exit('File exceeds upload_max_filesize in php.ini');
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            exit('Temporary folder not found');
            break;
        case UPLOAD_ERR_CANT_WRITE:
            exit('Failed to write file');
            break;
        default:
            exit('I dont know what the error is');
            break;
    }
}

if ($_FILES["cv"]["size"] > 5242880) {
    echo "<p>Uploaded CV exceed size limit which is 5MB</p>";

}

// Use fileinfo to get the mime type
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime_type = $finfo->file($_FILES["cv"]["tmp_name"]);

$mime_types = ["application/pdf", "image/png", "image/jpeg"];
        
if ( ! in_array($_FILES["cv"]["type"], $mime_types)) {
    exit("Invalid file type");
}

// Replace any characters not \w- in the original filename
$pathinfo = pathinfo($_FILES["cv"]["name"]);

$base = $pathinfo["filename"];

$base = preg_replace("/[^\w-]/", "_", $base);

$filename = $base . "." . $pathinfo["extension"];
$destination = __DIR__ . "/uploads/" . $filename;

if ( ! move_uploaded_file($_FILES["cv"]["tmp_name"], $destination)) {

    exit("Can't move uploaded file");

}
print_r($_FILES);

// get prefered contact from job application
if(strlen($_POST["prefer_contact"])!=0) 
{
    $preferContact = $_POST["prefer_contact"];
}

// get comment from job application
if(strlen($_POST["questions"])!=0) 
{
    $questions = sanitise_input($_POST["questions"]);
} 

//  TESTING PURPOSES ONLY AND WILL DELETE WHEN OTHER FUNCTION WORK
$userID = "859";
$jobID = "741";

//Get current date 
$applicationDate = date("Y-m-d");

//Set status for the application status
$appStatus = "Pending";

// Get the auto-incremented ID and put 'JA' in ASCII before it
// $autoincrementedID = mysqli_insert_id($conn);
// $applicationID = '7465' . $autoincrementedID;
// $applicationID = mysqli_insert_id($conn);

// connect to the database
if ($errorcounter !== 0) {
    echo "<p>Fix all error to submit.</p>";
} else {
    require_once ("settings.php");
        
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

}  
if (!$conn) 
{
    echo "<p>Database connection failure</p>";
}
else 
{

    // $applicationID = mysqli_insert_id($conn);

    $sql = 
    "
    INSERT INTO job_application (user_id, job_id, job_application_date, job_application_status, job_application_first_name, job_application_last_name, job_application_email, job_application_phone, position, salary_req, start_working, prev_company, cv_photo, prefer_contact, questions )
    SELECT * FROM (SELECT '$userID', '$jobID','$applicationDate','$appStatus','$firstname','$lastname','$email','$phoneNum','$position','$salaryDesire','$startWork','$previousCompany','$filename','$preferContact','$questions' ) as tmp
    WHERE NOT EXISTS (SELECT * FROM job_application  WHERE user_id = '$userID' and job_id = '$jobID' and job_application_date = '$applicationDate' and job_application_status = '$appStatus' and job_application_first_name = '$firstname' and job_application_last_name = '$lastname' and job_application_email = '$email' and job_application_phone = '$phoneNum' and position = '$position' and salary_req = '$salaryDesire' and start_working = '$startWork' and prev_company = '$previousCompany' and cv_photo = '$filename' and prefer_contact = '$preferContact' and questions = '$questions') limit 1;
    ";
 
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
    header ("Location: greeliving_job_offer_list.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//transfer data to other pages
// session_start();

//     $_SESSION['firstname'] = (isset($firstname) ? $firstname : "");
//     $_SESSION['lastname'] = (isset($lastname) ? $lastname : "");

//     $_SESSION['cv'] = (isset($uploadfile) ? $uploadfile : "");
}


?>