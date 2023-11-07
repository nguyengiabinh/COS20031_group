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
  <main id="payment">
  <h1>job Offer</h1>
    <article class="form">
      <form action="process_job_application.php" id="" method="post" onsubmit="return ValidateForm(this);">
<table border="0" cellpadding="5" cellspacing="0">
<tr> 
    <td style="width: 50%">
        <label for="Job_Title"><b>Job title *</b></label><br />
        <input name="Job_Title" type="text" maxlength="50" style="width:100%;max-width: 260px" />
    </td> 

    <td style="width: 50%">
        <label for="business_name"><b>Business name *</b></label><br />
        <input name="business_name" type="text" maxlength="50" style="width:100%;max-width: 260px" />
    </td> 
</tr> 
<tr> 
    <td colspan="2">
        <label for="Email_Address"><b>Email *</b></label><br />
        <input name="Email_Address" type="text" maxlength="100" style="width:100%;max-width: 535px" />
    </td> 
</tr> 
<tr> 
    <td>
        <label for="Phone"><b>Phone *</b></label><br />
        <input name="Phone" type="text" maxlength="50" style="width:100%;max-width: 260px" />
    </td> 
</tr> 
<tr> 
    <td colspan="2">
        <label for="location"><b>Location *</b></label><br />
        <input name="location" type="text" maxlength="1000" style="width:100%;max-width: 535px" />
    </td> 
</tr> 
<tr> 
    <td colspan="2">
        <label for="Contact"><b>Job type</b></label><br />
        <input name="Contact" type="radio" value="fulltime" checked="checked" /> Full Time    
        <input name="Contact" type="radio" value="parttime" /> Part Time 
        <input name="Contact" type="radio" value="temporary" /> Temporary
    </td> 
</tr> 
 
<tr> 
    <td colspan="2">
        <label for="job_desc"><b>Job Description</b></label><br />
        <textarea name="job_desc" rows="7" cols="40" style="width:100%;max-width: 535px"></textarea>
    </td> 
</tr> 
<tr> 
    <td colspan="2" style="text-align: center;">
        <input name="skip_submit" type="submit" value="Post Job" />
    </td> 
</tr>
</table>
</form>
    </article>
  </main>
  <script type="text/javascript">
function ValidateForm(frm) {
if (frm.Job_Title.value == "") 
{ 
    alert('Job headline is required.'); 
    frm.Job_Title.focus(); return false; 
}

if (frm.business_name.value == "") 
{ 
    alert('Business name is required.'); 
    frm.business_name.focus(); return false; 
}

if (frm.Email_Address.value == "") 
{ 
    alert('Email address is required.'); 
    frm.Email_Address.focus(); return false; 
}

if (frm.Phone.value == "") 
{ 
    alert('Phone is required.'); 
    frm.Phone.focus(); return false; 
}

if (frm.location.value == "") 
{ 
    alert('Job location is required.'); 
    frm.location.focus(); return false; 
}

if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) 
{ 
    alert('Please enter a valid email address.'); 
    frm.Email_Address.focus(); return false; 
}

if (frm.job_desc.value == "") 
{ 
    alert('Job Description is required.'); 
    frm.job_desc.focus(); return false; 
}
return true; 
}
</script>
</body>

</html>