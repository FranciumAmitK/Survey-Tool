
 <?php   
 session_start();
          //$_SESSION["ID"] = "questionID";  

         require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";

/*

         require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";
         

          
         $sql = "SELECT * FROM questions";
         $result = mysqli_query($con,$sql);    
         while($row = mysqli_fetch_array($result)){
          
         
          echo $row['questions'] ;
        
         }
*/       

     
         $sql = "SELECT * FROM questions WHERE user_id= " . $_SESSION['ID'];  
         $result = mysqli_query($con,$sql);  
         $qq = array();
         $ques = array();

         while($row = mysqli_fetch_array($result)){
          
         

          $qqq = $row['questions'];
          $_SESSION['qqq'] = $qqq;
          $ques[]=$qqq;
          print_r($qqq);




}

         ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/usercheck.css">

	<title></title>
</head>

<body>
 <div id="buttoncontainer">
    <button id="homebutton" onclick="location.href='../homepage.php'">HOME</button>     
    <form id="myform" method="post">
    <input type="submit" name="logout-btn" value="LOGOUT" id="logout">

    </form>
    </div>

<ul id="quest" >

    <li class="list"><a href="showresponse.php?id=1"><?php echo $ques[0] ?></a></li>
    <li class="list"><a href="showresponse.php?id=2"><?php echo $ques[1] ?></a></li>

</ul>
  <span>  Select the question number to check responses:</span> 

</body>
</html>

<?php 


          if (isset($_POST['logout-btn'])) 
          {
            session_destroy();  
            header("location:/PROJECT PHP/sign-in.php");
           }
        
     ?>