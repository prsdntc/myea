
<?php include_once 'header.php'; ?>

<div class="w3-container w3-mobile" style="margin-top: 60px;background-color: white;">
    
    <div class="w3-content w3-round w3-margin-bottom w3-row-padding w3-mobile" style="box-shadow: 1px 1px 4px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);">
        
        <div class="w3-third">
            <h2 style="font-size: 14px;font-weight: 500;color: #333;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;"><i class="fa fa-file" style="color: #49b149;"></i> Posts &amp; Uploads
                <?php
                $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM articles");
                $stmt->execute();
                $urow =  $stmt->fetch();
                ?>
                <span style="text-align:center;
                             display:inline;
                             border-bottom:2px solid #444;
                             font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;">
                    <?php echo $urow['numrows']; ?> Posts
                </span>
            </h2>
            
        </div>
    </div>
    <div class="w3-content">
        <div class="w3-row" style="">
             <?php
                    $conn = $pdo->open();
                    $stmt = $conn->prepare("SELECT * FROM articles WHERE publish='publish' ORDER BY date DESC");
                    $stmt->execute();
                    
                    foreach($stmt as $row) {
                        echo "<div class='w3-third'>";
                        
                        echo "<a href='../read.php?v=".$row['id']."' style='text-decoration:none;'>
                        <img src='../img/".$row['photo']."' alt='".$row['description']."' style='object-fit: cover;width:100%;height: 250px;width: 250px' class='w3-hover-opacity w3-card w3-margin'/>
                        </a>";
                        
                        echo "</div>";
                    }
                    $pdo->close();
                ?>
            </ul>
        </div>
    </div>
</div>


<?php include_once 'footer.php'; ?>