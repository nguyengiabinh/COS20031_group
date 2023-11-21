<?php
include 'settings.php';
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
?>

<!DOCTYPE html>
<html>
    <head>
        <h1>Job Offers</h1>
    </head>
    <body>
        <table>
            <tr>
                <th>Job ID</th>
                <th>Job Name</th>
                <th>Business ID</th>
                <th>Job Status</th>
                <th>contact email</th>
                <th>contact phone</th>
                <th>Location</th>
                <th>Job Type</th>
                <th>Description</th>
            </tr>
        <?php
        $sql = "SELECT * FROM job_offer;";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['job_id'] . 
                "</td><td>" . $row['job_title'] . "</td><td>" . $row['business_id'] . 
                "</td><td>" . $row['job_offer_status'] . "</td><td>" . $row['job_contact_email'] . 
                "</td><td>" . $row['job_contact_phone'] . "</td><td>" . $row['job_location'] . 
                "</td><td>" . $row['job_type'] . "</td><td>" . $row['job_description'] . 
                "</td><td>" . "<a href='accepts.php?jid={$row['job_id']}'>Applications</a>"
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