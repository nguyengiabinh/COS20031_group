<?php
function getProductById($uid) {
    include 'settings.php';
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    $sql = "SELECT * FROM job_application WHERE user_id = $uid";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $application = $result->fetch_assoc();
        return $application;
    }

    return null;
}

if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];
    $jid = $_GET['jid'];
    $application = getProductById($uid);
    echo "You sure you want to accept " . $application['job_application_first_name'] . "in to job " . $application['job_id'];
}
?>

<form action="interview_process.php" method="POST">
    <input type="hidden" name="uid" value="<?php echo $uid; ?>">
    <input type="hidden" name="jid" value="<?php echo $jid; ?>">

    <button type="submit" name="action" value="yes">Yes</button>
    <a href="job_offer_list.php">No</a>
</form>
