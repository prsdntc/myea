<?php include './inc/session.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Panel | <?php echo $admin['firstname'].' '.$admin['lastname']; ?></title>
        <link rel="stylesheet" href="./admin-style/style.css" type="text/css">
        <link rel="stylesheet" href="./admin-style/w3.css" type="text/css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <style>
            *{
                /*font-family: "Roboto","Arial",sans-serif;*/
                font-family:segoe ui light;
            }
            .search-container input[type=text] {
                padding: 3px;
                margin-top: 8px;
                font-size: 17px;
                border: none;
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
            }
            .search-container button {
                color: white;
                float: right;
                padding: 3px 10px;
                margin-top: 8px;
                margin-right: 16px;
                background: #000;
                font-size: 17px;
                border: none;
                cursor: pointer;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
            }
        </style>
    </head>
    <body>
        <header class="w3-top w3-bar w3-card w3-container w3-large" style="background-color: #119191;color: white;">
            
            <div class="w3-left" style="margin-left:40px;">
                <p style="margin-top: 8px;">
                    <strong>My Eastrand | </strong>
                    <span>Admin Panel</span>
                </p>
            </div>
            
            <div class="w3-right" style="margin-right: 40px;">
                <a href="../index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
            </div>
            
            
            <div class="w3-center search-containertwo" style="">
            </div>
        </header>
        
        <!-- Sidebar ---->
        <nav class="w3-left w3-bar-block w3-sidebar" style="margin-top: 43.40px;width: 205px;background-color: #119191;">
            
            <!-- Center ---->
            <div class="w3-center w3-padding w3-animate-top">
                <img src="img/b411a629b7b84470a180a62a33602120.png" class='w3-card w3-circle' alt="<?php echo $admin['firstname'].'\'s display picture'; ?>" style="width: 100%;max-width: 160px;height: 160px;">
                
                <p class="w3-margin-top">
                    <strong style="color: white;">
                        Administration Panel
                    </strong>
                </p>
                <p class="" style="color: white;">
                        <?php echo $admin['firstname'].' '.$admin['lastname']; ?>
                </p>
            </div>
            <!--/// --->
            
            <!-- Menu buttons  -->
            <div class="w3-margin-top w3-animate-left">
                <a href="index.php" style="color: #fff;" onclick="w3_close()" class="w3-border-blue w3-rightbar w3-bar-item  w3-button w3-padding w3-large">
                    <i class="fas fa-chalkboard" ></i> &nbsp;&nbsp;Dashboard
                </a>
                
                <a href="index.php" style="color: #fff;" onclick="w3_close()" class="w3-bar-item  w3-button w3-padding w3-large">
                    <i class="fa fa-bell"></i> &nbsp;&nbsp;Notifications
                </a>
                
                <a href="admin-posts.php" style="color: #fff;" onclick="w3_close()" class="w3-bar-item  w3-button w3-padding w3-large">
                    <i class="fa fa-book" ></i> &nbsp;&nbsp;Posts/Uploads
                </a>
                
                <a href="index.php" style="color: #fff;" onclick="w3_close()" class="w3-bar-item  w3-button w3-padding w3-large">
                    <i class="fa fa-comments" ></i> &nbsp;&nbsp;Comments
                </a>
                
                <a href="index.php" style="color: #fff;" onclick="w3_close()" class="w3-bar-item  w3-button w3-padding w3-large">
                    <i class="fa fa-share" ></i> &nbsp;&nbsp;Shares
                </a>
                
                <a href="index.php" style="color: #fff;" onclick="w3_close()" class="w3-bar-item  w3-button w3-padding w3-large">
                    <i class="fa fa-heart" ></i> &nbsp;&nbsp;Likes
                </a>
                
                <a href="index.php" style="color: #fff;" onclick="w3_close()" class="w3-bar-item  w3-button w3-padding w3-large">
                    <i class="fas fa-eye" ></i> &nbsp;&nbsp;Views
                </a>
                
                <a href="index.php" style="color: #fff;" onclick="w3_close()" class="w3-bar-item  w3-button w3-padding w3-large">
                    <i class="fas fa-users" ></i> &nbsp;&nbsp;Members
                </a>
                
            </div>
        </nav>
        <br><br>
        <div class=" w3-container w3-animate-right" style="margin-left: 205px;">
            <br>
            <div class="w3-large w3-blue w3-padding w3-round">
                <strong class="">Registered users on the platform</strong>
            </div>
            
            <div class="w3-left w3-large search-container " >
                <form action="#" method="GET" >
                    <input type="text" class="w3-border" placeholder="Search users in DB" name="search">
                    <button type="submit" class="w3-button w3-border"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <br>
            <br>
            <br>
            
            <table class="w3-table-all" >
                <tr>
                    <th>Register Date</th>
                    <th>Email Address</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Acc. Created On</th>
                    <th>Address</th>
                    <th>Bio</th>
                </tr>
                
                
                 <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM members WHERE type=:type");
                      $stmt->execute(['type'=>0]);
                      foreach($stmt as $row){
                        $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                        $status = ($row['status']) ? '<span class="label label-success">active</span>' : '<span class="label label-danger">not verified</span>';
                        $active = (!$row['status']) ? '<span class="pull-right"><a href="#activate" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="fa fa-check-square-o"></i></a></span>' : '';
                        echo "<tr class='w3-large'>
                            <td class='w3-padding w3-hover-opacity'>
                            <a href='profile.php?v=".$row['activate_code']."' style='text-decoration: none;cursor: pointer;'>
                            <img class='w3-large w3-circle w3-card w3-hover-opacity' src='".$image."' height='60px' width='60px' alt='".$row['email']." ".$row['bio']."'>
                            </a>
                            </td>
                            <td class='w3-padding w3-hover-opacity'>".$row['email']."</td>
                            <td class='w3-padding w3-hover-opacity'>".$row['firstname'].' '."</td>
                            <td class='w3-padding w3-hover-opacity'>".$row['lastname']."</td>
                            <td class='w3-padding w3-hover-opacity'>".date('M d, Y', strtotime($row['created_on']))."</td>
                            <td class='w3-padding w3-hover-opacity'>".$row['address']."</td>
                            <td class='w3-padding w3-hover-opacity w3-small'><em>".$row['bio']."</em></td>
                            </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                    ?>
            </table>
        </div>