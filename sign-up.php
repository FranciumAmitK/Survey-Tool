<?php
 require "db/config.php";
?>

<!doctype html>
<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="js/sign-up.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
	<link rel="stylesheet" href="css/sign-up.css">

    </head>

<body>




<div id="container">
    <form class="myform" method="post">

    <label for="fname" id="fname">First-Name *</label><br>
	   <input type="text" id="f-box" name="firstname" required/ >
	<label for="lname" id="lname">Last-Name *</label><br>
	   <input type="text" id="l-box" name="lastname" required/>
	<label for="fname" id="eid">E-mail *</label><br>
	   <input type="email" id="e-box" name="email" required/>
	<label id="phone">Phone number *</label>
	   <input type="number" id="p-box" name="phonenumber" required/>


    <label for="fname" id="uname">User-Name</label><br>
	   <input type="text" id="u-box" name="username" required/ maxlength="10" placeholder="Enter the username">
    <label for="fname" id="npassword">New-password</label><br>
       <input type="password" id="password" name="password" required/ maxlength="10" placeholder="Choose a unique password">
    <label for="fname" id="cpassword" >Confirm password</label><br>
       <input type="password" id="cnfpassword" name="cnfpassword" required/> 
   	   <input type="reset" id="next" value="RESET">

    <input type="submit" value="SUBMIT"  id="submit" name="submit_btn">

</form>
</div>




<ul>
    <li><a href="#menu" id="menu" >Menu</a></li>
	<li><a href="welcome.php" id="home">Home</a></li>
	<li><a href="#contact" id="contact">Contact</a></li>
</ul>

<?php
    if(isset($_POST['submit_btn']))
    {
    	//echo '<script type="text/javascript"> alert("submit button clicked") </script>';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cnfpassword = $_POST['cnfpassword']; 
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        
        
        
        if($password==$cnfpassword)
        {
        	$query= "select * from signup WHERE username='$username' ";
            $query_run = mysqli_query($con,$query);
            if($query_run)
            {
        	    if(mysqli_num_rows($query_run)>0)
            	{
        	    	echo '<script type="text/javascript"> alert("USERNAME ALREADY EXITS") </script>';
            	}
            	else
        	    {
                  
        		    $query = "insert into signup values('','user','$firstname','$lastname','$email','$phonenumber','$username','$password')";
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
            
        }
        else{
        	        echo '<script type="text/javascript"> alert("DB error") </script>';

        }

    }
    else
    {
    	        	        echo '<script type="text/javascript"> alert("pasword mismatch") </script>';

    }
}
else
{

}
?>



</body>
</html>
