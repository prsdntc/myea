
<?php require_once 'inc/header.php'; ?>
<?php include 'regaccount.php'; ?>
<div class="w3-container w3-content w3-mobile" style="width: 500px;margin-bottom: 200px;">
    <h2>Sign up here!</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
       <span class="w3-center" style="color: lime;font-size: 11px;"><?php echo $success ?? '' ?></span>
        
        <input type="text" class="w3-input w3-border w3-round <?php echo isset($errors['fnme']) ? 'w3-border-red' : '' ?>" placeholder="First name" name="fnme" style="width: 100%;<?php echo isset($errors['fnme']) ? 'background-color:;color:;' : '' ?>">
        <span style="color: red;font-size: 11px;"><?php echo $errors['fnme'] ?? '' ?></span>
        <br>
        
        
        <input type="text" class="w3-input w3-border w3-round <?php echo isset($errors['lnme']) ? 'w3-border-red' : '' ?>" placeholder="Last name" name="lnme" style="width: 100%;">
        <span style="color: red;font-size: 11px;"><?php echo $errors['lnme'] ?? '' ?></span>
        <br>
        
        <input type="text" class="w3-input w3-border w3-round <?php echo isset($errors['uemail']) ? 'w3-border-red' : '' ?>" placeholder="Email or phone no." name="uemail" style="width: 100%;">
        <span style="color: red;font-size: 11px;"><?php echo $errors['uemail'] ?? '' ?></span>
        <br>
        
        <input class="w3-input w3-border w3-round w3-left <?php echo isset($errors['upass']) ? 'w3-border-red' : '' ?>" placeholder="Password" name="upass" style="width: 49%;">
        
        
        <input class="w3-input w3-border w3-round w3-right <?php echo isset($errors['upassrepeat']) ? 'w3-border-red' : '' ?>" placeholder="Re-enter password" name="upassrepeat" style="width: 49%;">
        <span style="color: red;font-size: 11px;"><?php echo $errors['upass'] ?? '' ?></span>
        <span style="color: red;font-size: 11px;"><?php echo $errors['upassrepeat'] ?? '' ?></span>
        <br>
        <br>
        
        <button  type="submit" name="createacc" class="w3-button w3-round" style="width: 100%;background-color:#219b4f;"><i class="fa fa-paper-plane"style="color: white;" ></i> &nbsp;&nbsp;<strong style="color: white;">Create Account</strong></button>
        
    </form>
</div>
<?php require_once 'inc/footer.php'; ?>