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
            .whatis{
            }
            .whatis p{
                line-height: 1.1;
                font-style: normal;
                color: #444;
                font-size:17px;
            }
            .whatis h2{
                font-weight: 600;
                font-size: 29px;
                line-height: 1;
                color: #1e2321;
            }
            input[type="text"]{
                border: none;
                border-bottom: 1px solid #2ca05a;
                width: 100%;
                padding: 10px;
                font-size: 17px;
                color: #444;
                font-weight: 500;
                margin-top: 10px;
            }
            input[type="text"]:focus{
                border: none;
                outline: none;
                box-shadow: 0 2px 0 0 #2ca05a;
                border-bottom: 1px solid #2ca05a;
            }
            textarea{
                display: block;
                outline: none;
                border: 1px solid #2ca05a;
                width:  100%;
                padding: 10px;
                font-size: 17px;
                color: #444;
                font-weight: 500;
                border-radius: 7px;
                resize: none;
                margin-top: 10px;
            }
            textarea:focus{
                border: none;
                outline: none;
                box-shadow: 0 2px 0 0 #2ca05a;
                border: 1px solid #2ca05a;
            }
            button{
                width: 100%;
                padding: 10px 25px;
                font-size: 20px;
                font-weight: 600;
                border: none;
                outline: none;
                background: #444;
                color: #fff;
                border-radius: 5px;
                cursor: pointer;
            }
            label{
                font-weight: 600;
                color: #666;
            }
            .w3-half a{
                text-decoration: none;
                color:#666;
                font-weight: 600;
            }
            .w3-half a:hover{
                color: #2ca05a;
            }
            .w3-half i{
                font-size: 39px;
                color: #666;
            }
            .w3-half i:hover{
               color:#2ca05a;
            }
            
            #logoheader2{
                margin-top: 5px;
                max-width: 80px;
                width: 100%;
            }
            /* Create three equal columns that floats next to each other */
        </style>
        <title>Contact Us - My Eastrand</title>
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
        
        <div class="w3-content w3-container">
            <div  style="margin-top:49px;">
                <h1>Contact Us</h1>
                <img src="img/Contact-uz.png" alt="Cartoon-alt" style="max-width: 250px;">
                
                <div class="w3-row-padding">
                    
                    <div class="w3-half">
                        <form action="#" method="POST">
                            
                            <label for="fullname">Full name:</label>
                            <input type="text" name="fullname" placeholder="eg. John Witherspoon">
                            <br><br>
                            
                            <label for="email">Email:</label>
                            <br>
                            <input type="text" name="email" placeholder="myemail@email.com">
                            <br><br>
                            
                            <label for="message">Message:</label>
                            <br>
                            <br>
                            <textarea cols="3"></textarea>
                            <br><br>
                            
                            <button name="sendmsg" type="submit"><i class="fa fa-send"></i> Send Message</button>
                        </form>
                    </div>
                    
                    <div class="w3-half">
                        <div class="w3-row-padding" style="margin-top: 10px;">
                            <div class="w3-half">
                                <div class="w3-center">
                                    <i class="fa-brands fa-facebook" style="font-size: 39px;"></i>
                                    <a href="https://www.facebook.com/myeastrand1" class="w3-block">Facebook</a>
                                </div>
                            </div>
                            <div class="w3-half">
                                <div class="w3-center">
                                    <i class="fa-brands fa-instagram" style="font-size: 39px;"></i>
                                    <a href="https://www.instagram.com/myeastrand" class="w3-block">Instagram</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>