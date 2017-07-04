<?php
session_start();
   require  "db/config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>


<link rel="stylesheet" href="css/adminhomepage.css">

  <title></title>
</head>
<body class="bg">



    <div id="buttoncontainer">
    <button id="username"><?php echo $_SESSION['username'];?></button>
    <button id="homebutton" onclick="location.href='adminhomepage.php'">HOME</button>     
    <form id="myform" method="post">
    <input type="submit" name="logout-btn" value="LOGOUT" id="logout">
    <input type="button" onclick="location.href='showuser.php'" name="show " value="SHOW USER INFO" id="show">
    <p >Easily handle all user data Right from a click .....</p>

    </form>
    </div>
     
    
    

    
    <?php

           if(isset($_POST['submit_btn'])){
         

  
  
        $question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2']; 
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
            $query = "insert into questions values('','$question','$option1','$option2','$option3','$option4')";
                $query_run = mysqli_query($con,$query);
                if($query_run)
                    {
                    echo 'Succesfully inserted';
                    }
                else
                {
                echo 'failed to iiinsert ';
                }
        
}
?>




   






    <?php 


          if (isset($_POST['logout-btn'])) 
          {
            session_destroy();  
            header('location:sign-in.php');
           }
        
     ?>




</body>
</html>  