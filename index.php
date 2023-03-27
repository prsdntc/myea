
<?php include 'inc/header.php'; ?>

<div class="w3-content" style="max-width:1200px;margin-top: 35px;">
    
    <div class="w3-row-padding  " style="margin-bottom: 15px;padding-top:20px;">
        
        <?php
        
        if(!isset($_SESSION['user']) && !isset($_SESSION['admin'])) {
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM articles WHERE publish='publish' ORDER BY date DESC LIMIT 3");
        $stmt->execute();
        
        
        foreach($stmt as $row){
            echo "<div class='w3-third w3-animate-bottom' >";
            
            echo "<div class='makeborder-radius-container'>";
            
            echo " <div class='post-thumbnail '>
                     <img src='./img/".$row['photo']."'/>
                   </div>";
            
            echo "<div class='post-details'>
                  
                  <div class='title'>
                  <h3><a href='watch?v=".$row['id']."'>".$row['heading']."</a></h3>
                  
                   <time style='color: #666;font-weight:400;line-height:0.5;'>".get_time_ago(strtotime($row['date']))."</time>
                  </div>
                  
                  </div>
                  </div> <!-- makeborder-radius-container -->
                </div> <!-- w3-third --->";
        }
        } else {
            echo "<h1>Fucker you are logged in!</h1>";
        }
        ?>
    </div>
    </div>

<?php include 'inc/footer.php'; ?>
