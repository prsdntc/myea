<?php
include './inc/session.php'; 

?>
<!DOCTYPE html>
<html lang="en" style="font-family: Roboto, Arial, sans-serif;">
    <head>
        <title>Admin Panel | <?php echo $admin['firstname'].' '.$admin['lastname']; ?></title>
        <link rel="stylesheet" href="./admin-style/style.css" type="text/css">
        <link rel="stylesheet" href="./admin-style/w3.css" type="text/css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="designz/tabs.css" type="text/css">

    </head>
    
    <body >
        <?php $conn = $pdo->open(); ?>
                            
        <header class="w3-top w3-bar w3-container w3-large" style="background-color:#2ca05a;color: white;">
            
            <div class="w3-left" >
                <p style="margin-top: 8px;">
                    <i class="fa fa-tools"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>Admin Panel</span>
                </p>
            </div>
            
            <div class="w3-right" style="margin-right: 40px;">
                <a href="../index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
                <a href="#" class="w3-bar-item w3-button dropbtn" ><i  class="fa fa-bell"></i></a>
                <a href="#" class="w3-bar-item w3-button dropbtntwo"><i class="fa fa-user"></i></a>
            </div>
            
            <div class="w3-center search-containertwo" style="">
            </div>
        </header>
        
        <!-- Sidebar ---->
        
        <?php require_once "./inc/nav.php"; ?>
    
        <!--- Left Sidebar ---->
        
        <!--- Center content -->
        <div class="w3-container w3-animate-top "   style="margin-left: 205px;margin-top: ;background-color:  #ffffff;">
            
            <!--- Dashboard Title --->
            <div class="w3-container" style="margin-top: 43.34px;">
                <h1 style="color: #666;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;">Dashboard</h1>
            </div>
            
            <!-- Top information --->
            <div class="w3-row-padding">
                
                <!-- Number of registered users ---->
                <div class="w3-quarter">
                    <div class="w3-round" style="background-color: #1e2321">
                        <div class="w3-padding" style="color: white;">
                            <?php
                            
                            $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM members");
                            $stmt->execute();
                            $urow =  $stmt->fetch();
                            
                            echo "<h1>".$urow['numrows']."</h1>";
                            ?>
                            <p ><i class="fa fa-user"></i>&nbsp;&nbsp;<a href="regusers.php" style="text-decoration: none;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;" class="w3-hover-text-black">Registered Accounts</a></p>
                        </div>    
                    </div>
                </div>
                
                <!-- Number of posts --->
                <div class="w3-quarter">
                    <div class="w3-round" style="background-color: #1e2321">
                        <div class="w3-padding" style="color: white">
                            <?php
                            
                            $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM articles");
                            $stmt->execute();
                            $urow =  $stmt->fetch();
                            
                            echo "<h1>".$urow['numrows']."</h1>";
                            ?>
                            <p><i class="fa fa-pencil"></i>&nbsp;&nbsp;<a href="admin-posts.php" style="text-decoration: none;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;" class="w3-hover-text-black">Posts</a></p>
                        </div>    
                    </div>
                </div>
                
                <!-- Likes -->
                <div class="w3-quarter">
                    <div class="w3-round" style="background-color: #1e2321">
                        <div class="w3-padding" style="color: white;">
                            <h1>2</h1>
                            <p><i class="fa fa-heart"></i>&nbsp;&nbsp;<a href="#" style="text-decoration: none;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;" class="w3-hover-text-black">Likes</a></p>
                        </div>    
                    </div>
                </div>
                
                <!-- Shares -->
                <div class="w3-quarter">
                    <div class="w3-round" style="background-color: #1e2321">
                        <div class="w3-padding" style="color: white;">
                            <h1>2</h1>
                            <p><i class="fa fa-share"></i>&nbsp;&nbsp;<a href="#" style="text-decoration: none;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;" class="w3-hover-text-black">Shares</a></p>
                        </div>    
                    </div>
                </div>
            </div>
            <!-- Top information --->
            
            <?php // Form to create post  ?>
            
            <?php /* include './inc/postarticle.php'; */ ?>
            <div class="w3-container w3-margin-top create-post" style="">
                <h2>Create Post</h2>
                
                
                
                <!---  TABS Content --->
                
                <!-- Article-->
                <div class="w3-round w3-animate-left w3-container">
                    <!-- Form --->
                    <?php require_once './inc/artscript.php'; ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                        
                        <!-- row --->
                        <div class="w3-row-padding w3-margin">
                            
                            <!-- left -->
                            <div class="w3-half" style="width:40%;">
                                <div class="drag-area">
                                    <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div><header>Drag & Drop to Upload File</header>
                                    <span>OR</span>
                                    <button>Upload</button>
                                    
                                </div>
                            </div>
                            
                            <!-- right -->
                            <div class="w3-half ">
                                <h3><i class="fa fa-pencil"></i> Article</h3>
                                <input type="file" name="photo">
                                <div style="successCheck"><?php echo $success ?? '' ?></div>
                                <!-- Add the Article Heading --->
                                <h6><i class="fa fa-heading"></i> Heading:</h6>
                                <input  type="text" name="heading" >
                                
                                <!--- Add the Article's keywords --->
                                <h6><i class="fa fa-file-word"></i> Keywords:</h6>
                                <input  type="text" name="keywords" >
                                
                                <!--- Add article's description -->
                                <h6><i class="fa fa-heading"></i> Description:</h6>
                                <textarea name="description"></textarea>
                                
                                <!--- Select the article's category --->
                                <h6><i class="fa fa-bars"></i> Publish or draft:</h6>
                                <select class="w3-margin-bottom" name="savedoc">
                                    <option value="Publish">Publish</option>
                                    <option value="Draft">Draft</option>
                                </select>
                                <span style="color: red;font-size: 13px;"><?php echo $errors_upload['content'] ?? '' ?></span>
                                
                                <!-- Article Content --->
                                <h6><i class="fa fa-plus"></i> Add Content:</h6>
                                <textarea id="editor1" rows="10" cols="80" name="content"></textarea>
                                
                                <button type="submit" name="upload_content"><i class="fa fa-pencil"></i> Publish</button>
                            </div>
                        
                        </div>
                    
                    </form>
                </div> <!--- // Article --->
                
                <!--- // TABS Content ---->
                
            </div>
        </div>
        

<?php require_once 'footer.php'; ?>

