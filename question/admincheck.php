<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/admincheck.css">

	<title></title>
</head>

<body>
 <div id="buttoncontainer">
    <button id="homebutton" onclick="location.href='../adminhomepage.php'">HOME</button>     
    <form id="myform" method="post">
    <input type="submit" name="logout-btn" value="LOGOUT" id="logout">

    </form>
    </div>
    <form class="form" action="adminshowresponse.php"  method="post">
    <span>  Click the question to check responses:</span> <br> <input type="number" name="qnum" id="input" /><br />
    <input type="submit" name="submit" value="Submit" id="submit">
    </form>
  



</body>
</html>

<?php 


          if (isset($_POST['logout-btn'])) 
          {
            session_destroy();  
            header("location:/PROJECT PHP/sign-in.php");
           }
        
     ?>