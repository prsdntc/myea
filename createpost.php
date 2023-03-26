<?php include './inc/header.php'; ?>

<!-- Create a post --->
    <div  class="w3-content w3-container w3-white w3-padding w3-margin-bottom" style="width: 100%;max-width: 700px;">
        <h1>Create a post</h1>
        
        <?php require_once './inc/createbuttons.php'; ?>
        
        <!-- Post Logic --->
        <?php include './inc/ucreatepost.php'; ?>
        
        <form action="#" method="POST">
            <h3>What's happening, <?php echo $user['firstname']; ?>?</h3>
            <!-- enter the content -->
            
            <div class="w3-green w3-padding w3-round" style="margin-bottom: 5px;">
                <?php echo '
                <div class="w3-center">
                <div >
                <i class="fa-solid fa-circle-check w3-xxlarge"></i></div>'.$successpost.'
                </div>' ?? '' ?>
            </div>
            
            <textarea placeholder="Enter content" name="upost" class="w3-input w3-border w3-round <?php echo isset($creatpost_error['text_empty']) ? 'w3-border-red' : '' ?>" rows="4" cols="80"></textarea>
            
            <span style="color: red;font-size: 18px;"><?php echo $creatpost_error['text_empty'] ?? '' ?></span>
            <!-- submit button --->
            <br>
            <br>
            <input type="submit" name="ucreatepost" value="Post" style="width: 100%;" class="w3-button w3-green w3-border w3-round">
        </form>
</div>
<br><br>

<?php include './inc/footer.php'; ?>