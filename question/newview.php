
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
         <form>
          <p > Question  <?php echo $row['ID'] ?> <?php echo $row['questions'] ?> </p>

          <input type="radio" id="radio1" required/ > <span><?php echo $row['option1']?></span><br>
          <input type="radio" id="radio1" required/> <span><?php echo $row['option2']?></span><br>
          <input type="radio" id="radio1" required/> <span><?php echo $row['option3']?></span><br>
          <input type="radio" id="radio1"  required/> <span><?php echo $row['option4']?></span><br>
          <input type="submit" id="submit">

          </form>

         </div>
         <?php
 
 // exit();

}
  

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
         <button id="finalsubmit">Final Submit</button>


</body>
</html>