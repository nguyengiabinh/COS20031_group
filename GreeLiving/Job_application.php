<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="A simple application page">
  <meta name="keywords" content="HTML, simple page">
  <meta name="author" content="Nguyen Gia Binh">


  <title>Payment</title>
</head>

<body>
  <main id="job_application">
  <?php
function getProductById($jobId) {
    include 'settings.php';
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    $sql = "SELECT * FROM job_offer WHERE job_id = $jobId";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $job = $result->fetch_assoc();
        return $job;
    }

    return null;
}

if (isset($_GET['id'])) {
    $jobId = $_GET['id'];
    $job = getProductById($jobId);
    echo $job['job_title'];
}
?>
    <article class="form">
      <form action="job_application_process.php" enctype="multipart/form-data" method="post">
<table border="0" cellpadding="5" cellspacing="0">
<tr> 
    <td style="width: 50%">
        <label for="job_application_first_name"><b>First name *</b></label><br />
        <input name="job_application_first_name" type="text" maxlength="50" style="width:100%;max-width: 260px" required/>
    </td> 

    <td style="width: 50%">
        <label for="job_application_last_name"><b>Last name *</b></label><br />
        <input name="job_application_last_name" type="text" maxlength="50" style="width:100%;max-width: 260px" required/>
    </td> 
</tr> 
<tr> 
    <td colspan="2">
        <label for="job_application_email"><b>Email *</b></label><br />
        <input name="job_application_email" type="text" maxlength="100" style="width:100%;max-width: 535px" required/>
    </td> 
</tr> 
<tr> 
    <td>
        <label for="job_application_phone"><b>Phone *</b></label><br />
        <input name="job_application_phone" type="text" maxlength="10" style="width:100%;max-width: 260px" required/>
    </td> 
</tr> 
<tr> 
    <td colspan="2">
        <label for="position"><b>Position you are applying for *</b></label><br />
        <input name="position" type="text" maxlength="100" style="width:100%;max-width: 535px" required/>
    </td> 
</tr> 
<tr> 
    <td>
        <label for="salary_req"><b>Desired Salary</b></label><br /> 
        <input name="salary_req" type="text" maxlength="50" style="width:100%;max-width: 260px" /> </td> <td>
        <label for="start_working"><b>When can you start?</b></label><br />
        <input name="start_working" type="text" maxlength="50" style="width:100%;max-width: 260px" />
    </td> 
</tr> 
<tr> 
    <td colspan="2">
        <label for="prev_company"><b>Last company you worked for</b></label><br />
        <input name="prev_company" type="text" maxlength="100" style="width:100%;max-width: 535px" />
    </td> 
</tr>
<tr> 
    <td colspan="2">
        <label for="cv"><b>You can upload your CV here</b></label><br/>
        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="5242880"/> -->
        <input name="cv" type="file" id="cv" accept=".pdf, .png, .jpg" style="width:100%;max-width: 535px" required>
    </td> 
</tr>  
<tr> 
    <td colspan="2">
        <label for="prefer_contact"><b>Preferred contact</b></label><br />
        <input name="prefer_contact" type="radio" value="Email   " checked="checked" /> Email      
        <input name="prefer_contact" type="radio" value="Phone" /> Phone      
        <input name="prefer_contact" type="radio" value="Zalo" /> Zalo
    </td> 
</tr> 
<tr> 
    <td colspan="2">
        <label for="questions"><b>Do you have any question for us?</b></label><br />
        <textarea name="questions" rows="7" cols="40" style="width:100%;max-width: 535px"></textarea>
    </td> 
</tr> 
<tr> 
    <td colspan="2" style="text-align: center;">
        <input name="submit" type="submit" value="Send Application" />
    </td> 
</tr>
</table>
</form>
    </article>
  </main>
  <script type="text/javascript">
function ValidateForm(frm) {
if (frm.job_application_first_name.value == "") 
{ 
    alert('First name is required.'); 
    frm.job_application_first_name.focus(); return false; 
}

if (frm.job_application_last_name.value == "") 
{ 
    alert('Last name is required.'); 
    frm.job_application_last_name.focus(); return false; 
}

if (frm.job_application_email.value == "") 
{ 
    alert('Email address is required.'); 
    frm.job_application_email.focus(); return false; 
}

if (frm.job_application_email.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) 
{ 
    alert('Please enter a valid email address.'); 
    frm.job_application_email.focus(); return false; 
}

if (frm.job_application_phone.value == "") 
{ 
    alert('Phone is required.'); 
    frm.job_application_phone.focus(); return false; 
}

if (frm.position.value == "") 
{ 
    alert('Position is required.'); 
    frm.position.focus(); return false; 
}

return true; 
}
</script>
</body>

</html>