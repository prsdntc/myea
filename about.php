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
                text-decoration: none;
            }
            
            .aboutheader a:hover{
                color: #444;
            }
            
            #header{
                color: white;
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
            #logoheader2{
                margin-top: 5px;
                max-width: 80px;
                width: 100%;
            }
            /* Create three equal columns that floats next to each other */
        </style>
        <title>About Us - My EastRand</title>
        <meta name="title" content="About us - My Eastrand">
        <meta name="description" content="My Eastrand - Connecting local communitiese">
        <meta name="keywords" content="my eastrand, germiston, katlehong, boksburg, kempton park, edenvale, duduza, thokoza, kwa-thema, vosloorus, brakpan, my east rand, my kasi, data, statistics">
        
        <!-- Facebook Share link ---->
        <meta property="og:title" content="My Eastrand - Explore The Eastrand">
        <meta property="og:url" content="http://www.myeastrand.com">
        <meta property="og:image" content="https://myeastrand.com/img/carnival-city.jpg">
        <meta property="og:type" content="website">
        <meta property="og:description" content="My Eastrand - Explore the East Rand">
        
        
        <!-- Twitter Share link --->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="About Us - Explore the East Rand" />
        <meta name="twitter:description" content="The East Rand online portal." />
        <meta name="twitter:image" content="https://myeastrand.com/img/carnival-city.jpg" />
        
        <link rel="stylesheet" href="./style/w3.css" type="text/css">
        <link rel="stylesheet" href="./style/style.css" type="text/css">
        <link rel="stylesheet" href="./style/header.css" type="text/css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    </head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <body style="background-color: white;">


        
        <!--- header menu --->
        <header class="w3-container aboutheader">
            <div class="w3-content w3-animate-left" style="max-width: 1200px;">
                <div class="w3-left w3-padding" style="padding: 2px;margin-left: 5px;" onclick="w3_open()">
                    
                    <img id="logoheader2" class="w3-round" src="./img/My East Rand - Logo.png" alt="Header Navigation Logo">
                </div>
                
                <div class="w3-right w3-padding" id="header"> <!----->
                    <a href="home" class="w3-button w3-round"><i class="fa fa-home"></i> Home</a>
                    <a href="aboutus" class="active-menu"><i class="fa fa-info"></i> About Us</a>
                    <a href="contact" class="w3-button w3-round"><i class="fa fa-phone"></i> Contact</a>
                    <a href="cookie" class="w3-button w3-round"><i class="fa fa-cookie"></i> Cookie Policy</a>
                    
                </div>
            </div>
        </header>
        
        <div class="w3-container aboutus">
            
            <div class="w3-row-padding">
                <div class="w3-half">
                    <br><br>
                    <br>
                    <h1>Local Search Index of The East Rand.</h1>
                </div>
                
                <div class="w3-half">
                    <img src="./img/people-community.png" alt="Having fun" style="max-width: 490px;width: 100%;">
                </div>
            </div>
            
        </div>
        
        <div class="w3-container whatis w3-margin">
            <div class="w3-content" style="">
                <h2>What is The East Rand?</h2>
                <p>The East Rand is a major urban area located in the Gauteng province of South Africa. It is the urban eastern part of Witwatersrand that is functionally merged with the Johannesburg conurbation. The region extends from Alberton in the west to Springs in the east, and south down to Nigel. It includes the towns of Bedfordview, Benoni, Boksburg, Brakpan, Edenvale, Germiston, Kempton Park, Linksfield and Modderfontein.<em>(<strong>Source&#58;</strong> <a href="https://en.wikipedia.org/wiki/East_Rand">Wikipedia</a>)</em></p>
                
                <div>                    
                    <!-- Slide Show-->
                    <div id="carouselExampleCaptions" class="carousel slide w3-mobile" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            
                            <!-- indicator #1 -->
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            
                            <!-- indicator #2 -->
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            
                            <!-- indicator #3 -->
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            
                            <!-- indicator #4 -->
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        
                        <!-- The Slides --->
                        <div class="carousel-inner">
                            
                            <!-- Slide #1 -->
                            <div class="carousel-item active w3-green">
                                <img src="./img/carnival-city.jpg" class="d-block w-100" alt="Carnival City">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Carnival City</h5>
                                    <p>The Fun never fades at Carnival City.</p>
                                </div>
                            </div>
                            
                            <!-- Slide #2 -->
                            <div class="carousel-item w3-lime">
                                <img src="./img/dellvile swimmingpool.jpg" class="d-block w-100" alt="Delville Swimming Pool">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Delville Swimming Pool</h5>
                                    <p>Germiston, Gauteng.</p>
                                </div>
                            </div>
                            
                            <!-- Slide #3 -->
                            <div class="carousel-item w3-orange">
                                <img src="./img/germiston-city.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Germiston</h5>
                                    <p>Germiston lies in the Rand gold fields.</p>
                                </div>
                            </div>
                            
                            <!-- Slide #4 --->
                            <div class="carousel-item w3-blue">
                                <img src="./img/spruitview-germiston-gauteng.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Spruitview</h5>
                                    <p>Spyland, K1!</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Back - Forward Buttons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- Slide Show-->
                </div>
                
            </div>
        </div>
                <!--// End row -->




<?php require_once 'inc/footer.php'; ?>