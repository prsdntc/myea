<?php
// TIGHTEN THE SERCURITY!!! MAKE SOME IMPROVEMENTS ON THE SIGN UP SCRIPT SECURITY

$errors = [];
define('REQUIRED_FIELD', 'Field can\'t be left empty!');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname = test_input($_POST['fnme']);
    $lastname = test_input($_POST['lnme']);
    $email = test_input($_POST['uemail']);
    $pswd = test_input($_POST['upass']);
    $pswd_confirm = test_input($_POST['upassrepeat']);
    
    //Validate the fields
    if (!$firstname){
        $errors['fnme'] = REQUIRED_FIELD;
    } else if(strlen($firstname) < 3 || strlen($firstname) > 15) {
        $errors['fnme'] = 'First name must be between 3 and 15 characters long';
    }
    
    if (!$lastname){
        $errors['lnme'] = REQUIRED_FIELD;
    } else if(strlen($firstname) < 3 || strlen($firstname) > 15) {
        $errors['lnme'] = 'Last name must be between 3 and 15 characters long';
    }
    
    if (!$email){
        $errors['uemail'] = REQUIRED_FIELD;
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['uemail'] = 'Enter a valid email address';
    } else {
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM members WHERE email=:email");
        
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch();
        
        if($row['numrows'] > 0){
            $errors['uemail'] = 'Email already exist <a href="login.php" style=\'color:dodgerblue;\'>Login instead</a>!';
        }
    }
    
    if (!$pswd){
        $errors['upass'] = REQUIRED_FIELD;
    } else if(strlen($pswd) < 8){
        $errors['upass'] = 'Your password must be 8 characters long or more!';
    }
    
     if (!$pswd_confirm){
         $errors['upass'] = REQUIRED_FIELD;
       // $errors['upassrepeat'] = REQUIRED_FIELD;
    } 
    
    if ($pswd && $pswd_confirm && strcmp($pswd, $pswd_confirm) !== 0){
        $errors['upassrepeat'] = 'Your passwords must be identical!';
    }
    
    if (empty($errors)){
        $now = date('Y-m-d');
        $password = password_hash($pswd, PASSWORD_DEFAULT);
        
        $set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code=substr(str_shuffle($set), 0, 12);
        
        try{
            $stmt = $conn->prepare("INSERT INTO members (email, password, firstname, lastname, activate_code, created_on) VALUES (:email, :password, :firstname, :lastname, :code, :now)");
            $stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'code'=>$code, 'now'=>$now]);
            $userid = $conn->lastInsertId();
            
            $success = 'Your account has been sucessfully created!';
        }
        
        catch(PDOException $e){
            //$_SESSION['error'] = $e->getMessage();
            header('location: signup.php');
        }
        $pdo->close();
    }
}


function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}