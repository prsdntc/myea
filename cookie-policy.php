<?php require_once 'inc/session.php'; ?>
<html lang="en" style="font-family: Roboto, Arial, sans-serif;">
    <head>
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LFDSERFER0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LFDSERFER0');
</script>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
        <style>
            .aboutus{
                background-color: #ffffff;
                color: #333836;
                font-weight: 500;
                font-style: normal;
            }
            .aboutus .active-menu{
                background-color: #333836;
                color: white;
            }
            .aboutus h1{
                font-size: 65px;
                line-height: 1;
            }
            .aboutheader{
                background-color: #1e2321;
                color: white;
            }
            
            .aboutheader a{
                padding: 12px;
                text-decoration: none;
            }
            
            .aboutheader a:hover{
                color: #444;
            }
            
            
            #header{
                color: white;
                font-size: 15px; 
                font-weight: bold;
                transition: 0.2s;
                top: 0;
                padding-top: 14px;
            }
            
            .headerbanner{}
            
            .headerbanner img{
                width: 100%;
                object-fit: cover;
            }
            .cookies{
                margin-top: 70px;
            }
            .cookies h1{
                font-size: 48px;
            }
            .cookies h1, h2{
                font-style: normal;
                font-weight: 500;
                color: #1e2321;
                line-height: 1;
            }
            .cookies p{
                font-size: 17px;
                color: #757575;
                line-height: 1.2;
            }
            #logoheader2{
                margin-top: 5px;
                max-width: 80px;
                width: 100%;
            }
            
            /* Create three equal columns that floats next to each other */
        </style>
        <title>About Us| My EastRand</title>
        <link rel="stylesheet" href="./style/w3.css" type="text/css">
        <link rel="stylesheet" href="./style/style.css" type="text/css">
        <link rel="stylesheet" href="./style/header.css" type="text/css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    </head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <body style="background-color: white;">


        
        <!--- header menu --->
        <header class="w3-top aboutheader"  style="height: 52px;">
            <div class="w3-content w3-animate-left" style="max-width: 1200px;">
                <div class="w3-left w3-round" style="padding: 2px;margin-left: 5px;" onclick="w3_open()">
                    
                    <img id="logoheader2" class="w3-round" src="./img/mainheaderlogo2.svg" alt="Header Navigation Logo">
                </div>
                
                <div class="w3-right " id="header"> <!----->
                    <a href="home"><i class="fa fa-home"></i> Home</a>
                    <a href="aboutus" class="active-menu"><i class="fa fa-info"></i> About Us</a>
                    <a href="contact"><i class="fa fa-phone"></i> Contact</a>
                    <a href="cookie"><i class="fa fa-cookie"></i> Cookie Policy</a>
                    
                </div>
            </div>
        </header>
        
        <div class="w3-container cookies">
            <div class="w3-content w3-container w3-round" style="border: 1px solid #f2f2f2;max-width: 700px;">
                <div class="w3-row">
                <div class="w3-half">
                    <h1>Cookies and other storage technologies</h1>
                </div>
                
                <div class="w3-half" style="max-width: 250px;width: 100%;margin-top: 30px;">
                    <img src="img/BcarkGMXi.jpg" alt="Cookie cartoon drawing" style="max-width:110px;width:100%;">
                </div> 
            </div>
                
                <p>Cookies are small pieces of text used to store information on web browsers. Cookies are used to store and receive identifiers and other information on computers &amp; phones. Other technologies include data that we store on your web device or browser, which are also used for similar purposes.</p>
                <br>
                
                <p>We use cookies if you visit our website or have a My Eastrand account.Cookies enable My Eastrand to offer you the best experience based on your previous data and information, and  whether or not you are registered or logged in.
                <strong>This policy explains how we use cookies</strong>
                <br>
                
                <h2>Why do we use cookies?</h2>
                <p>Cookies help us improve and protect My Eastrand, such as by personalising content, tailoring and measuring ads, and providing a safer experience. The cookies that we use include session cookies, which are deleted when you close your browser, and persistent cookies, which stay in your browser until they expire or you delete them. The cookies that we use may change from time to time as we improve My Eastrand, we use them for the following:</p>
                
                <blockquote>
                    
                    <!-- Security --->
                    <h4>Security</h4>
                    <p>We use cookies to help us keep your account and data , safe and secure. Cookies can help us identify and impose additional security measures when some attempts to access your account without authorisation.</p>
                    <br>
                    <p>Cookies help us fight spam and phishing attacks by enabling us to identitfy computers that are used to create large numbers of fake My Eastrand accounts.</p>
                    
                    <!--Advertising --->
                    <h4>Advertising and recommendations</h4>
                    <p>We use cookies to help us show ads and to make recommendations for business &amp; other organisations to people who may be interested in the services.</p>
                    
                    <!-- Performance --->
                    <h4>Performance</h4>
                    <p>We use cookies to provide you with the best experience possible. Cookies help us route traffic between servers and understand how quickly My Eastand loads for different devices.</p>
                </blockquote>
                <br>
                <p><strong>Date of last revision:</strong> 01 October 2022</p>
            </div>
        </div>

<?php require_once 'inc/footer.php'; ?>