
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
         while($row = mysqli_fetch_array($result)){
          
          $qq =  $row['ID'];
                    $_SESSION['qq']=  $qq;
          




         ?>
             <div id="contentscontainer">

                 <h1>  Type Form </h1>
                 <p id="para"> Totally anonymous..</p>
                 

             </div>





          <form class="myform" method="POST">
          <div id="container" style=" background-color: #4CAF78;  position: relative;    top: 181px;  height: 398px;  width: 796px;   left: 232px;">
         <?php echo  "<p id='inputq'>".$row['questions']."</p>" ?> <br>
                    
                    
          <span>Option 1</span><?php echo "<p id='opt1'>" . $row['option1'] . "</p>" ?>
          <span>Option 2</span><?php echo "<p id='opt1'>" . $row['option2'] . "</p>" ?>
          <span>Option 3</span><?php echo "<p id='opt1'>" . $row['option3'] . "</p>" ?>
          <span>Option 4</span><?php echo "<p id='opt1'>" . $row['option4'] . "</p>" ?>
          <!-- <input type="radio"  name="btn1[<?php echo $qq ?>]"  value="<?php echo $row['ID']?>">  -->
          <!-- <input type="submit"  name="btn1[<?php echo $qq ?>]" value="Submit" />  -->

          <!-- </form> -->
         </div>
         
         
 


         <?php
 
 // exit();

}
?>
    </form>               

         

         


         <?php
             if(isset($_POST['btn1'])){


            //   require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";
          //     session_start();
               $questions = $_POST['questions'];
            $answers = $_POST['answers'];
           
           // $s = serialize($_POST['answers']);
           // echo $s;


//      foreach ($_POST as $key)
// {
//   $s = serialize($key);
  // $query = "insert into response values('','$s','$questions','$answers')" ; 
  // $query_run = mysqli_query($con,$query);
  //               if($query_run)
  //                   {
  //                  echo '<script type="text/javascript"> alert("USER REGISTRED ") </script>';
  //                   }
  //               else
  //               {
  //               echo '<script type="text/javascript"> alert("error") </script>';
  //               }
       
// }


foreach ($answers as $key => $value) {
            // if (isset($_POST['answers'])){
         print_r($key);
         print_r($value);
                   //echo '<a href="' . $value . '">' . $key . '</a>';


                // $query = "insert into response values('','$key','$questions','$value')";
                // $query_run = mysqli_query($con,$query);
                // if($query_run)
                //     {
                //    echo '<script type="text/javascript"> alert("USER REGISTRED ") </script>';
                //     }
                // else
                // {
                // echo '<script type="text/javascript"> alert("error") </script>';
                // }

}
}
?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


</body>
</html>





<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <!-- <script type="text/javascript" src="js/response.js"> </script> -->
<link rel="stylesheet" href="css/userresponse.css">


  <title></title>
</head>
<body style=" background-image: url(css/max.jpg);">

       <input type="submit" value="Show responses" id="submitbtn" onclick="location.href='usercheck.php'" >

      
</body>
</html>
