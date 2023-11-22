    <?php
    session_start();
    require_once 'connection.php';

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_POST['type'] == 'business' && isset($_POST['id'])) {
        $businessid = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "SELECT business_id, business_name, business_email, business_phone_number, business_description FROM business_profile WHERE business_id = $businessid";
        $sql_result = mysqli_query($conn, $query);
        $joboffer = "SELECT job_id, business_id, job_offer_status, job_title, business_name, job_contact_email, job_contact_phone, job_location, job_type, job_description FROM job_offer WHERE business_id = $businessid ";
        $sql_result = mysqli_query($conn, $joboffer);
        if (!$sql_result) {
            $_SESSION['error'] = true;
            header('Location: login.php');
            exit();
        }
        unset($_SESSION['error']);
        while ($row = mysqli_fetch_assoc($sql_result)) {
            $_SESSION['business_id'] = $row['business_id'];
            $_SESSION['business_name'] = $row['business_name'];
            $_SESSION['business_email'] = $row['business_email'];
            $_SESSION['business_phone_number'] = $row['business_phone_number'];
            $_SESSION['business_description'] = $row['business_description'];

            $_SESSION['job_id'] = $row['job_id'];   
            $_SESSION['business_id'] = $row['business_id'];   
            $_SESSION['job_offer_status'] = $row['job_offer_status'];   
            $_SESSION['job_title'] = $row['job_title'];   
            $_SESSION['business_name'] = $row['business_name'];   
            $_SESSION['job_contact_email'] = $row['job_contact_email'];   
            $_SESSION['job_contact_phone'] = $row['job_contact_phone'];   
            $_SESSION['job_location'] = $row['job_location'];
            $_SESSION['job_type'] =  $row['job_type'];
            $_SESSION['job_description'] = $row['job_description'];

        }
        mysqli_close($conn);
        header('Location: business.php');
        exit();


    } elseif ($_POST['type'] == 'user' && isset($_POST['id'])) {
        $userid = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "SELECT user_id, first_name, last_name, date_of_birth, user_address, user_email, phone_number FROM user_profile WHERE user_id = $userid";
        $sql_result = mysqli_query($conn, $query);
        $jobapplication = "SELECT application_id, user_id, job_id, job_application_date, job_application_status, job_application_first_name, job_application_last_name, job_application_email, job_application_phone, position, salary_req, start_working, prev_company, cv_photo , prefer_contact, questions FROM job_application WHERE user_id = $userid ";
        $sql_result = mysqli_query($conn, $jobapplication);

        if (!$sql_result) {
            $_SESSION['error'] = true;
            header('Location: login.php');
            exit();
        }
        unset($_SESSION['error']);
        while ($row = mysqli_fetch_assoc($sql_result)) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['date_of_birth'] = $row['date_of_birth'];
            $_SESSION['user_address'] = $row['user_address'];
            $_SESSION['user_email'] = $row['user_email'];
            $_SESSION['phone_number'] = $row['phone_number'];

            $_SESSION['application_id'] = $row['application_id'];
            $_SESSION['user_id'] = $row['user_id'];   
            $_SESSION['job_id'] = $row['job_id'];
            $_SESSION['job_application_date'] = $row['job_application_date'];
            $_SESSION['job_application_status'] = $row['job_application_status'];
            $_SESSION['job_application_first_name'] = $row['job_application_first_name'];
            $_SESSION['job_application_last_name'] = $row['job_application_last_name'];
            $_SESSION['job_application_email'] = $row['job_application_email'];
            $_SESSION['job_application_phone'] = $row['job_application_phone'];   
            $_SESSION['position'] = $row['position'];   
            $_SESSION['salary_req'] = $row['salary_req'];   
            $_SESSION['start_working'] = $row['start_working'];   
            $_SESSION['prev_company'] = $row['prev_company'];   
            $_SESSION['cv_photo'] = $row['cv_photo'];   
            $_SESSION['prefer_contact'] = $row['prefer_contact'];  
            $_SESSION['questions'] = $row['questions'];   
    

        }
        mysqli_close($conn);
        header('Location: user.php');
        exit();
    }

    else {
        $_SESSION['error'] = true;
        header('Location: login.php');
        exit();
    }
    ?>
