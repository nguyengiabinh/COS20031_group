<?php
include 'settings.php';
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
?>

<!DOCTYPE html>
<html>
    <head>
        <h1>Job Applications for the offer</h1>
    </head>
    <body>
        <table>
            <tr>
                <th>Application ID</th>
                <th>User ID</th>
                <th>Job ID</th>
                <th>Date</th>
                <th>Application Status</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>contact email</th>
                <th>contact phone</th>
                <th>Position</th>
                <th>Salary requirement</th>
                <th>Start Date</th>
                <th>Previous Company</th>
                <th>CV photo</th>
                <th>Contact Preference</th>
                <th>Questions</th>
            </tr>
        <?php
        $jid = $_GET['jid'];
        $sql = "SELECT * FROM job_application WHERE job_id = '$jid'";
        $result = $conn->query($sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['application_id'] . 
                "</td><td>" . $row['user_id'] . "</td><td>" . $row['job_id'] . "</td><td>" . $row['job_application_date'] .
                "</td><td>" . $row['job_application_status'] . "</td><td>" . $row['job_application_first_name'] . "</td><td>" . $row['job_application_last_name'] .
                "</td><td>" . $row['job_application_email'] . "</td><td>" . $row['job_application_phone'] .
                "</td><td>" . $row['position'] . "</td><td>" . $row['salary_req'] . 
                "</td><td>" . $row['start_working'] . "</td><td>" . $row['prev_company'] . 
                "</td><td>" . $row['cv_photo'] . "</td><td>" . $row['prefer_contact'] . "</td><td>" . $row['questions'] .
                "</td><td>" . "<a href='interview.php?uid={$row['user_id']}'>Accept</a>"
                . "</td></tr>";

            }
            echo "</table>";
        }
        else {
            echo "extraction job failed, no job was retrieved";
        }
        $conn -> close();
        ?>
        </table>
        
    </body>
</html>