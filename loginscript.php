<?php
// TIGHTEN THE SERCURITY!!! MAKE SOME IMPROVEMENTS ON THE LOGIN SCRIPT SECURITY
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$loginerror = [];

$conn = $pdo->open();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $email = test_input($_POST['lemail']);
    $password = test_input($_POST['lpswd']);
    
    if(!$email){
        $loginerror['email'] = 'Enter your email address';
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $loginerror['email'] = 'Enter a valid email address';
    }
    
    if(!$password){
        $loginerror['password'] = 'Enter your password';
        
    }
    
    if(empty($loginerror)){
        
        try {
            $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM members WHERE email = :email");
            $stmt->execute(['email'=>$email]);
            $row = $stmt->fetch();
            
            if($row['numrows'] > 0){
                if(password_verify($password, $row['password'])){
                    if($row['type']){
                        $_SESSION['admin'] = $row['id'];
                        //header("Location: ./admin-panel/index.php");
                    }
                    else{
                        $_SESSION['user'] = $row['id'];
                        //header("Location: index.php");
                    }
                }
                else{
                    $loginerror['password'] = 'Incorrect Password';
                }
            }
            else{
                $loginerror['email'] = 'Email not found';
            }
        }
        catch(PDOException $e){
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }
}
    $pdo->close();





?>
