<?php
require  "../../../../../xampp/htdocs/PROJECT PHP/db/config.php";

$sql = "SELECT * FROM questions";
$results = mysqli_query($con,$sql);
/*
if (!$results)  {
	//printf("Error: %s\n", mysqli_error($con));
    //exit();

	die('invalid query:' . mysql_error());
}

echo '<h3>SURVEY FORM</h3>';

while($results = mysqli_fetch_array($results)){
	echo '<div style="border: 1px solid #e4e4e4; padding 16px">';
	echo '<p>question 1:' . $results['questions'] . '</p>';

}


*/

         // if(isset($_POST['preview'])){
                       // header('location:newview.php');

         $sql = "SELECT * FROM questions";
         $result = mysqli_query($con,$sql);    
         while($row = mysqli_fetch_array($result)){
          ?>
         <div id"comment_box">
         <p> <?php echo $row['questions'] ?> </p>
         </div>
         <?php
 // }
  exit();

}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="display" >pohhiohioih</div>

</body>
</html>