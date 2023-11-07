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
  <h1>job application</h1>
    <article class="form">
      <form action="process_job_application.php" id="" method="post" onsubmit="return ValidateForm(this);">
<table border="0" cellpadding="5" cellspacing="0">
<tr> 
    <td style="width: 50%">
        <label for="First_Name"><b>First name *</b></label><br />
        <input name="First_Name" type="text" maxlength="50" style="width:100%;max-width: 260px" />
    </td> 

    <td style="width: 50%">
        <label for="Last_Name"><b>Last name *</b></label><br />
        <input name="Last_Name" type="text" maxlength="50" style="width:100%;max-width: 260px" />
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
        <label for="Position"><b>Position you are applying for *</b></label><br />
        <input name="Position" type="text" maxlength="100" style="width:100%;max-width: 535px" />
    </td> 
</tr> 
<tr> 
    <td>
        <label for="Salary"><b>Salary requirements</b></label><br /> 
        <input name="Salary" type="text" maxlength="50" style="width:100%;max-width: 260px" /> </td> <td>
        <label for="StartDate"><b>When can you start?</b></label><br />
        <input name="StartDate" type="text" maxlength="50" style="width:100%;max-width: 260px" />
    </td> 
</tr> 
<tr> 
    <td colspan="2">
        <label for="Organization"><b>Last company you worked for</b></label><br />
        <input name="Organization" type="text" maxlength="100" style="width:100%;max-width: 535px" />
    </td> 
</tr>
<tr> 
    <td colspan="2">
        <label for="file"><b>You can upload your CV here</b></label><br />
        <input name="file" type="file" id="user_file" accept=".pdf, .png, .jpg" style="width:100%;max-width: 535px">
    </td> 
</tr>  
<tr> 
    <td colspan="2">
        <label for="Contact"><b>Preferred contact</b></label><br />
        <input name="Contact" type="radio" value="Email   " checked="checked" /> Email      
        <input name="Contact" type="radio" value="Phone" /> Phone      
        <input name="Contact" type="radio" value="Zalo" /> Zalo
    </td> 
</tr> 
<tr> 
    <td colspan="2">
        <label for="Reference"><b>Do you have any question for us?</b></label><br />
        <textarea name="Reference" rows="7" cols="40" style="width:100%;max-width: 535px"></textarea>
    </td> 
</tr> 
<tr> 
    <td colspan="2" style="text-align: center;">
        <input name="skip_submit" type="submit" value="Send Application" />
    </td> 
</tr>
</table>
</form>
    </article>
  </main>
  <script type="text/javascript">
function ValidateForm(frm) {
if (frm.First_Name.value == "") 
{ 
    alert('First name is required.'); 
    frm.First_Name.focus(); return false; 
}

if (frm.Last_Name.value == "") 
{ 
    alert('Last name is required.'); 
    frm.Last_Name.focus(); return false; 
}

if (frm.Email_Address.value == "") 
{ 
    alert('Email address is required.'); 
    frm.Email_Address.focus(); return false; 
}

if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) 
{ 
    alert('Please enter a valid email address.'); 
    frm.Email_Address.focus(); return false; 
}

if (frm.Position.value == "") 
{ 
    alert('Position is required.'); 
    frm.Position.focus(); return false; 
}

if (frm.Phone.value == "") 
{ 
    alert('Phone is required.'); 
    frm.Phone.focus(); return false; 
}
return true; 
}
</script>
</body>

</html>