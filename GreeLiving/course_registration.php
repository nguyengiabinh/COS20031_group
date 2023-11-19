<?php
function getProductById($courseId) {
    include 'settings.php';
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    $sql = "SELECT * FROM course WHERE course_id = $courseId";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $course = $result->fetch_assoc();
        return $course;
    }

    return null;
}

if (isset($_GET['id'])) {
    $courseId = $_GET['id'];
    $course = getProductById($courseId);
    echo "You sure you want to register to" . $course['course_name'];
}
?>

<form action="course_registration_process.php" method="POST">
    <input type="hidden" name="courseId" value="<?php echo $courseId; ?>">

    <button type="submit" name="action" value="yes">Yes</button>
    <a href="greeliving_course_list.php">No</a>
</form>