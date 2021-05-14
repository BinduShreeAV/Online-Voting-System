<?php
include('dbconnection.php');
error_reporting(0);
$errors=array();


 if (isset($_POST['Login'])) {
   $Loginid= isset($_POST['admin_id'])? $_POST['admin_id']:' ';
  $password = isset($_POST['password']) ? $_POST['password']:' ';

  if (empty($Loginid)) {
  	array_push($errors, "Login id is required");
  }
  
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  $password = $password;
  	$query = "SELECT * FROM admin WHERE admin_id ='$Loginid' AND password='$password'";
  	$results = mysqli_query($conn,$query);
	$r=mysqli_fetch_row($results);
	
	if($r)
	{session_start(); 
  	 $_SESSION['vlogin'] = $_POST['admin_id'];
	 echo "<script type='text/javascript'> document.location = 'adminhome.php'; </script>";
	 
	}
	else{
 	array_push($errors, "Wrong loginid or password"); 	  
  	}
  }
}
?>

<!--db connection-->


<!DOCTYPE html>
<html>
<head>
<title>Admin Login Page</title>

<style>
.error {
  width: 100%; 
  margin: 0px auto; 
  padding: 1px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: center;
}
button
{
	width:20%;
	background-color: #0033cc;
	color:white;
	border: 1px outset grey;
    border-radius: 4px;
	padding:  13px 22px;
	cursor: pointer;
	font-size: 20px;
	z-index:1;
}

button:hover 
{
    background-color: #D80000;
}
input[type=submit]{
  color:white;
  background-color: #0033cc;
  font-size: 18px;
  width:70%;
  padding:  13px 22px;
}

input[type=submit]:hover
{
  background-color: #D80000;
}
body img {
    width: 150px;
    height: 150px;
    position: absolute;
    
    center: 0px;
 }
</style>
</head>

<body class="body">
<img src="images/admin.jpg" style="width:150px;height:150px;margin-left:380px; margin-top:33px;">

<form action="adminlogin.php" name="admin login" method="post">


<a href="welcomepage.php" >
<button type="button" class="button">Return to main page</button>
</a>
<a href="login.php" >
<button type="button" style="position:absolute;right:0px;" class="button">Voters Login here</button>
</a>
<br/><br/><br/><br/><br/><br/><br/><br/>
  

  <div>
  
  <table width="350" id="e" style="background-color: rgb(0, 51, 204, 0.5);box-shadow: 10px 10px 5px grey;" align="center" cellpadding="20px"><tr><th colspan="2" align="center" height="25px" >
  
  <font size="6">Admin Login</font>
  <p> <small><i> <b> Please fill up the login details.</b></small></i> </p> <br>
  <?php include('errors.php'); ?>
</th></tr>
  
  <tr><td align="left" >
        <b>Login Id:</b><br/>
	<input type="text" name="admin_id" required="required" size="40"  placeholder="Enter Login Id" autofocus/></td></tr>

  
	<tr><td align="left" >
	 <b> Password:</b><br/>
	<input type="password" name="password" required="required" size="40"  placeholder="Enter Password"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/></td></tr>
	
	<tr><td colspan="2" align="center">
	<input type="submit" value="Login" name="Login"  />
	<br/></td></tr></table>
	

	</div>
	
  
</form>
</body>
</html>