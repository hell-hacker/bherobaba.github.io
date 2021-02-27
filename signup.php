<link rel="stylesheet" href="cssfile.css">
<body id="login">
 <div id="logdiv">
     <h1 id="BBT" style="color:#1ee9c4;font-size:100px">BheroBaba Traders</h1>
     <form style="position:relative;top:0px" id="logform" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >
       <label class="log" >First Name</label><br>
       <input name="fname"  type="text" required><br>
       <label class="log" >Last Name</label><br>
       <input name="lname" type="text" required><br>
       <label class="log" >Mobile no.</label><br>
       <input name="mobile" type="text" required><br>
       <label class="log" >Email </label><br>
       <input name="email" type="text" required><br>
       <label class="log" >Password</label><br>
       <input name="password" type="password" required><br>
       <input name="submit" id="submitlog" style="background-color:#87ebd7" type="submit" value="login"><br>
       </form>
 </div>
   <?php
     if(isset($_POST['submit'])){
         
          $fname=$_POST['fname'];
          $lname=$_POST['lname'];
          $mobile=$_POST['mobile'];
          $email=$_POST['email'];
          $pass=$_POST['password'];
           $conn=mysqli_connect("127.0.0.1:3307","root","","BBT") or die("connection falied");
          
           if(strlen($mobile)!=10||($mobile[0]<='5'))
           {
               ?>
               <script>
                  alert("mobile no. not valid or Remove Country code ");
               </script>
               <?php
           }
           elseif(strpos($email,"@gmail.com")==""||$email[0]<'a'||$email[0]>'z'||substr($email,(strlen($email)-10),10)!="@gmail.com")
           {
            ?>
            <script>
               alert("Email not valid");
            </script>
            <?php
           }
       
           else{ 
           $sql="insert into login values ('{$fname}','{$lname}','{$mobile}','{$email}','{$pass}')";           
            echo $sql;
            $result=mysqli_query($conn,$sql) or die("falied hshsh"); 
        header("Location: login.php" );
      } } 
  ?>
        </body>