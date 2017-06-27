<?php
session_start();
   require  "db/config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="js/homepage.js"> </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>


<link rel="stylesheet" href="css/homepage.css">

  <title></title>
</head>
<body class="bg">
<p id="paragraph"> Create Beautiful typeforms</p>


   <div id="container">
        
           
           <center><h1 id="heading1">WELCOME TO HOMEPAGE</h1></center>
           <input type="button" name="getstarted" value="GET_STARTED" id="start">  



   </div>




    <div id="buttoncontainer">
    <button id="username"><?php echo $_SESSION['username'];?></button>
    <button id="homebutton">HOME</button>     
    <form id="myform" method="post">
    <input type="submit" name="logout-btn" value="LOGOUT" id="logout">
    </form>
    </div>
     
    

  <div class="optionbox" id="optionbox">
  <button id="free">FREE QUESTIONS</button>
    <button id="prime">PRIME QUESTIONS</button>
    


   
               <div id="freequestions">
                                        <form class="myform" method="post" id="myform" >
                                            <input type="text"  name="question" required/ maxlength="50" placeholder="Enter the question">
                                            <div class="block">
                                            <input type="text" / name="option1" placeholder="Option 1"  required/> <span class="remove">Remove Option</span></div>
                                            <div class="block">
                                            <input type="text" / name="option2" placeholder="Option 2"  required/> <span class="remove">Remove Option</span></div>
                                            <div class="block">
                                            <input type="text" / name="option3"  placeholder="Option 3"  required/> <span class="remove">Remove Option</span></div>
                                            <div class="block">
                                            <input type="text" / name="option4" placeholder="Option 4"  required/> <span class="remove">Remove Option</span></div>
                                            <div class="block">
                                            </div>
                                            <input type="submit" name="submit_btn" value="SUBMIT">
                                            <h3  id="success"></h3>
                                        </form>
                </div>
                


                

                



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