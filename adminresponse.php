
 <!DOCTYPE html>
<html>
<head>
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
 -->        <!-- <script type="text/javascript" src="js/response.js"> </script> -->
<link rel="stylesheet" href="question/css/adminresponse.css">


  <title></title>
</head>
<body style="background-image: url(question/css/elegant.jpg)">


 <div id="buttoncontainer">
    <button id="homebutton" onclick="location.href='adminhomepage.php'">HOME</button>     
    <form id="myform" method="post">
    <input type="submit" name="logout-btn" value="LOGOUT" id="logout">

    </form>
    </div>

 <?php   
  session_start();
          //$_SESSION["ID"] = "questionID";  

         require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";
$qnum = $_POST['userid'];
$i = $qnum;
     
         $sql = "SELECT * FROM questions WHERE user_id= " . $i;  
         $result = mysqli_query($con,$sql);  
         $qq = array();
         while($row = mysqli_fetch_array($result)){
          
          $qq =  $row['ID'];


         ?>
          

          <form class="myform" method="POST">
          <div id="container" >
          <span>Question:</span> <?php echo  "<p id='inputq'>".$row['questions']."</p>" ?> <br>
                   <!-- <?php   ?> --> 
                    
          <span>Option 1 :</span>                  <?php echo  "<p id='input'>".$row['option1']."</p>"?><br>
          <span>Option 2 :</span>                  <?php echo  "<p id='input'>".$row['option2']."</p>"?><br>
          <span>Option 3 :</span>                  <?php echo  "<p id='input'>".$row['option3']."</p>"?><br>
          <span>Option 4 :</span>                  <?php echo  "<p id='input'>".$row['option4']."</p>"?>
          

         </div>
         <br>
         <?php
 
 // exit();

}
?>

          </form>


         <?php
 
?>


         <button id="showresponse" onclick="location.href='question/check.php'">Show response</button>
         <button id="showuser" onclick="location.href='showuser.php'">See Users</button>


</body>
</html>

<?php 


          if (isset($_POST['logout-btn'])) 
          {
            session_destroy();  
            header('location:sign-in.php');
           }
        
     ?>