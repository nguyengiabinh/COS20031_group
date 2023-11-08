<?php
    // ensure that this page cannot be access directly
    if(!(isset($_POST["uname"])) && !(isset($_POST["lname"])) && !(isset($_POST["email"])) && !(isset($_POST["phone number"])) && 
    !(isset($_POST["street"]))&& 
    !(isset($_POST["suburb"])) && 
    !(isset($_POST["state"])) && 
    !(isset($_POST["postcode"])) && !(isset($_POST["contact"]))  && !(isset($_POST["book"])) && !(isset($_POST["type[]"]))) {
        header ("location:payment.php");
    }

    // sanitise function that remove space, backslashes, and HTML
    function sanitise_input ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    

    // get the input value
    // error messages
    $errMsg = "";
    // save error into this array for later error demonstation in fix order
    $errSpot=array();
    // get firstname from payment
    if(isset($_POST["uname"])) {
        $firstname = sanitise_input($_POST["uname"]);
    } 
    // check if firstname is alphabetic
    if (!preg_match('/^[a-zA-Z\s]+$/', $firstname) && strlen($firstname)!=0) {
        $errMsg .= "<p>Your firstname cannot have number inside it.</p>";
        array_push($errSpot,"firstname");
    }
    // check if there is any blank space
    else if(strlen($firstname)==0 && trim($firstname)=="") {
        
        $errMsg .= "<p>Your firstname must be entered.</p>";
        array_push($errSpot,"firstname");
    }
    // get lastname from payment
    if(isset($_POST["lname"])) {
        $lastname = sanitise_input($_POST["lname"]);
    } 
    // check if lastname is alphabetic
    if (!preg_match('/^[a-zA-Z\s]+$/', $lastname)  && strlen($lastname)!=0) {
        $errMsg .= "<p>Your lastname cannot have number inside it.</p>";
        array_push($errSpot,"lastname");
    }
    // check if there is any blank space
    else if(strlen($lastname)==0 && trim($lastname)=="") {
        
        $errMsg .= "<p>Your lastname must be entered.</p>";
        array_push($errSpot,"lastname");
    }
    // get prefered contact
    if(strlen($_POST["pcon"])!=0) {
        $pcon = $_POST["pcon"];
    }
    // get email from payment
    if(strlen($_POST["email"])!=0) {
        $email = sanitise_input($_POST["email"]);
    } else {
        $errMsg .= "<p>Your email must be entered.</p>";
        array_push($errSpot,"email");
    }
    // get phone number from payment
    if(strlen($_POST["phone_number"])!=0) {
        $phoneNum = sanitise_input($_POST["phone_number"]);
    } else {
        $errMsg .= "<p>Your phone number must be entered.</p>";
        array_push($errSpot,"pnum");
    }
    // get ordered book from payment
    if(strlen($_POST["book"])!=0) {
        $book = sanitise_input($_POST["book"]);
        
    }
    // get order quantity from payment
    if(strlen($_POST["quantity"])!=0) {
        $quantity = sanitise_input($_POST["quantity"]);
    } else {
        $errMsg .= "<p>You need to enter how many products do you want.</p>";
        array_push($errSpot,"quantity");
    }
    // check if quantity is numeric
    if(!is_numeric($quantity) && strlen($_POST["quantity"])!=0) {
        $errMsg .= "<p>Your quantity need to be a number.</p>";
        array_push($errSpot,"quantity");
    }
    
    // get street form payment
    if(strlen($_POST["street"])!=0) {
        $street = sanitise_input($_POST["street"]);
    } else {
        $errMsg .= "<p>Your street address must be entered.</p>";
        array_push($errSpot,"street");
    }
    // get suburb from payment
    if(strlen($_POST["suburb"])!=0) {
        $suburb = sanitise_input($_POST["suburb"]);
    } else {
        $errMsg .= "<p>Your suburb must be entered.</p>";
        array_push($errSpot,"suburb");
    }
    // get state from payment
    if(!strlen($_POST["state"])==0 || $_POST["state"]=="Select one") {
        $state = $_POST["state"];
    } else {
        $errMsg .= "<p>Your state must be entered.</p>";
        array_push($errSpot,"state");
    }
    // check if street has less than 40 words
    if(strlen($street)>40) {
        $errMsg .= "<p>Your address should be <40 characters.</p>";
        array_push($errSpot,"street");
    }
    // check if surburb less than 20 words
    if(strlen($suburb)>20) {
        $errMsg .= "<p>Your suburb should be <20 characters.</p>";
        array_push($errSpot,"street");
    }
    // get postcode from payment
    if(strlen($_POST["postcode"])!=0) {
        $postcode = sanitise_input($_POST["postcode"]);
        
    } else {
        $errMsg .= "<p>Your postcode must be entered.</p>";
        array_push($errSpot,"postcode");
    }

    // if(isset($_POST["contact"])) {
    //     $contact = sanitise_input($_POST["contact"]);
    // } else {
    //     $errMsg .= "<p>Your contact must be choosen.</p>";
    // }

    // if(isset($_POST["book"])) {
    //     $book = sanitise_input($_POST["book"]);
    // } else {
    //     $errMsg .= "<p>Your book must be choosen.</p>";
    // }
    // get order type from payment
    if(isset($_POST["type"])) {
        
        $type = implode(',', $_POST['type']);
    } else {
        $errMsg .= "<p>Your order type must be entered.</p>";
        
    }
    // get comment from payment
    if(strlen($_POST["comment"])!=0) {
        $comment = sanitise_input($_POST["comment"]);
    } 

    // get card brand from payment
    if(isset($_POST["card"])) {
        $card = sanitise_input($_POST["card"]);
    } else {
        $errMsg .= "<p>Your book must be choosen.</p>";
        
    }
    // get card holder name from payment
    if(strlen($_POST["Card_name"])!=0) {
        $cname = sanitise_input($_POST["Card_name"]);
    }
    // check if card holder name is alphabetic
    if (!preg_match('/^[a-zA-Z\s]+$/', $cname)  && strlen($cname)!=0) {
        $errMsg .= "<p>Your card name cannot have number inside.</p>";
        array_push($errSpot,"cname");
    }
    // check if it is blank space
    else if(strlen($cname)==0 && trim($cname)=="") {
        
        $errMsg .= "<p>Your card name must be entered.</p>";
        array_push($errSpot,"cname");
    }


    // get card number from payment
    if(isset($_POST["Card_number"])) {
        $cnum = sanitise_input($_POST["Card_number"]);
    } else {
        $errMsg .= "<p>Your card numbers must be entered.</p>";
        array_push($errSpot,"cnum");
    }
    // get card expire date from payment
    if(isset($_POST["card_expire_date"])) {
        $cexpire = sanitise_input($_POST["card_expire_date"]);
    } else {
        $errMsg .= "<p>Your card expire date must be entered.</p>";
        array_push($errSpot,"cexpire");
    }
    // get cvv from payment
    if(strlen($_POST["CVV"])!=0) {
        $cvv = sanitise_input($_POST["CVV"]);
    } else {
        $errMsg .= "<p>Your card CVV must be entered.</p>";
        array_push($errSpot,"cvv");
    }
    // check if cvv is numeric
    if(!is_numeric($cvv) && strlen($_POST["CVV"])!=0) {
        $errMsg .= "<p>Your card CVV must be numeric.</p>";
        array_push($errSpot,"cvv");
    }
    
    

    // check postcode based on state
    switch($state) {
        case("NSW"):
            if(($postcode<1000) || ($postcode>2599 && $postcode<2619) || ($postcode>2899 && $postcode<2921)|| ($postcode>2999)) {
                $errMsg .= "<p>Your postcode must approriate with your state.</p>";
                array_push($errSpot,"postcode"); 
            }
            break;
        case("ACT"):
            if(($postcode<200) || ($postcode>299 && $postcode<2600) || ($postcode>2618 && $postcode<2900)|| ($postcode>2920)) {
                $errMsg .= "<p>Your postcode must approriate with your state.</p>";
                array_push($errSpot,"postcode"); 
            }
            break;
        case("VIC"):
            if(($postcode<3000) || ($postcode>3999 && $postcode<8000) || ($postcode>8999)) {
                $errMsg .= "<p>Your postcode must approriate with your state.</p>";
                array_push($errSpot,"postcode"); 
            }
            break;
        case("QLD"):
            if(($postcode<4000) || ($postcode>4999 && $postcode<9000) || ($postcode>9999)) {
                $errMsg .= "<p>Your postcode must approriate with your state.</p>";
                array_push($errSpot,"postcode"); 
            }
            break;
        case("SA"):
            if(($postcode<5000) || ($postcode>5799 && $postcode<5800) || ($postcode>5999)) {
                $errMsg .= "<p>Your postcode must approriate with your state.</p>";
                array_push($errSpot,"postcode"); 
            }
            break;
        case("WA"):
            if(($postcode<6000) || ($postcode>6797 && $postcode<6800) || ($postcode>6999)) {
                $errMsg .= "<p>Your postcode must approriate with your state.</p>";
                array_push($errSpot,"postcode"); 
            }
            break;
        case("TAS"):
            if(($postcode<7000) || ($postcode>7799 && $postcode<7800) || ($postcode>7999)) {
                $errMsg .= "<p>Your postcode must approriate with your state.</p>";
                array_push($errSpot,"postcode"); 
            }
            break;
        case("NT"):
            if(($postcode<800) || ($postcode>999)) {
                $errMsg .= "<p>Your postcode must approriate with your state.</p>";
                array_push($errSpot,"postcode"); 
            }
            break;
    }

    
    // check the values



    // check cvv and card number base on card brand
    switch($card){
        case("Visa"):
            // visa card must have 16 numbers start with 4
            if(!preg_match('/^([4-4][0-9]{15})$/', $cnum)){
                $errMsg .= "<p>Your card number must start with 4 and have 16 characters.</p>";
                array_push($errSpot,"cnum");
            }
            // visa card only has 3 cvv numbers
            if(strlen($cvv)!=3 && strlen($_POST["CVV"])!=0) {
                $errMsg .= "<p>Your card CVV must have 3 digits.</p>";
                array_push($errSpot,"cvv");
            }
            break;

        case("Mastercard"):
            // Mastercard has 16 number start from 51 to 55
            if(!preg_match('/^([5-5][1-5][0-9]{14})$/', $cnum)){
                $errMsg .= "<p>Your card number must start from 51 to 55 and have 16 characters.</p>";
                array_push($errSpot,"cnum");
                
            }
            // Mastercard card only has 3 cvv numbers
            if(strlen($cvv)!=3 && strlen($_POST["CVV"])!=0) {
                $errMsg .= "<p>Your card CVV must have 3 digits.</p>";
                array_push($errSpot,"cvv");
            }
            break;

        case("AE"):
            // america express must start with 34 or 27 and only has 15 numbers 
            if(!preg_match('/^([3-3][4-4][0-9]{13}|[3-3][7-7][0-9]{13})$/', $cnum)){
                $errMsg .= "<p>Your card number must start with 34 or 37 and have 15 characters.</p>";
                array_push($errSpot,"cnum");
            }
            // America Express has 4 cvv numbers
            if(strlen($cvv)!=4 && strlen($_POST["CVV"])!=0) {
                $errMsg .= "<p>Your card CVV must have 3 digits.</p>";
                array_push($errSpot,"cvv");
            }
            break;
    }
    

    // if(strlen($firstname)>=25) {
    //     $errMsg .= "<p>Your name should be <25 characters.</p>";
    //     array_push($errSpot,"firstname");
    // }

    // if (!preg_match('/^[a-zA-Z\s]+$/', $lastname) && strlen($lastname)!=0) {
    //     $errMsg .= "<p>Your name cannot have number inside it.</p>";
    //     array_push($errSpot,"lastname");
    // }

    // if(strlen($lastname)>=25) {
    //     $errMsg .= "<p>Your name should be <25 characters.</p>";
    //     array_push($errSpot,"lastname");
    // }


    // check if card expire date follow the mm/yy format
    if(!preg_match("/^(0[1-9]|1[0-2])\/?([0-9]{2})$/", $cexpire)) {
        $errMsg .= "<p>Your must provide appropriate expire date.</p>";
        array_push($errSpot,"cexpire");
    }



    

    
    // check if post code has 4 number or not
    if (strlen($postcode) != 4 && $postcode!=""){
        $errMsg .= "<p>Your postcode must be exactly 4 digits.</p>";
        array_push($errSpot,"postcode");
    }   
    // check if phone number is numeric
    if(!is_numeric($phoneNum) && $phoneNum!="") {
        
        $errMsg .= "<p>Your phone number must be numeric.</p>";
        array_push($errSpot,"pnum");
    }
    
    // check if phone number is less that 10 digit or not

    if(strlen($phoneNum)>10) {
        $errMsg .= "<p>Your phone number should be no longer than 10 digits.</p>";
        array_push($errSpot,"pnum");
    }

    // redirect to proper page after checking 
    if ($errMsg!="" ) {
        // if there is error in the payment input
        header ("location:fix_order.php");
    } else {

        require_once ("settings.php");
            
        $conn = @mysqli_connect($host,
                $user,
                $pwd,
                $sql_db
        );

            if (!$conn) {
                echo "<p>Database connection failure</p>";
            } else {

                
                
                
                // prepare customer name for database information push
                $name = $firstname .' '. $lastname;

                
                // calculation of order cost
                // $order_cost = 99.99 * $quantity;

                // create table if table does not exist
                // $query = "
                
                
            
                
                    
                    

                    
                //     ";

                // // create table
                // $result = mysqli_query($conn, $query);

                $errors = [];

                $table1 = "CREATE TABLE IF NOT EXISTS customers (
                    CUSTOMER_ID int(11) AUTO_INCREMENT,
                    CUSTOMER_NAME varchar(255) NOT NULL,
                    EMAIL varchar(255) NOT NULL,
                    PHONE_NUMBER varchar(255) NOT NULL,
                    CUST_STREET varchar(255) NOT NULL,
                    CUST_SUBURB varchar(255) NOT NULL,
                    CUST_STATE varchar(255) NOT NULL,
                    POSTCODE varchar(255) NOT NULL,
                    PREFERRED_CONTACT varchar(255) NOT NULL,
                    PRIMARY KEY  (CUSTOMER_ID)
                    
                    );";
                
                $table2 = "CREATE TABLE IF NOT EXISTS orders2 (
                    ORDER_ID int(11) AUTO_INCREMENT,
                    CUSTOMER_ID int(11),
                    CARD_SERVICE varchar(255) NOT NULL,
                    CARD_HOLDER varchar(255) NOT NULL,
                    CARD_NUMBER varchar(255) NOT NULL,
                    EXPIRE_DATE varchar(255) NOT NULL,
                    CVV varchar(255) NOT NULL,
                    EXTRA varchar(255) NOT NULL,
                    PRODUCT_ID int(11),
                    ORDER_QUANTITY int,
                    ORDER_COST float,
                    ORDER_TIME datetime,
                    ORDER_STATUS varchar(255) NOT NULL,
                    COMMENT varchar(255),
                    PRIMARY KEY  (ORDER_ID),
                    FOREIGN KEY (CUSTOMER_ID) REFERENCES customers(CUSTOMER_ID),
                    FOREIGN KEY (PRODUCT_ID) REFERENCES products(PRODUCT_ID)
                    );";
                



                $add1 = "
                




                insert into customers (CUSTOMER_NAME, EMAIL, PHONE_NUMBER, CUST_STREET, CUST_SUBURB, CUST_STATE, POSTCODE, PREFERRED_CONTACT) 
                select * from (select '$name','$email', '$phoneNum','$street','$suburb','$state','$postcode','$pcon' ) as tmp
                WHERE NOT EXISTS (SELECT * from customers where CUSTOMER_NAME = '$name' and EMAIL = '$email' and PHONE_NUMBER ='$phoneNum' and CUST_STREET = '$street' and CUST_SUBURB = '$suburb' and CUST_STATE = '$state' and POSTCODE ='$postcode' and PREFERRED_CONTACT='$pcon') limit 1;                

                ";


                $tables = [$table1, $table2, $add1];
                
                
                foreach($tables as $k => $sql){
                    $query = @$conn->query($sql);
                
                    if(!$query)
                       $errors[] = "Query $k : Creation failed ($conn->error)";
                    else
                       $errors[] = "Query $k : Creation done";
                }
                
                
                foreach($errors as $msg) {
                   echo "$msg <br>";
                }                
                        
                    
                // query to add data to to the database

                

                


                $add_query = "
                
                insert into orders2 (CUSTOMER_ID , CARD_SERVICE, CARD_HOLDER,  CARD_NUMBER, EXPIRE_DATE, CVV, EXTRA, PRODUCT_ID, ORDER_QUANTITY,  ORDER_COST, ORDER_TIME,  ORDER_STATUS, COMMENT) values ((select CUSTOMER_ID as CUSTOMER_ID from customers where CUSTOMER_NAME = '$name' and EMAIL = '$email' and PHONE_NUMBER ='$phoneNum' and CUST_STREET = '$street' and CUST_SUBURB = '$suburb' and CUST_STATE = '$state' and POSTCODE ='$postcode' and PREFERRED_CONTACT='$pcon'),'$card','$cname','$cnum','$cexpire','$cvv','$type',(SELECT PRODUCT_ID from products where '$book' LIKE CONCAT(BOOK_NAME, '%') ),'$quantity', (SELECT PRICE*$quantity from products where '$book' LIKE CONCAT(BOOK_NAME,'%')), now(), 'Pending', '$comment');

                ";
                echo $add_query;
                
                // add data
                $add_result = @mysqli_query($conn, $add_query);

                // get current date and time to forward to receipt
                date_default_timezone_set("Australia/Sydney");
                $date_of_query =  date("Y-m-d h:i:sa");
                
                    
                if(!$add_result ) {
                    echo "<p class=\"wrong\">something is wrong with ",$add_query,"</p>";
                } else {
                    $last_id = mysqli_insert_id($conn);
                    echo "<p class\"ok\">Successfully added new order record</p>";
                }

                $get_query = "
                
                select ORDER_COST from orders2 where ORDER_ID = '$last_id'

                ";
                $get_result = @mysqli_query($conn, $get_query);

                if(!$get_result ) {
                    echo "<p class=\"wrong\">something is wrong with ",$get_query,"</p>";
                } else {
                    
                    while ($row = mysqli_fetch_assoc($get_result)) {
                        $order_cost = $row["ORDER_COST"];
                    }
                }

                mysqli_close($conn);
            }
        header ("location:receipt.php");


    }


    

    // transfer data to other pages
    session_start();
    $_SESSION['espot'] = $errSpot;
    $_SESSION['err'] = $errMsg;
    
    $_SESSION['firstname'] = (isset($firstname) ? $firstname : "");
    $_SESSION['lastname'] = (isset($lastname) ? $lastname : "");

    $_SESSION['lastname'] = (isset($lastname) ? $lastname : "");
    $_SESSION['email'] = (isset($email) ? $email : "");
    $_SESSION['pnum'] = (isset($phoneNum) ? $phoneNum : "");
    // $_SESSION['address'] = (isset($address)? $address: "");
    $_SESSION['postcode'] = (isset($postcode)? $postcode: "");
   
    
    $_SESSION['type'] = (isset($_POST['type'])? $_POST['type']: array());
    $_SESSION['type_str'] = (isset($type)? $type: "");
    $_SESSION['street'] = (isset($street)? $street: "");
    $_SESSION['suburb'] = (isset($suburb)? $suburb: "");
    $_SESSION['state'] = (isset($state)? $state: "");
    $_SESSION['pcon'] = (isset($pcon)? $pcon: "");
    $_SESSION['quantity'] = (isset($quantity)? $quantity: "");
    $_SESSION['comment'] = (isset($comment)? $comment: "");
    $_SESSION['book'] = (isset($book)? $book: "");
    $_SESSION['lastid'] = (isset($last_id)? $last_id: "");


    $_SESSION['date'] = (isset($date_of_query)? $date_of_query: "");
    $_SESSION['card'] = (isset($card)? $card: "");
    $_SESSION['cname'] = (isset($cname)? $cname: "");
    $_SESSION['cexpire'] = (isset($cexpire)? $cexpire: "");
    $_SESSION['cnum'] = (isset($cnum)? $cnum: "");
    $_SESSION['cvv'] = (isset($cvv)? $cvv: "");
    $_SESSION['cost'] = (isset($order_cost)? $order_cost: "");
    $_SESSION['date'] = (isset($date_of_query)? $date_of_query: "");
?>
