<?php
include './inc/dbcon.php';
session_start();

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

$button = test_input($_GET['qsub']);
$search = test_input($_GET['q']);




if(empty($search) || !isset($search)){
    header("Location: home");
}

/// Create connection
$con = mysqli_connect("localhost", "u998494756_myeast", '$ZaN]Z@Y0', "u998494756_eastside");
$sql = "SELECT * FROM `articles` WHERE heading like ('%". $search . "%') AND publish='publish'";


$run = mysqli_query($con, $sql);
$foundnum = mysqli_num_rows($run);
?>
<!DOCTYPE html>
<html lang="en" style="font-family: Roboto, Arial, sans-serif;">
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' /><style>
        
        @media screen and (max-width: 600px) {
            .search-thumbnail img{
                max-width: 150px;
                width: 100%;
                height: 150px;
                object-fit: cover;
            }
        }
        
        @media screen and (max-width: 300px) {
            .search-thumbnail img{
                max-width: 120px;
                width: 100%;
                height: 50px;
                object-fit: cover;
            }
        }
        
        </style>
        
        <title><?php echo "$foundnum result(s) found for \"" .$search. "\""; ?> | My EastRand</title>
        <link rel="stylesheet" href="./style/w3.css" type="text/css">
        <link rel="stylesheet" href="./style/style.css" type="text/css">
        <link rel="stylesheet" href="./style/header.css" type="text/css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    </head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <body style="background-color: white;">
        <!-- Sidebar (hidden by default) -->
        <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-animate-left" style="display:none;z-index:2;width:30%;min-width:250px;background-color: #1e2321;color: white;" id="mySidebar">
            
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-green w3-bar-item w3-button w3-xlarge w3-center">
                x
            </a>
            
            <?php
            if (isset($_SESSION['admin'])){
                echo '
                <a href="./admin-panel/index.php" onclick="w3_close()" class="w3-grey w3-bar-item w3-button" style="font-weight: bold;">
                 <img src="./img/woman-g2ea047faf_1920.jpg" class="w3-circle" alt="profile display photo" style="max-width: 30px;width: 100%;height: 30px;" />&nbsp;&nbsp; Admin Panel
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
                <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button">
                 <i class="fa fa-right-to-bracket"></i> &nbsp;&nbsp;Log Out
                </a>';
            }
            ?>
        </nav>
        <!--// Sidebar (hidden by default) -->
        
        <!--- header menu --->
        <header class="header w3-card w3-top" id="myHeader" style="background-color: #1e2321;color: white;">
            <div class="w3-content w3-animate-right" style="max-width: 1200px;">
                <div class="w3-left " onclick="w3_open()"><span class="w3-button w3-round">☰</span>
                    
                    <img id="logoheader" class="" src="./img/My East Rand - Logo.png" alt="Header Navigation Logo">
                </div>
                
                <div class="w3-right search-container" style="padding-bottom: 10px;"> <!----->
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
        <div class="w3-content" style="max-width: 1200px;margin-bottom:250px;">
            
            <?php
            if ($foundnum == 0){
                
                echo '<div class="w3-container w3-center" style="margin-top:50px;">
                      <h1 style="font-weight: 600;">No Result to Show!</h1>
                      
                      <svg xmlns="http://www.w3.org/2000/svg" width="94" height="94" viewBox="0 0 24 24"><path fill="#585c5b" d="M15.5,12C18,12 20,14 20,16.5C20,17.38 19.75,18.21 19.31,18.9L22.39,22L21,23.39L17.88,20.32C17.19,20.75 16.37,21 15.5,21C13,21 11,19 11,16.5C11,14 13,12 15.5,12M15.5,14A2.5,2.5 0 0,0 13,16.5A2.5,2.5 0 0,0 15.5,19A2.5,2.5 0 0,0 18,16.5A2.5,2.5 0 0,0 15.5,14M7,15V17H9C9.14,18.55 9.8,19.94 10.81,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19A2,2 0 0,1 21,5V13.03C19.85,11.21 17.82,10 15.5,10C14.23,10 13.04,10.37 12.04,11H7V13H10C9.64,13.6 9.34,14.28 9.17,15H7M17,9V7H7V9H17Z"></path></svg>
                     
                      </div>';
            }
            else{
                echo "<br><p class='w3-container' style='color: #585858;font-weight:200;margin-top: 30px;margin-bottom:10px;border-bottom:1px solid #d3d3d3;'> $foundnum Result(s) found for <em style='font-weight:700;'>  \"" .$search. "\" </em> &nbsp;<i class='fa fa-search'></i> </p >";
    
                //get number of results stored in database
                $sql = "SELECT * FROM articles WHERE heading like ('%". $search . "%') AND publish='publish'";
                $getquery = mysqli_query($con,$sql);
                
                while($runrows = mysqli_fetch_array($getquery)){
                    $buylink = $runrows["title"];
                    $imagelink = $runrows["content"];
                    
                    echo "<div class='search-result w3-animate-right w3-container' tabindex='0'>";
                    
                    echo "<div class='search-thumbnail w3-hover-opacity'>
                    <a href='watch?v=".$runrows['id']."'><img alt=".$runrows['description']." src='./img/". $runrows['photo']."' style='object-fit: cover;'/></a>
                    </div>";
                    
                    echo "<div class='search-info'>
                    <heading class='search-title'><a href='watch?v=".$runrows['id']."'>".$runrows['heading']."</a></heading>
                    
                    <ul class='search-meta-data'>
                       <li class='search-upload-date'>".get_time_ago(strtotime($runrows['date']))."</li>
                    </ul>
                    
                    <p class='search-description'>".$runrows['description']."</p>
                    
                    </div>";
                    
                    echo "</div>";
                }
            }
            mysqli_close($con);
            ?>
        </div>

<?php 
require_once('inc/footer.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>