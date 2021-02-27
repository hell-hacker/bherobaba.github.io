<?php
   session_start();
   if(isset($_SESSION['mobile'])){
      header("Location: featureDisplay.php");
   }
?>
<link rel="stylesheet" href="cssfile.css">
<body id="login">
 <div id="logdiv">
     <h1 id="BBT" style="color:#1ee9c4;font-size:100px">BheroBaba Traders</h1>
     <form id="logform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
       <label class="log" >Mobile no.</label><br>
       <input type="text" name="mobile"><br>
       <label class="log" >Password</label><br>
       <input type="password" name="password"><br><br>
       <input name="submit" id="submitlog" style="background-color:#87ebd7" type="submit" value="login"><br>
     </form>
     <br><br><br><br>
     <a href="signup.php"><input id="submitlog" style="color:#00fff3;margin-left:553px" type="submit" value="signup"></a>
     <p  id="logmessage">Mobile no. or Password not valid<p>
 </div>
 <?php
   if(isset($_POST['submit'])){
   $conn=mysqli_connect("127.0.0.1:3307","root","","BBT") or die("connection falied");
    $sql="select * from login where mobile='{$_POST['mobile']}' And password='{$_POST['password']}' ";           
    $result=mysqli_query($conn,$sql) or die("falied hshsh"); 
    if(mysqli_num_rows($result)>0)
     {
        session_start();
        $_SESSION['mobile']=$_POST['mobile'];
        $_SESSION['password']=$_POST['password'];
          header("Location: featureDisplay.php" );
         ?>
          <script>
          document.getElementById('logmessage').style.display='none';
       </script>
       <?php
     } 
    else{
    ?>
        <script>
           document.getElementById('logmessage').style.display='block';
        </script>
       <?php 
    }
   } 
?>
</body>