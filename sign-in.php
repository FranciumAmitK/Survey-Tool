<?php
session_start();
    require "db/config.php";

   ?>

<!doctype html>
<html>
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="js/sign-in.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js">
	</script>
    <link rel="stylesheet" href="css/sign-in.css">
</head>


<body>
<ul>
<li  ><a href="#menu" id="menu" >Menu</a></li>
	<li  ><a href="welcome.php" id="home">Home</a></li>
	<li ><a href="#contact" id="contact">Contact</a></li>
</ul>
<p id="corner"></p>

<form id="myform" method="post">
	<label for="uname" id="lname"><b>User-name</b></label>
	   <input type="text" id="uname" name="username" placeholder="enter the username" required/><br>
	<label for="password" id="lpass" ><b>Password</b></label>
	   <input type="password" id="password" name="password" placeholder="enter the Password" required/>
	<input type="submit" id="login" value="LOGIN" name="login_btn">  

</form>
<?php
    if (isset($_POST['login_btn'])) 
    {
    	$username = $_POST['username'];
        $password = $_POST['password'];
        $query="select * from signup WHERE username='$username' AND password='$password'";

        $query_run = mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        {
             $_SESSION['username']=$username;
             header('location:homepage.php');


        }
        else
        {
    	    echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
        }


    }





?>




	<input type="button" onclick="location.href='sign-up.php';" value="Sign-Up" / id="sign-up">
</body>
</html>
