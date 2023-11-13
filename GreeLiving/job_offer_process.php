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
if(isset($_POST["job_title"])) 
{
    $jobtitle = sanitise_input($_POST["job_title"]);
} 

// check if firstname is alphabetic
if (!preg_match('/^[a-zA-Z\s]+$/', $jobtitle) && strlen($jobtitle)!=0) 
{
    echo "<p>Your job title cannot have number inside it.</p>";
    $errorcounter = $errorcounter +1;

}

// get lastname from job application
if(isset($_POST["business_name"])) 
{
    $businessname = sanitise_input($_POST["business_name"]);
}

// check if lastname is alphabetic
if (!preg_match('/^[a-zA-Z\s]+$/', $businessname)  && strlen($businessname)!=0) 
{
    echo "<p>Your business name should not have number inside it.</p>";
    $errorcounter = $errorcounter +1;

}

if(strlen($_POST["job_contact_email"])!=0) 
{
    $email = sanitise_input($_POST["job_contact_email"]);
} 

// get phone number from job application
if(strlen($_POST["job_contact_phone"])!=0) 
{
    $phoneNum = sanitise_input($_POST["job_contact_phone"]);
}

// get lastname from job application
if(isset($_POST["job_location"])) 
{
    $joblocation = sanitise_input($_POST["job_location"]);
}

// get prefered contact from job application
if(strlen($_POST["job_type"])!=0) 
{
    $jobtype = $_POST["job_type"];
}

// get lastname from job application
if(isset($_POST["job_description"])) 
{
    $jobdesc = sanitise_input($_POST["job_description"]);
}

//Get current date 
$applicationDate = date("Y-m-d");

//Set status for the offer status
$offerStatus = "Open";

// Get the auto-incremented ID and put 'JO' in ASCII before it
// $autoincrementedID = mysqli_insert_id($conn);
// $applicationID = '7465' . $autoincrementedID;
$jobID = mysqli_insert_id($conn);
$businessID = 66831; //Tetsing and will delete after other function complete

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
    $errors = [];
    $table1 ="CREATE TABLE IF NOT EXISTS job_offer
    (
        `job_id` int(11) NOT NULL AUTO_INCREMENT,
        `business_id` int(11) NOT NULL,
        `job_offer_status` varchar(255) DEFAULT NULL,
        `job_title` varchar(255) NOT NULL,
        `business_name` varchar(255) NOT NULL,
        `job_contact_email` varchar(255) NOT NULL,
        `job_contact_phone` varchar(255) NOT NULL,
        `job_location` varchar(255) NOT NULL,
        `job_type` varchar(255) NOT NULL,
        `job_description` TEXT DEFAULT NULL,
        PRIMARY KEY  (job_id),
        FOREIGN KEY (`business_id`) REFERENCES business_profile(business_id)

    );";

    $add = 
    "
    INSERT INTO job_offer (job_id, business_id, job_offer_status, job_title, business_name, job_contact_email, job_contact_phone, job_location, job_type, job_description)
    SELECT * FROM (SELECT '$jobID','$businessID', '$offerStatus','$jobtitle','$businessname','$email','$phoneNum','$joblocation','$jobtype','$jobdesc' ) as tmp
    WHERE NOT EXISTS (SELECT * FROM job_offer  WHERE job_id = '$jobID' and business_id = '$businessID' and job_offer_status = '$offerStatus' and job_title = '$jobtitle' and business_name = '$businessname' and job_contact_email = '$email' and job_contact_phone = '$phoneNum' and job_location = '$joblocation' and job_type = '$jobtype' and job_description = '$jobdesc') limit 1;
    ";

    $tables = [$table1,$add];

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
}
?>