<?php
include 'dbcon.php';
session_start();


if(isset($_SESSION['admin'])){
    //header('location: admin-panel/');
}



if(isset($_SESSION['user'])){
    $conn = $pdo->open();
    
    try{
        $stmt = $conn->prepare("SELECT * FROM members WHERE id=:id");
        $stmt->execute(['id'=>$_SESSION['user']]);
        $user = $stmt->fetch();
    }
    catch(PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }
    $pdo->close();
} 
?>
