<link rel="stylesheet" href="cssfile.css">
<body style="background-color:#1f1729 ">
<div id="AF1">
     <h1 id=AFh1>Add New Feature Phone</h1><br>
     <?php
     $conn=mysqli_connect("127.0.0.1:3307","root","","BBT") or die("connection falied");
       $sql="select * from feature where model='{$_GET['model']}'";
       $result=mysqli_query($conn,$sql) or die("falied hshsh");
       $row=mysqli_fetch_assoc($result);
      ?>     
     <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
     <label>Model</label><br>
     <input value="<?php echo $row['model'] ?>" name="model"><br>
     <label>Image</label><br>
     <input value="<?php echo $row['image'] ?>" name="image"><br>
     <label>Online Price</label><br>
     <input value="<?php echo $row['onPrice'] ?>" name="onPrice"><br> 
     <label>Offline Price</label><br>
     <input value="<?php echo $row['offPrice'] ?>" name="offPrice"><br>
     <label>Battery(in Mah)</label><br>
     <input value="<?php echo $row['battery'] ?>" name="battery"><br>
     <label>RAM</label><br>
     <input value="<?php echo $row['ram'] ?>" name="ram"><br>
     <label>ROM</label><br>
     <input value="<?php echo $row['rom'] ?>" name="rom"><br>
     <label>Camera</label><br>
     <input value="<?php echo $row['camera'] ?>" name="camera"><br>
     <label> Sim</label><br>
        <select value="<?php echo $row['sim'] ?>" name="sim">
    <option value="single">Single</option>
    <option value="dual">Dual</option>
        </select><br>
     <label>Processor</label><br>
     <input value="<?php echo $row['processor'] ?>" name="processor"><br>
    
     <label>Display</label><br>
     <input value="<?php echo $row['display'] ?>" name="display"><br>
     <label>Weight</label><br>
     <input value="<?php echo $row['weight'] ?>" name="weight"><br>
     <label> Audio</label><br>
        <select value="<?php echo $row['audio'] ?>" name="audio">
    <option value="available">available</option>
    <option value="unavailable">unavailable</option>
        </select><br>
    <label> Video</label><br>
        <select value="<?php echo $row['video'] ?>" name="video">
    <option value="available">available</option>
    <option value="unavailable">"Unavailable</option>
</select><br>
    <label>Password</label><br>
     <input name="password" type="password"><br>
        <input id="submit" name="submit" type="submit"><br>     
</form>     
 <?php
   
    if(isset($_POST['submit']))
    {
       $model=$_POST['model'];
       $image=$_POST['image'];
       $onPrice=$_POST['onPrice'];
       $offPrice=$_POST['offPrice'];
       $ram=$_POST['ram'];
       $rom=$_POST['rom'];
       $processor=$_POST['processor'];
       $display=$_POST['display'];
       $sim=$_POST['sim'];
       $audio=$_POST['audio'];
       $video=$_POST['video'];
       $weight=$_POST['weight'];
       $battery=$_POST['battery'];
       $camera=$_POST['camera'];
       if($onPrice=="")
       $onPrice=0;
       if($offPrice=="")
       $offPrice=0;
       if($sim=='single')
       $sim='Single';
       else
       $sim='Dual';
       if($audio=='yes')
       $audio='Available';
       else
       $audio='Unavailable';
       if($video=='yes')
       $video='Available';
       else
       $video='Unavailable';
      $conn=mysqli_connect("127.0.0.1:3307","root","","BBT") or die("connection falied");
      $sql="update feature set model='{$model}',image='{$image}',onPrice='{$onPrice}',offPrice='{$offPrice}',ram='{$ram}',rom='{$rom}',processor='{$processor}',display='{$display}',sim='{$sim}',audio='{$audio}',video='{$video}',weight='{$weight}',battery='{$battery}',camera='{$camera}' where model='{$_GET['model']}'";
         echo "<h1>$sql</h1>"   ;   
      $result=mysqli_query($conn,$sql) or die("falied hshsh");
      ?>
      <?php
      header("Location: featureDisplay.php");
    }
 ?>
</div>
</body>
