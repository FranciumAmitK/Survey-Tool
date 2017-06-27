<?php

                 require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";

  
  
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
        
?>