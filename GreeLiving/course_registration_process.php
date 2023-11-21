<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'yes') 
{
    $courseId = $_POST['courseId'];
    $userID = 8526;

    require_once ("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

 if (!$conn) 
{
    echo "<p>Database connection failure</p>";
}
else 
{
    mysqli_autocommit($conn, false); //start of transaction

    $sql = 
    "
    INSERT INTO user_course (user_id, course_id)
    SELECT * FROM (SELECT '$userID', '$courseId' ) as tmp
    WHERE NOT EXISTS (SELECT * FROM user_course  WHERE user_id = '$userID' and course_id = '$courseId') limit 1;
    ";

    mysqli_store_result($conn);
    $countQuery = "SELECT COUNT(*) FROM user_course WHERE course_id = '$courseId'";
    $countResult = mysqli_query($conn, $countQuery);
    $countRow = mysqli_fetch_row($countResult);
    $count = $countRow[0];
    $spot_count = 25 - $count;

    if ($spot_count > 0) {
        if (mysqli_query($conn, $sql)) {
            echo "Course registration success";
            mysqli_commit($conn); //go through with the transaction
            echo "<br>";
            echo '<a href="greeliving_course_list.php">Return</a>';
            
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            mysqli_rollback($conn); //cancel transaction
            echo "<br>";
            echo '<a href="greeliving_course_list.php">Return</a>';
        }
    }
    else {
        echo "You can clearly see that the available slot is 0 yet you have to be like that huh";
        mysqli_rollback($conn); //cancel transaction
        echo "<br>";
        echo '<a href="greeliving_course_list.php">Return</a>';
    }

    mysqli_autocommit($conn, true);
}
}
?>