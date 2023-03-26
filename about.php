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
        
        <!-- Fbk ---->
        <meta property="og:title" content="My Eastrand - Explore The Eastrand">
        <meta property="og:url" content="http://www.myeastrand.com">
        <meta property="og:image" content="./img/src.png">
        <meta property="og:type" content="website">
        <meta property="og:description" content="My Eastrand - Connecting local communities">
        
        
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
                    
                    <img id="logoheader2" class="w3-round" src="./img/My East Rand - Logo.png" alt="Header Navigation Logo">
                </div>
                
                <div class="w3-right " id="header"> <!----->
                    <a href="home"><i class="fa fa-home"></i> Home</a>
                    <a href="aboutus" class="active-menu"><i class="fa fa-info"></i> About Us</a>
                    <a href="contact"><i class="fa fa-phone"></i> Contact</a>
                    <a href="cookie"><i class="fa fa-cookie"></i> Cookie Policy</a>
                    
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
            <div class="w3-center w3-content" style="max-width: 300px;">
                <h2>What is The East Rand?</h2>
                <p>The East Rand is one of three Metropolitan Municipalities in Gauteng, South Africa.</p>
            </div>
        </div>
            <div class="w3-content" style="max-width: 960px;margin-bottom:100px;">
                
                <div class="" style="margin-top:40px;margin-bottom:40px;">
                    
                    <!-- about -->
                    <article style="font-style: normal;color: #444;font-size:24px;line-height: 1.1;color: #344854;margin-top: 40px;margin-bottom: 40px;font-weight: 100;">
                        <div class="w3-row-padding">
                            <div class="w3-half">
                                <img class="w3-round" src="img/Johann_Snyman_-_Bedfordview,_Germiston,_South_Africa.jpg" alt="Germiston Bedford View" style="max-width: 450px;width: 100%;">
                            </div>
                            <div class="w3-half w3-padding">
                                <p>The East Rand the urban Eastern region of Gauteng, stretches from Tembisa to Nigel. It includes towns of Katlehong, Vosloorus, Germiston, Boksburg, Brakpan, Kempton Park, Benoni, Springs, Kwa-Thema, Daveyton, Etwatwa &amp; Thokoza.</p>
                            </div>
                        </div>
                    </article>
                </div>
                
                <div class="w3-center w3-margin">
                    <h3 style="line-height: 1;color: #444;">Newsroom</h3>
                </div>
                
                <!--- Start row -->
                <div class="w3-row">
                    
                        <?php
                        $conn = $pdo->open();
                        $stmt = $conn->prepare("SELECT * FROM newsroom ORDER BY post_date LIMIT 2");
                        $stmt->execute();
                        
                        foreach($stmt as $row){
                            echo"<div class='w3-half w3-mobile'>
                                 <div class='w3-container w3-margin'>
                                 
                                 <img class='w3-card w3-round' style='max-width:370px;width:100%;height: 250px;object-fit: cover;' alt=".$row['title']." src='./newspostimg/".$row['image']."'/>
                                
                                 <h3 style='color:#666;line-height: 0.9;' class='w3-hover-opacity><a style='text-decoration: none;color:#344854;' href='newsroom.php?read=".$row['link_add']."'>".$row['title']."</a></h3>
                                 
                                 <span class='w3-center' style='color:#344854;font-weight: 500;line-height:1.5;'>".date('M d, Y', strtotime($row['post_date']))."</span>
                                 <div class='w3-opacity'  style='line-height:1.1; font-style: italic;'>".$row['sub_title']."</div>
                                 </div>
                                 </div>";
                        }
                        ?>
                        </div>
                </div>
                <!--// End row -->




<?php require_once 'inc/footer.php'; ?>