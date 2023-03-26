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
             @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
            * {font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;}
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
            
            #loader {
                position: absolute;
                left: 50%;
                top: 50%;
                z-index: 1;
                width: 120px;
                height: 120px;
                margin: -76px 0 0 -76px;
                border: 15px solid #1e2321;
                border-radius: 50%;
                border-top: 15px solid #2ca05a;
                -webkit-animation: spin 2s linear infinite;
                animation: spin 2s linear infinite;
            }
            @-webkit-keyframes spin {
                0% { -webkit-transform: rotate(0deg); }
                100% { -webkit-transform: rotate(360deg); }
            }
            
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            #myDiv {
                display: none;
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
    
    <body onload="reloader()">
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
        <header class="header w3-top" style="background-color: #1e2321;">
            <div class="w3-content w3-animate-left" style="max-width: 1200px;">
                <div class="w3-left " onclick="w3_open()"><span class="w3-button w3-round" style="color: white;">☰</span>
                       <?php //<img id="logoheader" class="" src="./img/My East Rand - Logo.png" alt="Header Navigation Logo"> ?>
                    <svg
   width="490.75696"
   height="229.39746"
   viewBox="0 0 129.84612 60.694744"
   version="1.1"
   id="svg5"
   inkscape:version="1.1 (c68e22c387, 2021-05-23)"
   sodipodi:docname="mainheaderlogo2.svg"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:svg="http://www.w3.org/2000/svg">
  <sodipodi:namedview
     id="namedview7"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageshadow="2"
     inkscape:pageopacity="0.0"
     inkscape:pagecheckerboard="true"
     inkscape:document-units="px"
     showgrid="false"
     borderlayer="true"
     showborder="false"
     inkscape:zoom="0.64"
     inkscape:cx="325.78125"
     inkscape:cy="175.78125"
     inkscape:window-width="1366"
     inkscape:window-height="719"
     inkscape:window-x="-8"
     inkscape:window-y="-8"
     inkscape:window-maximized="1"
     inkscape:current-layer="layer1"
     inkscape:snap-global="true"
     fit-margin-top="0"
     fit-margin-left="0"
     fit-margin-right="0"
     fit-margin-bottom="0"
     units="px" />
  <defs
     id="defs2">
    <linearGradient
       id="linearGradient3509"
       inkscape:swatch="solid">
      <stop
         style="stop-color:#13759f;stop-opacity:1;"
         offset="0"
         id="stop3507" />
    </linearGradient>
    <clipPath
       clipPathUnits="userSpaceOnUse"
       id="clipPath14758">
      <path
         sodipodi:type="star"
         style="fill:#b3b3b3;fill-opacity:1;stroke:none;stroke-width:0.1;stroke-miterlimit:4;stroke-dasharray:none"
         id="path14760"
         inkscape:flatsided="false"
         sodipodi:sides="5"
         sodipodi:cx="-129.46536"
         sodipodi:cy="-154.16107"
         sodipodi:r1="38.921635"
         sodipodi:r2="19.460819"
         sodipodi:arg1="0.78539816"
         sodipodi:arg2="1.4137167"
         inkscape:rounded="0"
         inkscape:randomized="0"
         d="m -101.94361,-126.63932 -24.47741,-8.30053 -20.71439,15.45821 0.33033,-25.8444 -21.10273,-14.92372 24.68157,-7.67219 7.67219,-24.68157 14.92371,21.10273 25.844408,-0.33033 -15.458208,20.71439 z"
         inkscape:transform-center-x="1.8815057"
         inkscape:transform-center-y="-1.8815054" />
    </clipPath>
    <clipPath
       clipPathUnits="userSpaceOnUse"
       id="clipPath15076">
      <path
         style="fill:none;stroke:#000000;stroke-width:0.264583px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
         d="M -773.64167,83.079167 H -462.4832 V -242.46691 h -351.72666 z"
         id="path15078" />
    </clipPath>
    <clipPath
       clipPathUnits="userSpaceOnUse"
       id="clipPath16243">
      <text
         xml:space="preserve"
         style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:141.622px;line-height:1.25;font-family:'Airstrike Bold 3D';-inkscape-font-specification:'Airstrike Bold 3D, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;fill:#000000;fill-opacity:1;stroke:none;stroke-width:3.54055"
         x="17962.438"
         y="-3309.3708"
         id="text16247"><tspan
           sodipodi:role="line"
           id="tspan16245"
           style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:141.622px;font-family:'Airstrike Bold 3D';-inkscape-font-specification:'Airstrike Bold 3D, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;fill:#000000;stroke-width:3.54055"
           x="17962.438"
           y="-3309.3708">ER</tspan></text>
    </clipPath>
    <filter
       style="color-interpolation-filters:sRGB"
       inkscape:label="Roughen"
       id="filter11622"
       x="-0.00085967145"
       y="-0.00079383358"
       width="1.0017194"
       height="1.0015877">
      <feTurbulence
         type="turbulence"
         numOctaves="5"
         seed="360"
         baseFrequency="10 10"
         result="turbulence"
         id="feTurbulence11618" />
      <feDisplacementMap
         in="SourceGraphic"
         in2="turbulence"
         scale="48.2036"
         yChannelSelector="G"
         xChannelSelector="R"
         id="feDisplacementMap11620"
         result="fbSourceGraphic" />
      <feColorMatrix
         result="fbSourceGraphicAlpha"
         in="fbSourceGraphic"
         values="0 0 0 -1 0 0 0 0 -1 0 0 0 0 -1 0 0 0 0 1 0"
         id="feColorMatrix11642" />
      <feTurbulence
         id="feTurbulence11644"
         type="turbulence"
         numOctaves="5"
         seed="360"
         baseFrequency="10 10"
         result="turbulence" />
      <feDisplacementMap
         in2="turbulence"
         id="feDisplacementMap11646"
         in="fbSourceGraphic"
         scale="48.2036"
         yChannelSelector="G"
         xChannelSelector="R" />
    </filter>
  </defs>
  <g
     inkscape:label="Layer 1"
     inkscape:groupmode="layer"
     id="layer1"
     transform="translate(-28206.091,2220.819)">
    <path
       id="path6875"
       style="fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.0811166"
       d="m 28229.302,-2213.3338 a 6.8677219,7.485135 0 0 1 -6.868,7.4851 6.8677219,7.485135 0 0 1 -6.868,-7.4851 6.8677219,7.485135 0 0 1 6.868,-7.4852 6.8677219,7.485135 0 0 1 6.868,7.4852 z" />
    <path
       style="fill:#ffffff;stroke:none;stroke-width:0.0787296px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;fill-opacity:1"
       d="m 28242.516,-2216.4672 c 8.663,6.4007 -12.602,14.9404 -17.652,21.237 -3.214,4.0082 8.561,-1.2028 10.002,1.8712 3.826,8.1696 -17.722,15.8492 -13.175,23.6401 3.064,5.2488 19.096,-4.0654 18.217,0.077 -1.149,5.4086 -15.504,12.7121 -21.56,8.0073 -6.376,-4.9537 -3.564,-16.0147 2.521,-24.1091 6.085,-8.0944 -2.689,-4.0876 -2.26,-6.2666 6.9,-8.5056 18.563,-27.4782 23.907,-24.4573 z"
       id="path6877"
       sodipodi:nodetypes="csaasascc" />
    <path
       style="fill:#ffffff;stroke:none;stroke-width:0.0787296px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;fill-opacity:1"
       d="m 28222.504,-2198.8665 c 0,0 -13.197,-16.034 -15.37,-15.0766 -2.174,0.9574 -0.975,13.1259 3.825,15.0573 10.425,4.1953 11.545,0.019 11.545,0.019 z"
       id="path6879"
       sodipodi:nodetypes="csscc" />
    <text
       xml:space="preserve"
       style="font-style:italic;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:28.3314px;line-height:1.25;font-family:Roboto;-inkscape-font-specification:'Roboto, Bold Italic';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.708284"
       x="28240.996"
       y="-2172.1877"
       id="text6883"><tspan
         sodipodi:role="line"
         id="tspan6881"
         style="font-style:italic;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:28.3314px;font-family:Roboto;-inkscape-font-specification:'Roboto, Bold Italic';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;fill:#ffffff;stroke-width:0.708284;fill-opacity:1"
         x="28240.996"
         y="-2172.1877">astrand</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:italic;font-variant:normal;font-weight:900;font-stretch:normal;font-size:20.1534px;line-height:1.25;font-family:Roboto;-inkscape-font-specification:'Roboto, Heavy Italic';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.503838"
       x="28248.088"
       y="-2194.6792"
       id="text6887"><tspan
         sodipodi:role="line"
         id="tspan6885"
         style="font-style:italic;font-variant:normal;font-weight:900;font-stretch:normal;font-size:20.1534px;font-family:Roboto;-inkscape-font-specification:'Roboto, Heavy Italic';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;fill:#ffffff;stroke-width:0.503838;fill-opacity:1"
         x="28248.088"
         y="-2194.6792">My</tspan></text>
  </g>
</svg>

                         
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
        
        
    
