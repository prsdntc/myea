<?php include './inc/header.php'; ?>

<div  class="w3-content w3-container w3-white w3-padding w3-margin-bottom" style="width: 100%;max-width: 700px;">
    <h1>Create a post</h1>
    
    <?php require_once './inc/createbuttons.php'; ?>
    
    <form action="#" method="POST" enctype="multipart/form-data">
        <h3>Post a video</h3>
        <p style="font-size: 20px;font-weight: bold;">Title (required)</p>
        <input type="text" name="upostvideotitle" placeholder="Enter your question" class="w3-input w3-border w3-round">
                
        <p style="font-size: 20px;font-weight: bold;">Description (not required)</p>
        <textarea name="upostvideodesc"  class="w3-input w3-border w3-round" rows="3" cols="30"></textarea>
        
        <div class="w3-small w3-text-red">
            Description must not be more than 120 characters
        </div>
                
        <p style="font-size: 20px;font-weight: bold;">Content (not required)</p>
        
        <textarea name="upostvideocontent"  class="w3-input w3-border w3-round" rows="6" cols="30"></textarea>
                
        <p style="font-size: 17px;font-weight: bold;">
            Add a thumbnail for your video <span class="w3-small">(required)</span>
        </p>
        <!-- upload the image --->
        
        <input type='file' name="upostvideothumbnail" class="w3-button" onchange="readthumbnail(this);" />
        <br>
        <img id="thumbnail" src="#" alt="your image" class="w3-border" style="max-width: 90px;width: 100%;">
                
        <!-- submit button --->
        <br>
        <input type="submit" name="upostvideo" value="Post" style="width: 100%;" class="w3-button w3-green w3-border w3-round">
    </form>