<?php
   session_start();
   if($_SESSION['password']!='admin'){
      header("Location: featureDisplay.php");
   }
?>
<link rel="stylesheet" href="cssfile.css">
<body style="background-color:#1f1729 ">
<div id="AF1">
     <h1 id=AFh1>Add New Feature Phone</h1><br>
     <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
     <label>Category</label><br>
     <select name="category">
    <option value="smartphone">smartphone</option>
    <option value="featurephone">feature phone</option>
    <option value="cover">cover</option>
    <option value="earphone">Earphone</option>
        </select><br>
    <label>Model</label><br>
     <input name="model" required><br>
     <label>Image</label><br>
     <input name="image" required><br>
     <label>Online Price</label><br>
     <input name="onPrice" required><br>
     <label>Offline Price</label><br>
     <input name="offPrice" required><br>
     <label>Battery(in Mah)</label><br>
     <input name="battery"><br>
     <label>RAM</label><br>
     <input name="ram"><br>
     <label>ROM</label><br>
     <input name="rom"><br>
     <label>Camera</label><br>
     <input name="camera"><br>
     <label> Sim</label><br>
        <select name="sim">
    <option value="single">Single</option>
    <option value="dual">Dual</option>
        </select><br>
     <label>Processor</label><br>
     <input name="processor"><br>
    
     <label>Display</label><br>
     <input name="display"><br>
     <label>Weight</label><br>
     <input name="weight"><br>
     <label> Audio</label><br>
        <select name="audio">
    <option value="available">available</option>
    <option value="unavailable">unavailable</option>
        </select><br>
    <label> Video</label><br>
        <select name="video">
    <option value="available">available</option>
    <option name="unavailable">unvailable</option>
</select><br>
       <input id="submit" name="submit" type="submit"><br>     
</form>     
 <?php
    if(isset($_POST['submit']))
    {
       $category=$_POST['category'];
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
      $sql="Insert into feature values ('{$category}','{$model}','{$image}','{$onPrice}','{$offPrice}','{$ram}','{$rom}','{$processor}','{$display}','{$sim}','{$audio}','{$video}','{$weight}','{$battery}','{$camera}')";
      
      $result=mysqli_query($conn,$sql) or die("falied hshsh");
      ?>
      <?php
      header("Location: featureDisplay.php");
    }
 ?>
</div>
</body>
