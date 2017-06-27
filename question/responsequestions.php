
         <?php
                require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";

        
          
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
  


?>