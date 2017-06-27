
 <?php   

         require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";

/*

         require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";
         

          
         $sql = "SELECT * FROM questions";
         $result = mysqli_query($con,$sql);    
         while($row = mysqli_fetch_array($result)){
          
         
          echo $row['questions'] ;
        
         }
*/


          $sql = "SELECT * FROM questions";
         $result = mysqli_query($con,$sql);    
         while($row = mysqli_fetch_array($result)){
          ?>
         <div id"comment_box" style="  background-color: #4CAF78;    position: relative;    top: 41px;    height: 298px;    width: 896px;    left: 232px;">

          <form class="myform" method="POST">
                              <input type="radio" / name="questions" value="<?php echo $row['questions']?> " readonly/  ><?php echo $row['questions']?> <br>

          <span>Option 1</span><input type="radio" name="answers" value="<?php echo $row['option1']?>" required /><?php echo $row['option1']?><br>
          <input type="radio" name="answers" value="<?php echo $row['option2']?>" ><?php echo $row['option2']?><br>
          <input type="radio" name="answers" value="<?php echo $row['option3']?>" ><?php echo $row['option3']?><br>
          <input type="radio" name="answers" value="<?php echo $row['option4']?>" ><?php echo $row['option4']?>

          <input type="submit"  name="submit" />
</form>

         </div>
         <br>
         <?php
 
 // exit();

}
  

?>


         <?php
 /*
          if(isset($_POST['submit']))
          {
           $questions = $_POST['questions'];
           $answers = $_POST['answers'];


           $query = "insert into response values('','$questions','$answers')";
                $query_run = mysqli_query($con,$query);
                if($query_run)
                    {
                   echo '<script type="text/javascript"> alert("USER REGISTRED ") </script>';
                    }
                else
                {
                echo '<script type="text/javascript"> alert("error") </script>';
                }
  }

*/
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <script type="text/javascript" src="js/response.js"> </script>


  <title></title>
</head>
<body>
         <button id="finalsubmit">Final Submit</button>


</body>
</html>