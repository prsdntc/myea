<?php
include './inc/session.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Control Panel | <?php echo $admin['firstname'].' '.$admin['lastname']; ?> Posts and Uploads</title>
        <link rel="stylesheet" href="./admin-style/style.css" type="text/css">
        <link rel="stylesheet" href="./admin-style/w3.css" type="text/css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <style>
            *{
                font-family: 'Roboto', sans-serif;
            }
        </style>
    </head>
    <body>
        <header class="w3-top w3-card w3-container " style="background-color: #1e2321;color: white;">
            
            <!-- Header navigation icons --->
            <div class="w3-center" style="margin-right: 40px;">
                <a href="../index.php" class="w3-bar-item w3-button" style="padding:10px;">
                    <i class="fa fa-home"></i>
                
                <a href="index.php" class="w3-bar-item w3-button" style="padding:10px;">
                    <i class="fa fa-user"></i>
                </a>
            </div>
        </header>