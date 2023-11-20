<?php
include 'settings.php';
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <table>
            <tr>
                <th>Job ID</th>
                <th>Job Name</th>
                <th>Business name</th>
                <th>contact email</th>
                <th>phone number</th>
                <th>job location</th>
                <th>Type</th>
                <th>Description</th>
            </tr>
        <?php
        $sql = "SELECT * FROM job_offer WHERE job_offer_status = 'Open';";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['job_id'] . 
                "</td><td>" . $row['job_title'] . 
                "</td><td>" . $row['business_name'] . 
                "</td><td>" . $row['job_contact_email'] . 
                "</td><td>" . $row['job_contact_phone'] . 
                "</td><td>" . $row['job_location'] . 
                "</td><td>" . $row['job_type'] . 
                "</td><td>" . $row['job_description'] . 
                "</td><td>" . "<a href='job_application.php?id={$row['job_id']}'>Apply</a>" . 
                "</td></tr>";

            }
            echo "</table>";
        }
        else {
            echo "extraction job failed, no job offer was retrieved";
        }
        $conn -> close();
        ?>
        </table>
        
    </body>
</html>