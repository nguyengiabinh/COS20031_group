<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Profile</h2>
    </div>
    <div class="content">
        <h3>This is your profile</h3>
        <?php
        if (!isset($_GET["error"])) {
            echo "<p>User id :" . $_SESSION["user_id"] . "</p>";
            echo "<p>User first name :" . $_SESSION["first_name"] . "</p>";
            echo "<p>User last name :" . $_SESSION["last_name"] . "</p>";
            echo "<p>User date of birth :" . $_SESSION["date_of_birth"] . "</p>";
            echo "<p>User address :" . $_SESSION["user_address"] . "</p>";
            echo "<p>User email :" . $_SESSION["user_email"] . "</p>";
            echo "<p>User phone number :" . $_SESSION["phone_number"] . "</p>" . "<br>";

            echo "<p>User job application id :" . $_SESSION["application_id"] . "</p>";
            echo "<p>User id :" . $_SESSION["user_id"] . "</p>";
            echo "<p>Job id :" . $_SESSION["job_id"] . "</p>";
            echo "<p>Job application date :" . $_SESSION["job_application_date"] . "</p>";
            echo "<p>Job application status :" . $_SESSION["job_application_status"] . "</p>";
            echo "<p>Job application first name :" . $_SESSION["job_application_first_name"] . "</p>";
            echo "<p>Job application last name :" . $_SESSION["job_application_last_name"] . "</p>";
            echo "<p>Job application email :" . $_SESSION["job_application_email"] . "</p>";
            echo "<p>Job application phone :" . $_SESSION["job_application_phone"] . "</p>";
            echo "<p>Position :" . $_SESSION["position"] . "</p>";
            echo "<p>Salary req :" . $_SESSION["salary_req"] . "</p>";
            echo "<p>Start working :" . $_SESSION["start_working"] . "</p>";
            echo "<p>Prev company :" . $_SESSION["prev_company"] . "</p>";
            echo "<p>Cv photo :" . $_SESSION["cv_photo"] . "</p>";
            echo "<p>Prefer contact :" . $_SESSION["prefer_contact"] . "</p>";
            echo "<p>Questions :" . $_SESSION["questions"] . "</p>";

        }

        ?>

        <p>
            <a href="user.php?logout='1'" style="color: red;">
                Click here to Logout
            </a>
        </p>
    </div>
    </div>
</body>

</html>