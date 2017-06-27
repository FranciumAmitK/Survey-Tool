<?php 
require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";


          if(isset($_POST['preview'])){
         $sql = "SELECT * FROM questions";
         $result = mysqli_query($con,$sql);    
         while($row = mysqli_fetch_array($result)){
          ?>
         <div id"comment_box">
         <p> ouhuhuhihiuh<?php echo $row['questions'] ?> </p>
         </div>
         <?php
  }
}
?>