<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- requirement head template -->
  <meta name="description" content="Receipt Page">
  <meta name="keywords" content="HTML, PHP, webpage">
  <meta name="author" content="Nguyen Duc Thinh">
  <!-- responsive setup -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="images/favico/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favico/favicon-16x16.png">
  <link rel="manifest" href="images/favico/site.webmanifest">
  <!-- style sheet link -->
  <link rel="stylesheet" href="./styles/enhancements.css">
  <link rel="stylesheet" href="./styles/styles.css">
  <title>Receipt</title>
</head>

<body>
  <?php include 'includes/header.inc'; ?>
  <main id="receipt">
    <!-- get data from session of process_order.php -->
    <?php

    session_start();
    if ($_SESSION['lastid']=="") {
      header('location:payment.php');        //redirect to payment.php if attempted to access directly
      exit;
    }
    
    // check get order information from process_order
    $id = $_SESSION["lastid"];

    $cust_name = $_SESSION['firstname'] ." ". $_SESSION['lastname'];
    $email = $_SESSION['email'];
    $pnum= $_SESSION['pnum'];
    $street =  $_SESSION['street'];
    $suburb =  $_SESSION['suburb'];
    $state = $_SESSION['state'];
    $postcode = $_SESSION['postcode'];
    $pcon =  $_SESSION['pcon'];
    $card = $_SESSION['card'];
    $cname = $_SESSION['cname'];
    $cnum =  $_SESSION['cnum'];
    $cexpire = $_SESSION['cexpire'];
    $cvv =   $_SESSION['cvv'];
    $extra =  $_SESSION['type_str'];
    $order_product =  $_SESSION['book'];
    $order_quantity =   $_SESSION['quantity'];
    $order_cost = $_SESSION['cost'];
    $order_time = $_SESSION['date'];
    $order_status = "PENDING";                
    
            


    ?>

    <div>
      <div class="grid receipt">
        <div class="grid-body">
          <div class="receipt-title">
            <div class="row">
              <div>
              </div>
            </div>
            <br>
            <div class="row">
              <div>
                <h1>Receipt</h1>
                <h2>
                  <span class="small">Order #<?php echo $id; ?></span>
                </h2>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div>
              <!-- print the customer information -->
              <h3>Billed To:</h3>
              <address>

                <?php echo "Customer: $cust_name"; ?><br>
                <?php echo "Address: $street, $suburb, $state"; ?><br>
                <?php echo "Postcode: $postcode"; ?><br>
                <?php echo "Phone Number: $pnum"; ?><br>
                <?php echo "Email: $email"; ?><br>
                <?php echo "Preferred Contact: $pcon"; ?><br>
              </address>
            </div>
          </div>
          <!-- print payment information -->
          <div class="row">
            <div>
              <br>
              <h3>Payment Method:</h3>
              <address>

                <!-- majority of the credit card number will be hidden -->
                <?php echo "Card Service: $card"; ?><br>
                <?php echo "Card Holder: $cname"; ?><br>
                <?php echo  $card == "AE" ? "Card Number: ***********" . $cnum[11] . $cnum[12] . $cnum[13] . $cnum[14] : "Card Number: ************" . $cnum[12] . $cnum[13] . $cnum[14] . $cnum[15]; ?><br>

               

              </address>
            </div>
            <div class="textright">
              <div></div>
              <address>
                <strong>Order Date:</strong><br>
                <!-- output date from session -->
                <?php echo $order_time; ?><br><br>
              </address>
            </div>
          </div>
          <div class="row">
            <div>
              <h3>ORDER SUMMARY</h3>
              <table class="custom-table">
                <thead>
                  <tr class="line">
                    <td><strong>#</strong></td>
                    <td class="textcenter"><strong>BOOK</strong></td>
                    <td class="textcenter"><strong>QUANTITY</strong></td>
                    <td class="textcenter"><strong>EXTRA</strong></td>
                    <td class="textcenter"><strong>PRICE</strong></td>
                    <td class="textcenter"><strong>SUBTOTAL</strong></td>
                  </tr>
                </thead>
                <tr>
                  <!-- print order information -->
                  <td><?php echo $id; ?></td>
                  <td><?php echo $order_product; ?></td>
                  <td class="textcenter"><?php echo $order_quantity; ?></td>
                  <td class="textcenter"><?php echo $extra; ?></td>
                  <td class="textcenter"><?php echo "$99.99"; ?></td>
                  <td class="textcenter"><?php echo "$$order_cost"; ?></td>

                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  <?php include 'includes/footer.inc';
  // destroy the session
  session_unset();
  session_destroy();   ?>
</body>

</html>