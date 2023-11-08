<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="A simple enquire page">
    <meta name="keywords" content="HTML, simple, webpage">
    <meta name="author" content="Nguyen Gia Binh">
    <!-- responsive setup -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- logo link -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="images/favico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="images/favico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="images/favico/favicon-16x16.png">
    <link rel="manifest" href="images/favico/site.webmanifest">


    <!-- css style link -->
    <link rel="stylesheet" href="styles/enhancements.css">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Enquire</title>
</head>

<body>
<?php include 'includes/header.inc'; session_start(); 
// redirect if access directly
if(strlen($_SESSION['err'])==0) {
    header ("location:payment.php");
}?>     
    <main id="payment">
      <!--  -->
      <h1>Payment</h1>
      <!-- show error messages -->
      <article class="form warning" >
        <h2>Warning</h2>
        <?php echo $_SESSION['err'] ?>
      </article>
      <article class="form">
        <h2>Give us your money!!!</h2>
        <!-- form with validation turned off -->
        <form  method="post" action="process_order.php" novalidate>
          <fieldset class="part">
  <!-- first row for contact: Name (crucial) -->
            <div class="row_01">
              <!-- check if the input of firstname is already correct or not, if not then the input will be highlighted and the previous input still be kept for easier fix -->
              <div class="column">
                  <label class="text_Float_left " for="fName">First name</label>
                  <br>
                  <input class="input_text_2 <?php echo (in_array("firstname", $_SESSION['espot']) ? 'invalid' : '' )?>" id="fName" type="text" name="uname" value="<?php echo $_SESSION['firstname']?>" placeholder="e.g: Nguyen" maxlength="25" pattern="[a-zA-Z\s]*" required>
              </div>
              <!-- check if the input of lastname is already correct or not, if not then the input will be highlighted and the previous input still be kept for easier fix -->
              <div class="column2">
                  <label class="text_Float_left" for="lName">Last name</label>
                  <br>
                  <input class="input_text_2 <?php echo (in_array("lastname", $_SESSION['espot']) ? 'invalid' : '' )?>" id="lName" type="text" name="lname" value="<?php echo $_SESSION['lastname']?>" placeholder="Dat Ky" maxlength="25" pattern="[a-zA-Z\s]*" required>
              </div>
           </div>
           
  <!-- second row for contact: info to sell away :) (crucial) -->
          <div class="row2">
            <!-- check if the input of email is already correct or not, if not then the input will be highlighted and the previous input still be kept for easier fix -->
            <div class="column">
              <label class="text_Float_left" for="email">Email</label>
              <br>
              <input class="input_text_2 <?php echo (in_array("email", $_SESSION['espot']) ? 'invalid' : '' )?>" type="email" id="email"
                name="email" value="<?php echo $_SESSION['email']?>" placeholder="lmao@lalaland.com" required>
            </div>
            <!-- check if the input of phone number is already correct or not, if not then the input will be highlighted and the previous input still be kept for easier fix -->
            <div class="column2">
              <label class="text_Float_left" for="Pnumb">Phone number</label>
              <br>
              <input class="input_text_2 <?php echo (in_array("pnum", $_SESSION['espot']) ? 'invalid' : '' )?>" id="Pnumb" type="text" name="phone_number" value="<?php echo $_SESSION['pnum']?>" placeholder="e.g: 09x xxx xxxx" maxlength="10"  pattern="\d{10}">
            </div>
          </div>
  <!-- Less crucial contact info: Address in general -->
          <div>
            <fieldset class="part" id="fieldSet2">

            <!-- check if the input of street is already correct or not, if not then the input will be highlighted and the previous input still be kept for easier fix -->
            <label class="text_Float_left" for="sAdr"> Street Address</label>
              <input class="input_text_2 <?php echo (in_array("street", $_SESSION['espot']) ? 'invalid' : '' )?>" id="sAdr" type="text" name="street" value="<?php echo $_SESSION['street']?>"  placeholder="Your Street Address" maxlength="40" required>
            <!-- check if the input of suburb is already correct or not, if not then the input will be highlighted and the previous input still be kept for easier fix -->
              <label class="text_Float_left" for="dAdr">Suburb/Town</label>
              <input class="input_text_2 in_range_stuff <?php echo (in_array("suburb", $_SESSION['espot']) ? 'invalid' : '' )?>" id="dAdr" type="text" name="suburb" value="<?php echo $_SESSION['suburb']?>" placeholder="What District" maxlength="40" required>
            <!-- check if the input of state is already correct or not, if not then the input will be highlighted and the previous input still be kept for easier fix -->
              <label class="text_Float_left" for="cAdr">State</label>
              <select name="state" id="cAdr" class="<?php echo (in_array("state", $_SESSION['espot']) ? 'invalid' : '' )?>" required>
                <option value >Select one</option>
                <option value="VIC" <?php echo ($_SESSION["state"] == "VIC" ? 'selected' : '' )?>>VIC</option>
                <option value="NSW" <?php echo ($_SESSION["state"] == "NSW" ? 'selected' : '' )?>>NSW</option>
                <option value="QLD" <?php echo ($_SESSION["state"] == "QLD" ? 'selected' : '' )?>>QLD</option>
                <option value="NT" <?php echo ($_SESSION["state"] == "NT" ? 'selected' : '' )?>>NT</option>
                <option value="WA" <?php echo ($_SESSION["state"] == "WA" ? 'selected' : '' )?>>WA</option>
                <option value="SA" <?php echo ($_SESSION["state"] == "SA" ? 'selected' : '' )?>>SA</option>
                <option value="TAS" <?php echo ($_SESSION["state"] == "TAS" ? 'selected' : '' )?>>TAS</option>
                <option value="ACT" <?php echo ($_SESSION["state"] == "ACT" ? 'selected' : '' )?>>ACT</option>
              </select>
              <!-- check if the input of postcode is already correct or not, if not then the input will be highlighted and the previous input still be kept for easier fix -->
              <label class="text_Float_left" for="pAdr">Postcode</label>
              <input class="input_text_2 <?php echo (in_array("postcode", $_SESSION['espot']) ? 'invalid' : '' )?>" id="pAdr" type="text"
                name="postcode" value="<?php echo $_SESSION['postcode']?>" placeholder="Bet you need to look it up online!!!"
                maxlength="4" pattern="\d{6}" required>
  
            </fieldset>

          </div>

          <br>
          <div class="part flex">
            <!--  the previous selection will still be kept-->
            <label class="choice_label">Preferred Contact</label>
  
            <div class="option_content">
              <label class="precon_label" for="sp"> <input id="sp"
                  type="radio" name="pcon" value="sphone" <?php echo ($_SESSION["pcon"] == "sphone" ? 'checked' : '' )?>  > Phone
              </label>
  
              <label class="precon_label" for="sm"> <input id="sm"
                  type="radio" name="pcon" value="smail" <?php echo ($_SESSION["pcon"] == "smail" ? 'checked' : '' )?>  > Email </label>
  
              <label class="precon_label" for="direct"> <input id="direct" type="radio" name="pcon" value="direct" <?php echo ($_SESSION["pcon"] == "direct" ? 'checked' : '' )?>  > Direct </label>
            </div>
  
          </div>
          <br>
          <br>
          <br>
          <div class="part product_option">
            <!--  the previous selection will still be kept-->
            <label for="bookop" class="choice_label ">Which book do you want to order:</label>
  
            <select id="bookop" class="book" name="book">
              <option  value="Harry Potter and the half-blood prince - J.K Rowling" <?php echo ($_SESSION["book"] == "Harry Potter and the half-blood prince - J.K Rowling" ? 'selected' : '' )?>>Harry Potter and the half-blood prince - J.K Rowling</option>
              <option  value="Harry Potter and the Philosophers Stone - J.K Rowling" <?php echo (str_contains($_SESSION["book"], "Harry Potter and the Philosopher") ? "selected" : "") ?>>Harry Potter and the Philosopher's Stone - J.K Rowling</option>
              <option  value="Harry Potter and the Chamber of Secrets - J.K Rowling" <?php echo ($_SESSION["book"] == "Harry Potter and the Chamber of Secrets - J.K Rowling" ? 'selected' : '' )?>>Harry Potter and the Chamber of Secrets - J.K Rowling</option>
              <option  value="Harry Potter and the Order of the Phoenix - J.K Rowling" <?php echo ($_SESSION["book"] == "Harry Potter and the Order of the Phoenix - J.K Rowling" ? 'selected' : '' )?>>Harry Potter and the Order of the Phoenix - J.K Rowling</option>
            </select>

            <!-- check if the input of quantity is already correct or not, if not then the input will be highlighted and the previous input still be kept for easier fix -->
              <label for="quantity" class="choice_label quantity_align">Quantity:</label>
              <input class="input_text <?php echo (in_array("quantity", $_SESSION['espot']) ? 'invalid' : '' )?>" id="quantity" type="number" name="quantity" value="<?php echo $_SESSION['quantity']?>"  min="1" max="99" step="1" pattern="\d{3}">
            
          
          </div>

<!-- List of extra free stuff we give out for every order -->
  
<div class="part">
  <!--  the previous selection will still be kept-->
  <label class="choice_label">Choose extra goody (FREE):</label>

  <div class="option_div">

    <ul>
      <li class="Option">
        <label for="Opt_1"> <input class="checkbox" type="checkbox"
            id="Opt_1" name="type[]" <?php echo (in_array("E-book included", $_SESSION['type']) ?  'checked' : '' )?> value="E-book included">E-book
          included</label>
      </li>

      <li class="Option">
        <label for="Opt_2"> <input class="checkbox" type="checkbox"
            id="Opt_2" name="type[]"  <?php echo(in_array("Hardback", $_SESSION['type']) ?  'checked' : '' )?> value="Hardback">Hardback</label>
      </li>

      <li class="Option">
        <label for="Opt_3"> <input class="checkbox" type="checkbox" 
            id="Opt_3" name="type[]" <?php echo (in_array("Merch included", $_SESSION['type']) ? 'checked' : '' )?>  value="Merch included"> Merch
          included</label>
      </li>

      <li class="Option">
        <label for="Opt_4"> <input class="checkbox" type="checkbox"
            id="Opt_4" name="type[]" <?php echo (in_array("none", $_SESSION['type']) ? 'checked' : '' )?> value="none"> None</label>
      </li>
    </ul>
  </div>
</div>

<br>

  <!-- Radio select for choosing which type of card the customer want to use for payment -->
          <br>
          <div class="part flex">
  
            <label class="choice_label">Preferred Card</label>
  
            <div class="option_content">
              <label class="precon_label" for="visa"> <input id="visa"
                  type="radio" name="card" value="Visa" checked> Visa
              </label>
  
              <label class="precon_label" for="mastercard"> <input id="mastercard"
                  type="radio" name="card" value="Mastercard"> Mastercard </label>
  
              <label class="precon_label" for="jcb"> <input id="jcb"
                  type="radio" name="card" value="AE"> American Express </label>
            </div>
  
          </div>
          <br>
                                         <!-- Card information  -->
          <div class="row_01">
              <!-- highlight error -->
              <div class="column">
                  <label class="text_Float_left" for="cName">Card holder</label>
                  <input class="input_text_2 <?php echo (in_array("cname", $_SESSION['espot']) ? 'invalid' : '' )?>" id="cName" type="text" name="Card_name" placeholder="Nguyen Ha Huy Hoang" maxlength="25" pattern="[a-zA-Z\s]*" required>
              </div>
             <!-- highlight error -->
              <div class="column2">
               <label class="text_Float_left" for="cNumb">Card number</label>
               <input class="input_text_2 <?php echo (in_array("cnum", $_SESSION['espot']) ? 'invalid' : '' )?>" id="cNumb" type="text" name="Card_number" placeholder="e.g: 12xx xxxx xxxx" maxlength="16"  pattern="\d{12}">
            </div>
           </div>

           <div class="row2">
               <!-- highlight error -->
              <div class="column">
               <label class="text_Float_left" for="ex_Date">Expire Date</label>
               <input class="input_text_2 <?php echo (in_array("cexpire", $_SESSION['espot']) ? 'invalid' : '' )?>" id="ex_Date" type="text" name="card_expire_date" placeholder="MM/YY" maxlength="7"  pattern="^((0[1-9])|(1[0-2]))\/((2000)|(20[0-3][0-9]))$">
              </div>
             <!-- highlight error -->
              <div class="column2">
               <label class="text_Float_left" for="cvv">CVV</label>
               <input class="input_text_2 <?php echo (in_array("cvv", $_SESSION['espot']) ? 'invalid' : '' )?>" id="cvv" type="text" name="CVV" placeholder="e.g: 123" maxlength="3" pattern="\d{3}" required>
              </div>
            </div>




          <br>
          <div>
            <label class="text_Float_left" for="comment">Comment</label>
            <!-- keep previous comment -->
            <textarea id="comment" name="comment"
              placeholder="What do you want to say?">
              <?php echo $_SESSION['comment']?>
             
            </textarea>
          </div>
          </div>
        </fieldset>
 <!-- Submit button  -->
        <div class="submit">
          <input type="submit" id="submit" class="btn" title="Send"
            value="Check out">
        </div>
      </form>
      </article>
    </main>
    <!-- destroy the session -->
    <?php include 'includes/footer.inc'; session_unset(); session_destroy(); ?>  
</body>

</html>