<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | Payment Gateway</title>
        <meta name="description" content="">
        <meta data-react-helmet="true" name="description" content="">
        <meta data-react-helmet="true" name="keywords" content="">
        <meta data-react-helmet="true" property="og:title" content="">
        <meta data-react-helmet="true" property="og:description" content="">
        <meta data-react-helmet="true" property="og:type" content="website">
        <meta data-react-helmet="true" property="og:url" content="">
        <meta data-react-helmet="true" property="og:site_name" content="">
        <meta name="author" content="Anthony Okagba">

        <link rel="apple-touch-icon" href="img/logo.png">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

        <link rel="stylesheet" href="css/css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-sm navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="index.php">Payment Gateway</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
          
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container p-4 pt-5">
            <div class="row text-center pt-5">
                <div class="form col-md-5 border shadow-sm container">

                    <?php

                    if(isset($_POST['pbtn']))
                    {
                        $name = isset( $_POST[ "name" ] ) ? trim( $_POST[ "name" ] ) : "";
                        $email = isset( $_POST[ "email" ] ) ? trim( $_POST[ "email" ] ) : "";
                        $number = isset( $_POST[ "number" ] ) ? trim( $_POST[ "number" ] ) : "";
                        $amount = isset( $_POST[ "amount" ] ) ? trim( $_POST[ "amount" ] ) : "";
                        $name = ucwords( $name );
                        $email = strtolower( $email );
                    

                    ?>

                        <div class="pay text-center pt-3">
                            <h3 style="color: #1E3B5D; font-weight: bold;">Confirm Payment</h3>
                        </div>
                        <form id="paymentForm">
                            
                            <div class="card-body p-3 ">
                                <div class="form-group row">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $name ?>" disabled>
                                    <input type="text" name="name" class="form-control" value="<?php echo $name ?>" hidden>
                                </div>
                                <div class="form-group row">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $email ?>" disabled>
                                    <input type="email" name="email" class="form-control" value="<?php echo $email ?>" hidden>
                                </div>
                                <div class="form-group row">
                                    <label>Phone Number </label>
                                    <input type="tel" name="number" class="form-control" value="<?php echo $number ?>" disabled>
                                    <input type="tel" name="number" class="form-control" value="<?php echo $number ?>" hidden>
                                </div>
                                <div class="form-group row">
                                    <label>Amount</label>
                                    <input type="tel" name="amount" class="form-control" value="<?php echo $amount ?>" disabled>
                                    <input type="tel" name="amount" class="form-control" value="<?php echo $amount ?>" hidden>
                                </div>
                                <!-- <button name="" class="btn text-color" type="submit" onclick="payWithPaystack()">Continue PAY</button> -->
                                
                                <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                                <button type="button" onClick="payWithRave()" class="btn text-color">Pay Now</button>
                            </div>
                        </form>
                    <?php
                    } else
                    {
                        
                        ?>
                        <div class="pay text-center pt-3">
                            <h3 style="color: #1E3B5D; font-weight: bold;">Make Payment</h3>
                        </div>
                        <form action="" method="post">
    
                        <div class="card-body p-3 ">
                            <div class="form-group row">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="form-group row">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group row">
                                <label>Phone Number </label>
                                <input type="tel" name="number" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group row">
                                <label>Amount</label>
                                <input type="tel" name="amount" class="form-control" placeholder="Amount" required>
                            </div>
                            <button name="pbtn" class="btn text-color" type="submit">PAY</button>
                        </div>
                        </form>
                        
                        <?php 
                    }
                    ?>
    
                </div>
            </div>
        </div>





        <footer>
            <div class="text-center pt-5" style="color: rgb(36, 36, 36);">
                <div class="copyright text-secondary" style="background-color: rgb(216, 216, 216);">
                    <span>
                        <a href="https://facebook.com/CapableBohz" title="Facebook"><i class="fab fa-facebook p-1"> </i></a>
                        <a href="https://twitter.com/AmAnthonyOkagba" title="Twitter"><i class="fab fa-twitter p-1"> </i></a>
                        <a href="https://linkedin.com/in/AmAnthonyOkagba" title="LinkedIn"><i class="fab fa-linkedin p-1"> </i></a>
                        <a href="https://github.com/AmAnthonyOkagba" title="Git Hub"><i class="fab fa-github p-1"> </i></a>
                        <a href="https://wa.me/+2349082388267" title="WhatsApp"><i class="fab fa-whatsapp p-1"> </i></a>

                    </span><br>
                    <small>Copyright © 2021 Anthony Okagba. | All Rights Reserved.</small>
                </div>
            </div>
        </footer>

        
        <style>
            #myBtn {
                width: 40px;
                height: 40px;
                text-indent: -9999px;
                opacity: 0.3;
                position: fixed;
                bottom: 20px;
                right: 40px;
                display: none;
                background-image: url(img/icon_top.png);
            }
            
            #myBtn:hover {
                opacity: 0.8;
            }
        </style>  

        <a href="#" class="scrollup" onclick="topFunction()" id="myBtn" title="Go to top"></a>

        <script>

            // Flutterwave API
            const API_publicKey = "FLWPUBK_TEST-76f3dd058cc30814af6c917dcd8b700b-X";

            function payWithRave() {
                var x = getpaidSetup({
                    PBFPubKey: API_publicKey,
                    customer_email: "<?php echo $email ?>",
                    amount: <?php echo $amount; ?>,
                    customer_phone: "<?php echo $number ?>",
                    currency: "NGN",
                    hosted_payment: 1, // modal would open in a new page
                    redirect_url: "http://localhost/payment%20gateway/payed.php",// we call your url once payment is done and append response as query params.
                    txref: " boohz-e333444rr",
                    meta: [{
                        metaname: "flightID",
                        metavalue: "AP1234"
                    }],
                    onclose: function() {},
                    callback: function(response) {
                        var txref = response.data.txRef; // collect flwRef returned and pass to a server page to complete status check.
                        console.log("This is the response returned after a charge", response);
                        if (
                            response.data.chargeResponseCode == "00" ||
                            response.data.chargeResponseCode == "0"
                        ) {
                            "http://localhost/payment%20gateway/payed.php"
                            // redirect to a success page
                        } else {
                            "https://localhost/payment%20gateway/index.php"
                            // redirect to a failure page.
                        }

                        x.close(); // use this to close the modal immediately after payment.
                    }
                });
            }


            // Get the button
            var mybutton = document.getElementById("myBtn");
            
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
                } else {
                mybutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>










        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>