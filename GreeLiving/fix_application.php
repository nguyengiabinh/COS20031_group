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
<?php 
session_start(); 
// redirect if access directly
if(strlen($_SESSION['err'])==0) {
    header ("location:job_application.php");
}?>
  <main id="job_application">
  <article class="form warning" >
        <h2>Warning</h2>
        <?php echo $_SESSION['err'] ?>
    </article>
  <h1>job application</h1>
    <article class="form">
      <form action="job_application_process.php" id="" method="post" onsubmit="return ValidateForm(this);">
<table border="0" cellpadding="5" cellspacing="0">
<tr> 
    <td style="width: 50%">
        <label for="job_application_first_name"><b>First name *</b></label><br />
        <input class="input_text_2 <?php echo (in_array("firstname", $_SESSION['espot']) ? 'invalid' : '' )?>" id="fName" type="text" name="job_application_first_name" value="<?php echo $_SESSION['firstname']?>" placeholder="e.g: Nguyen" maxlength="25" pattern="[a-zA-Z\s]*" style="width:100%;max-width: 260px" required>
    </td> 

    <td style="width: 50%">
        <label for="job_application_last_name"><b>Last name *</b></label><br />
        <!-- <input name="job_application_last_name" type="text" maxlength="50" style="width:100%;max-width: 260px" /> -->
        <input class="input_text_2 <?php echo (in_array("lastname", $_SESSION['espot']) ? 'invalid' : '' )?>" id="lName" type="text" name="job_application_last_name" value="<?php echo $_SESSION['lastname']?>" placeholder="Dat Ky" maxlength="25" pattern="[a-zA-Z\s]*" style="width:100%;max-width: 260px" required>
    </td> 
</tr> 
<tr> 
    <td colspan="2">
        <label for="job_application_email"><b>Email *</b></label><br />
        <input name="job_application_email" type="text" maxlength="100" style="width:100%;max-width: 535px" required />
    </td> 
</tr> 
<tr> 
    <td>
        <label for="job_application_phone"><b>Phone *</b></label><br />
        <input name="job_application_phone" type="text" maxlength="50" style="width:100%;max-width: 260px" required/>
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
        <label for="cv_photo"><b>You can upload your CV here</b></label><br />
        <input name="cv_photo" type="file" id="user_file" accept=".pdf, .png, .jpg" style="width:100%;max-width: 535px">
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
        <input name="submit_submit" type="submit" value="Send Application" />
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