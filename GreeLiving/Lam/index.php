<?php
session_start();
if (!isset($_SESSION['business id'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['business id']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css"
                    href="style.css">
</head>
<body>
    <div class="header">
        <h2>Home Page</h2>
    </div>
    <div class="content">
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
  
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION['business name'])) : ?>
<p>
                Welcome 
                <strong>
                    <?php echo $_SESSION['business name']; ?>
                </strong>
		</p>
		<?php 

        // Taking all 5 values from the form data(input)
        $businessid =  $_REQUEST['business_id'];
        $businessname =  $_REQUEST['business_name'];
        $businessemail = $_REQUEST['business_email'];
        $businessphonenumber = $_REQUEST['business_phone_number'];
        $businessdescription = $_REQUEST['business_description'];
         
        mysqli_close($conn);
        ?>
<p> 
                <a href="index.php?logout='1'" style="color: red;">
                    Click here to Logout
                </a>
</p>

        <?php endif ?>
    </div>
</body>
</html>