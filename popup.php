<link rel="stylesheet" href="cssfile.css"> 
<body style=" background-image: url('https://fullscreenbackgroundimages.com/wp-content/uploads/2019/05/Website-Background-Image-5.jpg');
  background-size: cover;
  height: 100%;
  width: 100%;
  opacity:0.7"<?php
            $conn=mysqli_connect("127.0.0.1:3307","root","","BBT") or die("connection falied");
            $sql="select * from feature where model='{$_GET['model']}'";
           
            $result=mysqli_query($conn,$sql) or die("falied hshsh"); 
    
            $row=mysqli_fetch_assoc($result);
        ?>
        <div onclick="fun2()" id="popup">
       
            <div id="popContent">
                <div class="popTable">Model</div>
                <div class="popTable"><?php echo $row['model'] ?></div>
                <div class="popTable">SIM</div>
                <div class="popTable"><?php echo $row['sim'] ?></div>
                <div class="popTable">RAM</div>
                <div class="popTable"><?php echo $row['ram'] ?></div>
                <div class="popTable">ROM</div>
                <div class="popTable"><?php echo $row['rom'] ?></div>
                <div class="popTable">Torch</div>
                <div class="popTable">yes</div>
                <div class="popTable">Processor</div>
                <div class="popTable"><?php echo $row['processor'] ?></div>
                <div class="popTable">Display</div>
                <div class="popTable"><?php echo $row['display'] ?></div>
                <div class="popTable">Battery</div>
                <div class="popTable"><?php echo $row['battery'] ?></div>
                <div class="popTable">weight</div>
                <div class="popTable"><?php echo $row['weight'] ?></div>
                <div class="popTable">Audio</div>
                <div class="popTable"><?php echo $row['audio'] ?></div>
                <div class="popTable">video</div>
                <div class="popTable"><?php echo $row['video'] ?></div>
                <div class="popTable">Camera</div>
                <div class="popTable"><?php echo $row['camera'] ?></div>
            </div> 
           
         <div>   
         <!-- popup coding end-->
             <script>
                  function fun(){
                      document.getElementById("popup").style.zIndex=1;
                      document.getElementById("body1").style.overflow="hidden";
                      console.log("jkws");
                      document.getElementById("popup").style.top=window.pageYOffset-849;
                  }
                  function fun2(){
                    document.getElementById("popup").style.zIndex=-1;
                    document.getElementById("body1").style.overflow="visible";
                  }
             </script>
     </body>        