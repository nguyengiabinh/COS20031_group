<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'yes') 
{
    $uid = $_POST['uid'];
    $jid = 741;
    $intname = 66832;

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
    INSERT INTO interview (user_id, job_id, interviewer_name)
    SELECT * FROM (SELECT '$uid', '$jid', '$intname' ) as tmp
    WHERE NOT EXISTS (SELECT * FROM interview  WHERE user_id = '$uid' and job_id = '$jid' and interviewer_name='$intname') limit 1;
    ";
 
 if ($conn->query($sql) === TRUE) {
    echo "application accepted successfully";
    header('Location: job_offer_list.php');
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}}
?>