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
<span class="paragraph" id="p1"> Create Beautiful typeforms</span>
<h6 class="paragraph" id="p2"> How you want to continue..</h6>


 <div id="freebackground"></div>
 <span class="freedata">  <ul>
     <li>Limited Questions</li>
          <li>Limited resposnes</li>
     <li>Can't edit questions</li>
     
   </ul>
    </span>
 <div id="primebackground"></div>
 <span class="primedata">  <ul>
     <li>Insert Upto 20 questions </li>
          <li>Get 100 Responses</li>
     <li>Add / Remove Options</li>
          <li>Draggable </li>
     <li>Upload photos in questions</li>
         
   </ul>
    </span>
    
  <div class="main" >
  <div class="free" id="freediv">
    <div><a id="freeuserbutton" title="FREE USER"></a></div>
  </div>
  <div class="free" id="primediv">
    <div><a id="primeuserbutton" title="PRIME USER"></a></div>
  </div>
  </div>
   <div id="container">
        
           
           <center><h1 id="heading1">WELCOME </h1></center>
           <input type="button" name="getstarted" value="GET_STARTED" id="start">  
           <button id="showresponse" onclick="location.href='question/userresponse.php'">SHOW RESPONSES</button>
           <button id="preview" onclick="location.href='question/response.php'">PREVIEW FORM</button>



   </div>




    <div id="buttoncontainer">
    <button id="username"><?php echo $_SESSION['username'];?></button>
    <button id="homebutton">HOME</button>     
    <form id="myform" method="post">
    <input type="submit" name="logout-btn" value="LOGOUT" id="logout">
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