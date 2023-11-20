<?php
session_start();
if (!isset($_SESSION['business_id'])) {
    header('Location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['business_id']);
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
            echo "<p>Business id :" . $_SESSION["business_id"] . "</p>";
            echo "<p>Business name :" . $_SESSION["business_name"] . "</p>";
            echo "<p>Business email :" . $_SESSION["business_email"] . "</p>";
            echo "<p>Business phone number :" . $_SESSION["business_phone_number"] . "</p>";
            echo "<p>Business description :" . $_SESSION["business_description"] . "</p>" . "<br>";

            echo "<p>Job id :" . $_SESSION['job_id'] . "<p>";
            echo "<p>Business id :" . $_SESSION['business_id'] . "<p>";
            echo "<p>Job offer status :" . $_SESSION['job_offer_status'] . "<p>";
            echo "<p>Job title :" . $_SESSION['job_title'] . "<p>";
            echo "<p>Busiess name :" . $_SESSION['business_name'] . "<p>";
            echo "<p>Job contact email :" . $_SESSION['job_contact_email'] . "<p>";
            echo "<p>Job contact phone :" . $_SESSION['job_contact_phone'] . "<p>";
            echo "<p>Job location :" . $_SESSION['job_location'] . "<p>";
            echo "<p>Job type :" . $_SESSION['job_type'] . "<p>";
            echo "<p>Job description :" . $_SESSION['job_description'] . "<p>";

        }

        ?>

        <p>
            <a href="business.php?logout='1'" style="color: red;">
                Click here to Logout
            </a>
        </p>
    </div>
    </div>
</body>

</html>