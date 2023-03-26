<?php 
require_once('./inc/session.php'); 
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
$sitename = "Log into My Eastrand - My Eastrand";
?>
<!DOCTYPE html>
<html lang="en" style="font-family: Roboto, Arial, sans-serif;">
    <head>
        <title><?php echo $sitename; ?></title>
        <link rel="icon" href="./img/myeastrand-icon.png">
        <!-- Ggle -->
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
        <meta name="title" content="Log into My Eastrand - My Eastrand">
        <meta name="description" content="Log into My Eastrand to start sharing information with communities around you">
        <meta name="keywords" content="my eastrand, germiston, katlehong, boksburg, kempton park, edenvale, duduza, thokoza, kwa-thema, vosloorus, brakpan, my east rand, my kasi, data, statistics">
        
        <!-- Fbk ---->
        <meta property="og:title" content="<?php echo $sitename; ?>">
        <meta property="og:url" content="https://www.myeastrand.com/signin">
        <meta property="og:image" content="./img/src.png">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Log into My Eastrand to start sharing information with communities around you">
              
        <link rel="stylesheet" href="./style/w3.css" type="text/css">
        <link rel="stylesheet" href="./style/login-style.css" type="text/css">
        <link rel="stylesheet" href="./style/style.css" type="text/css">
        <link rel="stylesheet" href="./style/header.css" type="text/css">
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
            ?>
            <a href="home" onclick="w3_close()" class="w3-bar-item  w3-button">
                <i class="fas fa-house"></i> &nbsp;&nbsp;Home
            </a>
            
            <a href="aboutus" onclick="w3_close()" class="w3-bar-item w3-button">
                <i class="fas fa-info-circle"></i> &nbsp;&nbsp;About
            </a>
            <?php 
            if(isset($_SESSION['user']) || isset($_SESSION['admin'])){
                
                echo '
                <a href="signout" onclick="w3_close()" class="w3-bar-item w3-button">
                 <i class="fa fa-right-to-bracket"></i> &nbsp;&nbsp;Log Out
                </a>';
            }
            else{
                echo '<a href="signin" onclick="w3_close()" class="w3-bar-item w3-button">
                         <i class="fa fa-right-to-bracket"></i> &nbsp;&nbsp;Log In
                      </a>
                      
                      <a href="createaccount" onclick="w3_close()" class="w3-bar-item w3-button">
                         <i class="fa fa-user-plus"></i> &nbsp;&nbsp;Sign Up
                      </a>
                      ';
            } 
            ?>
        </nav>
        <!--// Sidebar (hidden by default) -->
        
        <!-- Header navigation --->
        <header class="header w3-top" style="background-color: #1e2321;">
            <div class="w3-content w3-animate-left" style="max-width: 1200px;">
                <div class="w3-left " onclick="w3_open()"><span class="w3-button w3-round" style="color: white;">☰</span>
                        <img id="logoheader" class="" src="./img/mainheaderlogo.svg" alt="Header Navigation Logo">
                </div>
            </div>
        </header>
        
        ?>
        
        <div class="bodyimage" >
            <div class="w3-container w3-round w3-card w3-content w3-mobile mainlogin" style="max-width: 360px;width:100%;margin-bottom: 200px;margin-top:30px;">

                <form class="login_form" action="verifyacc" method="POST">
                    
                    <div class=" w3-margin-top w3-margin-bottom">
                        <p style="font-weight: 500;font-size: 22px;">Log In to your account!</p>
                    </div>
                    
                    <?php
                    if(isset($_SESSION['error'])){
                        echo "<div class='w3-padding w3-red w3-round w3-margin-bottom'>
                              <p>".$_SESSION['error']."</p>
                              </div>";
                        
                        unset($_SESSION['error']);
                    }
                    if(isset($_SESSION['success'])){
                        echo "<div class='w3-padding w3-green w3-round w3-margin-bottom'>
                              <p>".$_SESSION['success']."</p> 
                             </div>";
                        unset($_SESSION['success']);
                    }
                    ?>
                    
                    <label for="email">Email</label>
                    <input type="text" class="w3-input w3-border w3-round " placeholder="Enter your email" name="lemail" style="width: 100%;">
                    
                    <br>
                    
                    <label for="password">Password</label>
                    <input class="w3-input w3-border w3-round " placeholder="Password" name="lpswd" style="width: 100%;">
                    <br>
                    
                    <button  type="submit" name="login" class="w3-button w3-round" value="Log In" style="width: 100%;background-color:#219b4f;"><i class="fa fa-right-to-bracket" style="color: white;" ></i> &nbsp;&nbsp;<strong style="color: white;">Log In</strong></button>
                    
                    <div class="w3-center">
                        <div class="w3-padding forgot-pass">
                            <a href="#">Forgot your password?</a>
                        </div>
                        
                        <div class="w3-padding">
                            <div class="separator">&nbsp;or&nbsp;</div>
                            <a class="w3-button w3-round" id="createacc" target="_blank" href="./signup.php">Create new account</a>
                        </div> 
                    </div>               
                </form>
            </div>
        </div>
<?php require_once 'inc/footer.php'; ?>