<?php
session_start();
                // require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="free.js"> </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>


<link rel="stylesheet" href="homepage.css">

  <title></title>
</head>
<body class="bg">
<p id="paragraph"> Create Beautiful typeforms</p>


   




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
                                        <form class="myform" method="post" >
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
                                            <input type="reset" name="reset" id="reset">
                                            </div>
<button id="submit">Save</button>                                          <h3  id="success">1st</h3><span>question</span>
                                        </form>
                </div>
                


                

                



    </div>

    
   
    <?php 


          if (isset($_POST['logout-btn'])) 
          {
            session_destroy();  
            header('location:../../../../../xampp/htdocs/PROJECT PHP/sign-in.php');
           }
     ?>




</body>
</html>  