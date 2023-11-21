<?php
include 'settings.php';
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
?>

<!DOCTYPE html>
<html>
    <head>
        <h1>Interview for job</h1>
    </head>
    <body>
        <table>
            <tr>
                <th>Interview ID</th>
                <th>User ID</th>
                <th>Job ID</th>
                <th>Date</th>
                <th>Interviewer Name</th>
                <th>Interview Status</th>
            </tr>
        <?php
        $uid = $_GET['uid'];
        $sql = "SELECT * FROM interview WHERE user_id = '$uid'";
        $result = $conn->query($sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['interview_id'] . 
                "</td><td>" . $row['user_id'] . "</td><td>" . $row['job_id'] . "</td><td>" . $row['interview_date'] .
                "</td><td>" . $row['interviewer_name'] . "</td><td>" . $row['interview_status'] .
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