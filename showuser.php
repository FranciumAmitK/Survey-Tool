
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

     
         $sql = "SELECT * FROM signup" ;  
         $result = mysqli_query($con,$sql);  
         $qq = array();
         ?>

    <div id="buttoncontainer">
    <button id="username" ><?php echo $_SESSION['username'];?></button>
    <button id="homebutton" onclick="location.href='adminhomepage.php'">HOME</button>     
    <form id="myform" method="post">
    <input type="submit" name="logout-btn" value="LOGOUT" id="logout">
    </form>
    </div>

<p id="id"> ID</p>
<p id="name"> Name</p>
<p id="role"> Role </p>
<p id="email"> E-mail </p>
<p id="phonenumber"> Phone-number </p>

         <?php
         while($row = mysqli_fetch_array($result)){
          
          // $_SESSION['ID']=$row ['ID'];


         ?>
          
          <form class="myform" method="POST" onsubmit="window.location.href = 'adminresponse.php'";>
         

      <input type="text" name="Name" value="<?php echo $row ['ID']; ?>  " readonly/>
      <input type="text" name="Name" value="<?php echo $row ['firstname']; ?>  <?php echo $row ['lastname']; ?> "  readonly/>
      <input type="text" name="Name" value="<?php echo $row ['role']; ?>  " readonly/>
      <input type="text" name="Name" value="<?php echo $row ['email']; ?>  " readonly/>
      <input type="text" name="Name" value="<?php echo $row ['phonenumber']; ?>  "  readonly/>
      
        
         <br>
         <?php
 
 // exit();

}
?>

  


          </form>

     <form class="form" action="adminresponse.php"  method="post">
    Select the user id you want to review <br> 
     <input type="number" required/ name="userid" id="input" /><br />
    <input type="submit" name="submit" value="Submit" id="submit" >
    </form>

         

<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<link rel="stylesheet" href="css/showuser.css">


  <title></title>
</head>



</body>
</html>


    <?php 


          if (isset($_POST['logout-btn'])) 
          {
            session_destroy();  
            header('location:sign-in.php');
           }
        
     ?>