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
// if (isset($_FILES["cv"])) {
//     echo $_FILES["cv"];
// } 

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     if (isset($_POST['submit'])) {
//         $uploadfile = $_FILES['cv'];
//         echo $uploadfile;
//     }
//     if (isset($_FILES['cv'])) {
//         $uploadfileName = $_FILES['cv']['name'];
//         $uploadfileType = $_FILES['cv']['type'];
//         $uploadfileTmp = $_FILES['cv']['tmp_name'];
//     }
// }

// $maxFileSize = 5 * 1024 * 1024; // 5 MB in bytes

// if (isset($_FILES["cv"])) {
//     echo $_FILES["cv"];
// } 

// $uploadfileTmp = $_FILES['cv']['tmp_name'];
// $uploadfileSize = filesize($uploadfileTmp);

// if ($uploadfileSize > $maxFileSize) {
//     $errMsg .= "<p>Uploaded CV exceed size limit which is 5MB</p>";
//     array_push($errSpot,"cv_photo");
// }

if (isset ($_FILES['cv'])) {
    var_dump($_FILES['cv']);
}

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
$userID = "851";
$jobID = "JO001";
$educationID = "2";

//Get current date 
$applicationDate = date("d-m-Y");

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

// Get the auto-incremented ID and put 'JA' in ASCII before it
$applicationID = '7465' . mysqli_insert_id($conn);

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
echo $table1;
    $add = 
    "
    INSERT INTO job_application (application_id, user_id, job_id, education_id, job_application_date, job_application_status, job_application_first_name, job_application_last_name, job_application_email, job_application_phone, position, salary_req, start_working, prev_company, cv_photo, prefer_contact, questions )
    SELECT * FROM (SELECT '$applicationID','$userID', '$jobID','$educationID','$applicationDate','$appStatus','$firstname','$lastname','$email','$phoneNum','$position','$salaryDesire','$startWork','$previousCompany','$uploadfile','$preferContact','$questions' ) as tmp
    WHERE NOT EXISTS (SELECT * FROM job_application  WHERE application_id = '$applicationID' and user_id = '$userID' and job_id = '$jobID' and education_id = '$educationID' and job_application_date = '$applicationDate' and job_application_status = '$appStatus' and job_application_first_name = '$firstname' and job_application_last_name = '$lastname' and job_application_email = '$email' and job_application_phone = '$phoneNum' and position = '$position' and salary_req = '$salaryDesire' and start_working = '$startWork' and prev_company = '$previousCompany' and cv_photo = '$uploadfile' and prefer_contact = '$preferContact' and questions = '$questions') limit 1;
    ";
echo $add;
    $tables = [$add];

    foreach($tables as $k => $sql)
    {
        $query = @$conn->query($sql);
    
        if(!$query) 
        {
           $errors[] = "Query $k : Creation failed ($conn->error)";
        }
        else
        {
           $errors[] = "Query $k : Creation done";
        }
    }

    foreach($errors as $msg) {
        echo "$msg <br>";
     }
// transfer data to other pages
session_start();
    $_SESSION['espot'] = $errSpot;
    $_SESSION['err'] = $errMsg;

    $_SESSION['firstname'] = (isset($firstname) ? $firstname : "");
    $_SESSION['lastname'] = (isset($lastname) ? $lastname : "");

    $_SESSION['cv_photo'] = (isset($uploadfile) ? $uploadfile : "");
}


?>