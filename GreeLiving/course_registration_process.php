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

    $sql = 
    "
    INSERT INTO user_course (user_id, course_id)
    SELECT * FROM (SELECT '$userID', '$courseId' ) as tmp
    WHERE NOT EXISTS (SELECT * FROM user_course  WHERE user_id = '$userID' and course_id = '$courseId') limit 1;
    ";
 
 if ($conn->query($sql) === TRUE) {
    echo "course registered successfully";
    header('Location: greeliving_course_list.php');
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
?>