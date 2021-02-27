<?php
              
               
               $conn=mysqli_connect("127.0.0.1:3307","root","","BBT") or die("connection falied");
               $sql="delete from feature where model='{$_GET['model']}'";
               $result=mysqli_query($conn,$sql) or die("falied");
               $result=mysqli_query($conn,$sql) or die("falied");
               header("Location: featureDisplay.php" );
?> 