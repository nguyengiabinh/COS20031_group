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
                <th>course ID</th>
                <th>Course Name</th>
                <th>Date</th>
                <th>Instructor ID</th>
            </tr>
        <?php
        $sql = "SELECT * FROM course;";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['course_id'] . "</td><td>" . 
                $row['course_name'] . "</td><td>" . $row['course_date'] . 
                "</td><td>" . $row['instructor_id'] . "</td><td>" . "<a href='course_registration.php?id={$row['course_id']}'>Register</a>"
                . "</td></tr>";

            }
            echo "</table>";
        }
        else {
            echo "extraction course failed, no course was retrieved";
        }
        $conn -> close();
        ?>
        </table>
        
    </body>
</html>