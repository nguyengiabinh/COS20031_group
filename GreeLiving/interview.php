<?php
include 'settings.php';
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
session_start();
if (!isset($_SESSION['business_id'])) {
    header('Location: login.php');
}
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
        $jid = $_GET['jid'];
        $sql = "INSERT INTO interview (interview_id, user_id, job_id, interview_date, interviewer_name, interview_status) VALUE (null, '$uid', '$jid', null," . $_SESSION["business_id"] . ", null)";
        $sql = "SELECT * FROM interview WHERE user_id = '$uid'";
        $result = $conn->query($sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['interview_id'] . 
                "</td><td>" . $row['user_id'] . "</td><td>" . $row['job_id'] . "</td><td>" . $row['interview_date'] .
                "</td><td>" . $row['interviewer_name'] . "</td><td>" . $row['interview_status'] .
                "</td></tr>";

            }
            echo "</table>";
        }
        else {
            echo "extraction application failed, no applicant was retrieved";
        }
        $conn -> close();
        ?>
        </table>
        
    </body>
</html>
