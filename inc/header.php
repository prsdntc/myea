<?php require_once('./inc/session.php'); ?>
<?php
function get_time_ago($time){
    $time_diff = time() - $time;
    if ($time_diff < 1) {
        return 'less than 1 sec ago.';
    }
    $condition = array(12 * 30 * 24 * 60 * 60 => 'year',
                       30 * 24 * 60 * 60 => 'month',
                       24 * 60 * 60 => 'day',
                       60 * 60 => 'hour',
                       60 => 'minute',
                       1  => 'second');
    
    foreach($condition as $secs => $str){
        $d = $time_diff / $secs;
        
        if($d >= 1) {
            $t = round($d);
            return $t.' '.$str.($t > 1 ? 's' : '') . ' ago';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LFDSERFER0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LFDSERFER0');
</script>

        <style>
            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                border-top: none;
            }
        </style>
        <meta 
     name='viewport' 
     content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
        <title>My Eastrand - Explore The Eastern Region Of Gauteng</title>
        
        <!-- Ggle -->
        
        <meta name="title" content="My Eastrand - Explore The Eastrand">
        <meta name="description" content="Local search index and analysis of the East Rand Region of Gauteng">
        <meta name="keywords" content="my eastrand, germiston, katlehong, boksburg, kempton park, edenvale, duduza, thokoza, kwa-thema, vosloorus, brakpan, my east rand, my kasi, data, statistics">
        
        <!-- Fbk ---->
        <meta property="og:title" content="Local search index and analysis of the East Rand Region of Gauteng">
        <meta property="og:url" content="https://www.myeastrand.com">
        <meta property="og:image" content="./img/myeastrand-icon-logo.png">
        <meta property="og:type" content="website">
        <meta property="og:description" content="My Eastrand - Connecting local communities">
        
        <link rel="stylesheet" href="./style/w3.css" type="text/css">
        <link rel="stylesheet" href="./style/style.css" type="text/css">
        <link rel="stylesheet" href="./style/userprofile.css" type="text/css">
        <link rel="stylesheet" href="./style/header.css" type="text/css">
        <link rel="stylesheet" href="./style/registerpagedesign.css" type="text/css">
        <link rel="icon" href="./img/myeastrand-icon-logo.png">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <!-- Remember to include jQuery :) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <!-- jQuery Modal -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    </head>
    
    <body>
        <!-- Sidebar (hidden by default) -->
        <nav class="w3-sidebar w3-bar-block w3-top w3-animate-left" style="display:none;z-index:2;width:25%;min-width: 220px;background-color: #1e2321;color: white;font-family:'Roboto',sans-serif;" id="mySidebar">
            
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-green w3-bar-item w3-button w3-xlarge w3-center">
                x
            </a>
            
            <?php 
            if(isset($_SESSION['user'])){
                
                echo '
                <a href="mypage" onclick="w3_close()" class="w3-black w3-center w3-bar-item w3-button" style="font-weight: 600;">
                 <img src="./img/afri-hoer.jpg" class="w3-circle" alt="'.$user['firstname'].' profile display photo" style="max-width: 120px;width: 100%;height: 120px;border: 1px solid #fff;" /><br>&nbsp;&nbsp;'.$user['firstname'].'&nbsp'.$user['lastname'].'
                </a>';
            } 
            if (isset($_SESSION['admin'])){
                echo '
                <a href="./admin-panel/index.php" onclick="w3_close()" class="w3-black w3-center w3-bar-item w3-button" style="font-weight: 600;">
                 <img src="./img/afri-hoer.jpg" class="w3-circle" alt="profile display photo" style="max-width: 120px;width: 100%;height: 120px;border: 1px solid #fff;" /><br>Administrator
                </a>';
            }
            ?>
            <a href="homep" onclick="w3_close()" class="w3-bar-item  w3-button">
                <i class="fas fa-house"></i> &nbsp;&nbsp;Home
            </a>
            
            <a href="aboutus" onclick="w3_close()" class="w3-bar-item w3-button">
                <i class="fas fa-info-circle"></i> &nbsp;&nbsp;About
            </a>
            
            <a href="cookie" onclick="w3_close()" class="w3-bar-item  w3-button">
                <i class="fa fa-cookie"></i> &nbsp;&nbsp;Cookies 
            </a>
            
            <a href="contact" onclick="w3_close()" class="w3-bar-item w3-button">
                <i class="fas fa-info-circle"></i> &nbsp;&nbsp;Contact Us
            </a>
            
            
            <?php 
            if(isset($_SESSION['user']) || isset($_SESSION['admin'])){
                
                echo '
                <a href="signout" onclick="w3_close()" class="w3-bar-item w3-button">
                 <i class="fa fa-right-to-bracket"></i> &nbsp;&nbsp;Log Out
                </a>';
            }
            ?>
        </nav>
        <!--// Sidebar (hidden by default) -->
        
        <!-- Header navigation --->
        <header class="header w3-top w3-padding" style="background-color: #1e2321;">
            <div class="w3-content w3-animate-left" >
                <div class="w3-left " onclick="w3_open()"><span class="w3-button w3-round" style="color: white;">☰</span>
                        <img id="logoheader" class="" src="./img/My East Rand - Logo.png" alt="Header Navigation Logo">
                </div>
                
                <div class="w3-right search-container">
                    
                    <form class="w3-right" method="GET" action="result">
                        <input type="text" autocomplete="off" placeholder="My EastRand Search" name="q">
                        <?php
                        $set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $code=substr(str_shuffle($set), 0, 24);
                        ?>
                        <button name="qsub" value="<?php echo $code; ?>" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    
                </div>
            </div>
        </header>
        
        
    