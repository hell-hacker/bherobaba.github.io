<?php
   session_start();
   if(!isset($_SESSION['mobile'])){
      header("Location: login.php");
   }
?>
<html>
  <head>
  <link rel="stylesheet" href="cssfile.css">
  </head>
   <body id="body1">
      <?php
           include "header.php";
           include "sidebar.php";
        ?>
       <div id="mainbody" style="grid-template-columns: repeat(2, 1fr)">
            <?php
            
                $conn=mysqli_connect("127.0.0.1:3307","root","","BBT") or die("connection falied");
                $sql="select * from feature where category='smartphone'";
                
                $result=mysqli_query($conn,$sql) or die("falied hshsh"); 
                if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    
            ?>
            <div class="griddiv">
            <img style="height:270;width:289" src="images/<?php echo $row['image'] ?>" >  
            <div style="position:relative;left:120px;">
            <?php  
                if($_SESSION['password']=='admin')
                {
                    ?>
                <a id="edit" href="edit.php?model=<?php echo $row['model'] ?> ">Edit</a> 
                <a id="delete" href="delete.php?model=<?php echo $row['model'] ?> ">Delete</a> 
                <?php
                }
                ?>
                <p id="model"><?php echo $row['model'] ?></p>
                <span id="spOP" style="color:blue">Price</span><p id="ourPrice">&#8377 <?php echo $row['offPrice'] ?></p>
                <span id="spON" style="color:blue">Online</span><p id="onPrice">&#8377 <?php echo $row['onPrice'] ?></p>
                <p id="save"><i>You save Rs.<?php echo $row['onPrice']-$row['offPrice'] ?></i></p>
                <a  href="popup.php?model=<?php echo $row['model'] ?>" ><button class="details">see Details</button></a>
                </div>
                </div>
                <?php 
               }}
               ?>     
        </div>
                  
   </body>
</html>
        