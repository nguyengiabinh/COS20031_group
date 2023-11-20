<?php
include 'db_setting.php';

if (isset($_GET['job_id'])) {
    $job_id = $_GET['job_id'];

    $sql = "SELECT * FROM job_application WHERE job_id = '$job_id'";

    // Execute the query
    $result = $conn->query($sql);
    

    // Display the subjects
    if ($result->num_rows > 0) {
        echo "<h2>Job Application for Job ID: $job_id</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "Job Application ID: " . $row['application_id'] . "<br>";
            echo "User ID: " . $row['user_id'] . "<br>";
            echo "Job ID: " . $row['job_id'] . "<br>";
            echo "Education ID: " . $row['education_id'] . "<br>";
            echo "Apply Date: " . $row['job_application_date'] . "<br>";
            echo "Job Application Status: " . $row['job_application_status'] . "<br>";
            echo "Job Application First Name: " . $row['job_application_first_name'] . "<br>";
            echo "Job Application Last Name: " . $row['job_application_last_name'] . "<br>";
            echo "Job Application Email: " . $row['job_application_email'] . "<br>";
            echo "Job Application Phone: " . $row['job_application_phone'] . "<br>";
            echo "Position: " . $row['position'] . "<br>";
            echo "Salary Request: " . $row['salary_req'] . "<br>";
            echo "Start Working: " . $row['start_working'] . "<br>";
            echo "Previous Company: " . $row['prev_company'] . "<br>";
            echo "CV Photo: " . $row['cv_photo'] . "<br>";
            echo "Prefer Contact: " . $row['prefer_contact'] . "<br>";
            echo "Question: " . $row['questions'] . "<br>";
            echo "<br>";
        }
    } else {
        echo "No job application for job offer: $job_id";
    }
} else {
    echo "Invalid job ID.";
}

// Close the database connection
$conn->close();
?>
