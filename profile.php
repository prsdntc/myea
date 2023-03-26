<?php require_once('./inc/session.php'); ?>
<?php 

if(!isset($_SESSION['user'])){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My Eastrand | Explore The Eastern Region Of Gauteng</title>
        <link rel="stylesheet" href="./style/w3.css" type="text/css">
        <link rel="stylesheet" href="./style/style.css" type="text/css">
        <link rel="stylesheet" href="./style/userprofile.css" type="text/css">
        <link rel="stylesheet" href="./style/header.css" type="text/css">
        <link rel="stylesheet" href="./style/registerpagedesign.css" type="text/css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <style>
            
        </style>
    </head>
    
    <body style="background-color: white;">
        <!-- Sidebar (hidden by default) -->
        <nav class="w3-sidebar w3-black w3-bar-block w3-card w3-top w3-animate-left" style="display:none;z-index:2;width:30%;min-width:250px;" id="mySidebar">
            
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-green w3-bar-item w3-button w3-xlarge w3-center">
                x
            </a>
            
            <a href="index.php" onclick="w3_close()" class="w3-bar-item  w3-button">
                <i class="fas fa-house"></i> &nbsp;&nbsp;Home
            </a>
            
            <?php 
            if(isset($_SESSION['user'])){
                
                echo '
                <a href="profile.php" onclick="w3_close()" class="w3-white w3-bar-item w3-button" style="font-weight: bold;">
                 <img src="./img/woman-g2ea047faf_1920.jpg" class="w3-circle" alt="'.$user['firstname'].' profile display photo" style="max-width: 30px;width: 100%;height: 30px;" />&nbsp;&nbsp;'.$user['firstname'].'&nbsp'.$user['lastname'].'
                </a>';
            } 
            if (isset($_SESSION['admin'])){
                echo '
                <a href="./admin-panel/index.php" onclick="w3_close()" class="w3-grey w3-bar-item w3-button" style="font-weight: bold;">
                 <img src="./img/woman-g2ea047faf_1920.jpg" class="w3-circle" alt="profile display photo" style="max-width: 30px;width: 100%;height: 30px;" />&nbsp;&nbsp; Admin Panel
                </a>';
            }
            ?>
            
            <a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button">
                <i class="fas fa-info-circle"></i> &nbsp;&nbsp;About
            </a>
            <?php 
            if(isset($_SESSION['user']) || isset($_SESSION['admin'])){
                
                echo '
                <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button">
                 <i class="fa fa-right-to-bracket"></i> &nbsp;&nbsp;Log Out
                </a>';
            }
            else{
                echo '<a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">
                         <i class="fa fa-right-to-bracket"></i> &nbsp;&nbsp;Log In
                      </a>
                      
                      <a href="signup.php" onclick="w3_close()" class="w3-bar-item w3-button">
                         <i class="fa fa-user-plus"></i> &nbsp;&nbsp;Sign Up
                      </a>
                      ';
            } 
            ?>
            <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">
                <i class="fa fa-globe"></i> &nbsp;&nbsp;Explore
            </a>
            
            <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button">
                <i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp;Contact Us
            </a>
            
            <a href="cookie-policy.php" onclick="w3_close()" class="w3-bar-item w3-button">
                <i class="fas fa-cookie"></i> &nbsp;&nbsp;Cookie Policy
            </a>
        </nav>
        <!--// Sidebar (hidden by default) -->
        
        <header class="header w3-black w3-card w3-top w3-bar" style="padding: 2px;"><?php /* add id="myHeader" to make it sticky */?>
            <div class="w3-content" style="max-width: 1200px;">
                
                <!-- Logo --->
                <div class="w3-left " onclick="w3_open()"><span class="w3-button w3-round">☰</span>
                    <img id="logoheader" class="" src="./img/mainheaderlogo.svg" alt="Header Navigation Logo">
                </div>
                
                <div class="w3-center">
                    <a href="podcastfeed.php" id="podcasticon" style="color: white;float: left;margin-left: 5px;" class="w3-hover-black w3-hover-text-gray">
                        <i class="fa-solid fa-podcast"></i>
                    </a>
                    
                    <a href="videofeed.php" id="videofilmicon" style="color: white;float: left;margin-left: 5px;" class="w3-hover-black w3-hover-text-gray">
                        <i class="fa-solid fa-film"></i>
                    </a>
                    
                    <a href="photogallery.php" id="galleryicon" style="color: white;float: left;margin-left: 5px;" class="w3-hover-black w3-hover-text-gray tooltip">
                        <i class="fa-solid fa-image"></i>
                    </a>


                               
                </div>
                    
                
                <!--- Search field --->
                <div class="w3-right search-container" > <!----->
                    <div style="float:left;">
                        <a href="#" id="notificationicon" class="notifi w3-hover-black w3-hover-text-grey" style="color:white;" >
                            <span style="float: left;margin-left: 5px;"><i class="fa fa-bell" style="font-size: 20px;"></i></span>
                        </a>
                        <a href="#" id="usericonsettings" style="color: white;float: left;margin-left: 5px;" class="w3-hover-black w3-hover-text-gray">
                            <span ><strong><i class="fa fa-user"></i></strong> <i class="fa-solid fa-caret-down"></i></span>
                        </a>
                    </div>
                    
                    <form class="w3-right" action="https://www.w3schools.com/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                
                
            </div>
        </header>
        <?php //style="background-image: url(./images/<?php echo $user['photo']; );background-repeat: no-repeat;background-attachment: fixed;background-position: center;width:100%;height: 100%;" ?>
        <div class="w3-content w3-container" style="margin-top: 70px;">
            
            <div class="w3-row">
                <!-- User Background banner --->
                <div class="w3-half" style="width:230px;">
                    <img src="./images/<?php echo $user['photo']; ?>" alt="Profile-pic" style="width:100%;max-width: 200px;border-radius: 50%;">
                </div>
                
                <div class="w3-half ">
                    <p style='font-size: 40px;line-height: 1.1;'><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
                    <p style='font-size: 20px;line-height: 1.7;font-weight: bold;color: gray'><?php echo $user['address']; ?></p>
                    <p style='font-size: 15px;line-height: 1.7;font-weight: bold;color: grey;font-style:italic;'><?php echo $user['bio']; ?></p>
                    <a href="#" class="w3-button w3-black w3-round">Edit Profile</a>
                </div>
            </div>
            
            <div class="w3-border w3-round w3-padding w3-margin" >
                <div class="w3-center">
                    <img src="img/signedupat.svg" height="120px" width="90px" alt="You signed up at">
                    <p class="w3-large">
                        You created your account on <strong><?php echo date('M d, Y', strtotime($user['created_on'])); ?></strong>
                    </p>
                </div>
                <div class="w3-center">
                    <img src="img/signedupat.svg" height="120px" width="90px" alt="You signed up at">
                    <p class="w3-large">
                        You created your account on <strong><?php echo date('M d, Y', strtotime($user['created_on'])); ?></strong>
                    </p>
                </div>
                <div class="w3-center">
                    <img src="img/signedupat.svg" height="120px" width="90px" alt="You signed up at">
                    <p class="w3-large">
                        You created your account on <strong><?php echo date('M d, Y', strtotime($user['created_on'])); ?></strong>
                    </p>
                </div>
            </div>
        </div>
        
<?php include './inc/footer.php'; ?>