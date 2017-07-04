<?php
            


               require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";
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


                $query = "insert into response values('','$key','$questions','$value')";
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
  
   
?>
