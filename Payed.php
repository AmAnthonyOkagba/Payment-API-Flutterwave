<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payed | Payment Gateway</title>
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
                <!-- <a class="navbar-brand" href="#">GNA</a> -->
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
                <div class="form col-md-6 border shadow-sm container">
                    <div class="pay text-center pt-3">
                        <h3 style="color: #1E3B5D; font-weight: bold;"> Payment Was Successful</h3>
                    </div>
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