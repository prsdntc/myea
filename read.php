<?php
include './inc/dbcon.php';
session_start();

//Get date on the post FUNCTION
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

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
$url = "http://";
$url.= $_SERVER['HTTP_HOST'];
$url.= $_SERVER['REQUEST_URI'];
$url;




if(($_GET['v']== '')){
	header('location: home');
}

$article_key = $_GET['v'];

$conn = $pdo->open();

try{
    $stmt = $conn->prepare("SELECT * FROM articles WHERE id='".$article_key."' ");
    $stmt->execute(['articles' => $postname]);
    $postname = $stmt->fetch();
}
catch(PDOException $e){
    echo "There is some problem in connection: " . $e->getMessage();
}


if(($_GET['v']== '')){
	header('location: homep');
}

?>
<!DOCTYPE html>
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
        <style>
        </style>
        <title><?php echo $postname['heading']; ?> - My EastRand</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta property="og:title" content="<?php echo $postname['heading']; ?>" />
        <meta property="og:description" content="<?php echo $postname['description']; ?>" />
        <meta property="og:image" content="http://www.myeastrand.com/img/<?php echo $postname['photo']; ?>" />
        <meta property="og:url" content="http://www.myeastrand.com/watch?v=<?php echo $postname['id']; ?>" />
        <meta property="og:type" content="article" />
        
        <meta name="title" content="<?php echo $postname['heading']." "." - My Eastrand"; ?>">
        <meta name="description" content="<?php echo $postname['description']; ?>">
        <meta name="keywords" content="<?php echo $postname['keywords']; ?>">
        
        <link rel="stylesheet" href="./style/w3.css" type="text/css">
        <link rel="stylesheet" href="./style/style.css" type="text/css">
        <link rel="stylesheet" href="./style/userprofile.css" type="text/css">
        <link rel="stylesheet" href="./style/header.css" type="text/css">
         <link rel="icon" href="./img/myeastrand-icon-logo.png">
        <link rel="stylesheet" href="./style/registerpagedesign.css" type="text/css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    </head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <body style="background-color: white;">
        
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
            <a href="home" onclick="w3_close()" class="w3-bar-item  w3-button">
                <i class="fas fa-house"></i> &nbsp;&nbsp;Home
            </a>
            
            <a href="aboutus" onclick="w3_close()" class="w3-bar-item w3-button">
                <i class="fas fa-info-circle"></i> &nbsp;&nbsp;About
            </a>
            
            <a href="contact" onclick="w3_close()" class="w3-bar-item  w3-button">
                <i class="fa fa-phone"></i> &nbsp;&nbsp;Contact Us
            </a>
            
            <a href="cookie" onclick="w3_close()" class="w3-bar-item w3-button">
                <i class="fas fa-info-circle"></i> &nbsp;&nbsp;Cookies
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
        
        <!--- header menu --->
        <header class="header w3-card w3-top" style="background-color: #1e2321;color: white;">
            <div class="w3-content" style="max-width: 1200px;">
                <div class="w3-left " onclick="w3_open()"><span class="w3-button w3-round">☰</span>
                    
                    
                    <img id="logoheader" class="w3-margin" src="./img/My East Rand - Logo.png" alt="Header Navigation Logo">
                </div>
                
                <?php
                if(!isset($_SESSION['user'])){ echo '<div class="header_login w3-right w3-button w3-margin w3-round">
                                                     <b>Log In</b>
                                                     </div>
                                                     ';
                                             }
                ?>
                
            </div>
        </header>

        <div class="w3-content "  style="margin-top:50px;margin-bottom: 200px;">
            <!-- The Tour Section -->
            <div class="w3-row-padding">
                <div class="w3-twothird">
                    <div style="background-color: white;">
                        <img src="img/<?php echo $postname['photo']; ?>" alt="<?php echo $postname['description']; ?> " style="width:100%;display: inline-block;" class="w3-hover-opacity">
                        
                        <div class="" style="margin-bottom: 25px;padding:3px;margin-left: 5px;margin-right: 5px;">
                           <h1 style="font-size: 35px;line-height: 1;color: #444;"><?php echo $postname['heading']; ?></h1>
                            
                            <!-- Left --->
                            <div class="w3-left" >
                                <time style="color: #333;font-weight:300;"><?php echo date('M d, Y', strtotime($postname['date'])); ?></time>
                                <?php /*
                                <span style="color: #333;font-weight:300;"> &#8226; 2,245 &nbsp;views </span> <!--- View count-->*/
                                    ?>
                            <!--- Date published count --->
                            </div>
                            
                            <!--- Right --->
                            <div class="w3-right" style="margin-right: 120px;">
                                
                                <div class="share-dropdown">
                                    <!-- Share button -->
                                    <a  onclick="dropdownsharemenu()" class='w3-hover-opacity dropbtn' style="text-decoration:none;font-weight:600;color: #49b149;cursor: pointer;"><i class="fa fa-share-alt "></i> SHARE&nbsp;&nbsp;&nbsp;</a>
                                    
                                    <!-- Drop down share button -->
                                    <div id="dropdown-menu" class="share-dropdown-content">
                                        
                                        <!-- Share to Facebook --->
                                        <a title="<?php echo $postname['heading']; ?>" target="_blank" href="http://wwww.facebook.com/sharer.php?u=<?php echo $url; ?>"><i class="fa-brands fa-facebook"></i> Facebook</a>
                                        
                                        <!-- Share to Twitter --->
                                        <a title="<?php echo $postname['heading']; ?>" target="_blank" href="http://twitter.com/share?text=Go and Checkout our blog &url=<?php echo $url; ?>"><i class="fa-brands fa-twitter"></i> Twitter</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <!--- Post Content -->
                        <div class="post-content" style="margin-bottom: 30px;padding:3px;margin-left: 5px;margin-right: 5px;line-height: 1.5;color: #2e2e2e;font-size:16px;">
                            <?php echo $postname['content']; ?>
                        </div>
                        <!--// Post Content //-->
                        
                    </div>
                </div>
                
                <!-- Recommened for you --->
                <div class="w3-third w3-margin-bottom" >
                    <h5 style="color: #444;">Recommend for you</h5>
                    <?php
                    $conn = $pdo->open();
                    $stmt = $conn->prepare("SELECT * FROM articles WHERE publish='publish' ORDER BY date DESC LIMIT 4");
                    $stmt->execute();
                    
                    foreach($stmt as $row) {
                        echo "<a href='watch?v=".$row['id']."' style='text-decoration:none;'>
                              <img src='./img/".$row['photo']."' alt='".$row['description']."' style='width:100%;height: 160px;object-fit: cover;' class='w3-hover-opacity'/></a>";
                        
                        echo "<div class='w3-white'>";
                        
                        echo "<h4 class='w3-margin-bottom' style='color:#444;line-height:1;'><a href='watch?v=".$row['id']."' style='text-decoration:none;'>".$row['heading']."</a></h4>";
                        
                        echo "</div>";
                    }
                    $pdo->close();
                ?>
                </div>
                <!-- // Recommened for you --->
                
            </div>
        </div>
            <?php require_once './inc/footer.php'; ?>