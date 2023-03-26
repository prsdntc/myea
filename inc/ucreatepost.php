<?php

$creatpost_error = [];

if(isset($_POST['ucreatepost'])){
    $textfield = test_input($_POST['upost']);
    
    if(empty($textfield)){
        $creatpost_error['text_empty'] = "You cannot possibly leave the fucking textfield empty.";
    }
    
    if(empty($creatpost_error)){
        $now = date('Y-m-d');
        
        
        $set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code=substr(str_shuffle($set), 0, 12);
        
        try{
            $stmt = $conn->prepare("INSERT INTO uposts (content, dateposted, postedby, posterimage, link_key) VALUES (:content, :dateposted, :postedby, :posterimage, :link_key)");
            $stmt->execute(['content'=>$textfield, 'dateposted'=>$now, 'postedby'=>$user['firstname'].' '.$user['lastname'], 'posterimage'=>$user['photo'],'link_key'=>$code]);
            $userid = $conn->lastInsertId();
            
            $successpost = 'Your post has been sucessfully uploaded!';
        }
        
        catch(PDOException $e){
            //$_SESSION['error'] = $e->getMessage();
            //header('location: signup.php');
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