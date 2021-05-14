<!--db connection -->

<?php
error_reporting(0);
session_start();
include('dbconnection.php');
//code of login 

if (isset($_POST['login'])) 
{
    $voter_id = isset($_POST['vid'])? $_POST['vid']:' ';
    $password = isset($_POST['password']) ? $_POST['password']:' ';

  if (empty($voter_id)) 
  {
  	array_push($errors, "voter id is required");
  }
  if (empty($password)) 
  {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) 
  {

    //$password = md5($password);
  	$query = "SELECT voter_id,password FROM voter 
              WHERE voter_id='$voter_id'AND password='$password'";
  	$results = mysqli_query($conn,$query);
	$r=mysqli_fetch_row($results);
    
    if($r)
	{  
     foreach ($results as $result) 
     {
       $voter_id['vid']=$result->vid;
     }
          
      $_SESSION['vid'] = $voter_id;	 
    
	  
  	 echo "<script type='text/javascript'> document.location = 'voterhomepage.php'; </script>";
	}
    else
    {
 	array_push($errors, "Wrong VoterId or password"); 	  
  	}
	
	
  }
}
?>


<!-- login form code --> 
<!DOCTYPE html>
<html>
<head>
 <title>Voters Login</title>
 <style>
 button
{
	width:20%;
	background-color: #0033cc;
	color:white;
	border: 1px outset grey;
    border-radius: 8px;
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
  width:45%;
  border-radius: 10px;
  
}

input[type=submit]:hover
{
  background-color: #D80000;
}

input[type=reset]{
  color:white;
  background-color: #0033cc;
  font-size: 18px;
  width:45%;
  border-radius: 10px;
}

input[type=reset]:hover 
{
    background-color: #D80000;
}
 </style>
 <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body >
<img src="images/login.svg">
<a href="welcomepage.php" >
    <button type="button" class="button">Return to main page</button>
</a>
<a href="adminlogin.php" >
<button type="button" style="position:absolute;right:0px;" class="button">Admin Login here</button>
</a>


  <div class="lcontainer" style="border-radius: 50px;">
    <form action="login.php" method="post" >
     
      
        <div class="header">
             
             <h1> <b> Login Here </b> </h1>
             <p> <small><i> <b> Please fill up the login details.</b></small></i> </p> 
             
             <?php include('errors.php'); ?><br>
             
        </div> 

        <div class="form-input">

          <label for="VOTER ID"><b>VOTER ID:</b></label> 
          <input type="text" name="vid" placeholder="Enter Voter Id" size="30" autofocus required>

        </div>  
        
        
        <div class="form-input">

          <label for="password"><b>PASSWORD:</b></label> 
          <input type="password" name="password" placeholder="Enter Password" size="30" required>

        </div>
        <br>
  

        <div class="m">
   
          <input type="submit" name="login" value="Login">
          <input type="reset" value="Reset">
    
        </div>

        <div class="form-input">

          <p> <i>New User? <br> click here: <a href="registration1.php"> <b> Register </b> </a> </i></p>

        </div>

</form>


</div>
</body>
</html>


