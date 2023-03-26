<?php include './inc/header.php'; ?>

<div  class="w3-content w3-container w3-white w3-padding w3-margin-bottom" style="width: 100%;max-width: 700px;">
    <h1>Create a post</h1>
    
    <?php require_once './inc/createbuttons.php'; ?>
    
    <form action="#" method="POST" enctype="multipart/form-data">
        <h3>Post a photo</h3>
        <!-- upload the image --->
        <input type='file'  name="uphotopost" onchange="readURL(this);" />
        <br>
                
        <img id="blah" src="./img/uploadimage.svg" alt="your image" class="w3-round" style="max-width: 90px;width: 100%;margin-bottom:5px;margin-top:5px;border: 5px solid grey;">
                
        <p style="font-size: 20px;font-weight: bold;">Title (required)</p>
        <input type="text" name="uphotoposttitle" placeholder="Enter your question" class="w3-input w3-border w3-round">
                
        <p style="font-size: 20px;font-weight: bold;">Content (required)</p>
        <textarea name="upostvideocontent"  class="w3-input w3-border w3-round" rows="6" cols="30"></textarea>
                
        <p style="font-size: 20px;font-weight: bold;">Description (not required)</p>
        <textarea name="uphotodesc"  class="w3-input w3-border w3-round" rows="4" cols="30"></textarea>
                
        <div class="w3-small w3-text-red">Description must not be more than 120 characters</div>
        <!-- submit button --->
        <br>
        <input type="submit" name="upostphoto" value="Post" style="width: 100%;" class="w3-button w3-green w3-border w3-round">
    </form>
</div>
<br><br>

<?php include './inc/footer.php'; ?>