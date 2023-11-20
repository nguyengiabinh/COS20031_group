<?php
include 'db_setting.php';

// Get the search term from the form
$search = $_GET['search'];

if (isset($_GET['search_jo'])) {
    $sql = "SELECT * FROM job_offer WHERE job_title LIKE '%$search%' AND job_offer_status IS NOT NULL AND job_offer_status != 'Closed'";
    $table_name = "Job Offer";
} elseif (isset($_GET['search_biz'])) {
    $sql = "SELECT * FROM business_profile WHERE business_name LIKE '%$search%'";
    $table_name = "Business Profile";
} else {
    die("Invalid action.");
}

// Execute the query
$result = mysqli_query($conn, $sql);

// Display the results
if ($result->num_rows > 0) {
    echo "<h2>Search Results:</h2>";
    while ($row = $result->fetch_assoc()) {
        if ($table_name === "Job Offer") {
            echo "Job ID: " . $row['job_id'] . "<br>";
            echo "Business ID: " . $row['business_id'] . "<br>";
            echo "Job Offer Status: " . $row['job_offer_status'] . "<br>";
            echo "Job Title: " . $row['job_title'] . "<br>";
            echo "Business Name: " . $row['business_name'] . "<br>";
            echo "Job Contact Email: " . $row['job_contact_email'] . "<br>";
            echo "Job Contact Phone: " . $row['job_contact_phone'] . "<br>";
            echo "Job Location: ". $row["job_location"] . "<br>";
            echo "Job Type: ". $row["job_type"] . "<br>";
            echo "Job Desc: ". $row["job_description"] . "<br>";
            echo "<a href='./job_application.php?job_id=" . $row['job_id'] . "'>View Job Application</a><br>";
            echo "<br>";
        } elseif ($table_name === "Business Profile") {
            echo "Business ID: " . $row['business_id'] . "<br>";
            echo "Business Name: " . $row['business_name'] . "<br>";
            echo "Business Email: " . $row['business_email'] . "<br>";
            echo "Business Phone Number: " . $row['business_phone_number'] . "<br>";
            echo "Business Description: " . $row['business_description'] . "<br>";
            echo "<br>";
        }
        
    }
} else {
    echo "<h2>Search Results:</h2>";
    echo "No results found in $table_name.";
}

// Close the database connection
$conn->close();
?>
