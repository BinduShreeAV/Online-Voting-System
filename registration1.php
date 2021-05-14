<?php
//database connection
include('dbconnection.php');
session_start();

//code to insert data into db

$voter_id ="";
$first_name="";
$last_name="";
$DOB="";
$gender="";
$mobile_no="";
$email_id="";
$region="";
$password="";
$confirm_password="";


if(isset($_POST['submit']))
{
  
  $voter_id = isset($_POST['vid'])? $_POST['vid']:' ';
  $first_name = isset($_POST['fname'])? $_POST['fname']:' ';
  $last_name = isset($_POST['lname'])? $_POST['lname']:' ';
  $DOB = isset($_POST['DOB'])? $_POST['DOB']:' ';
  $gender = isset($_POST['gender'])? $_POST['gender']:' ';
  $mobile_no = isset($_POST['mobile_no'])? $_POST['mobile_no']:' ';
  $email_id = isset($_POST['email'])? $_POST['email']:' ';
  $region = isset($_POST['region'])? $_POST['region']:' ';
  $password = isset($_POST['password'])? $_POST['password']:' ';
  $confirm_password = isset($_POST['confirm_password'])? $_POST['confirm_password']:' ';


if(empty($voter_id)){array_push($errors,"VoterId is required"); }
if(empty($first_name)){array_push($errors,"First Name Is Required"); }
if(empty($DOB)){array_push($errors,"Date Of Birth is required"); }
if(empty($gender)){array_push($errors,"gender is required"); }
if(empty($mobile_no)){array_push($errors,"mobile number is required"); }
if(empty($email_id)){array_push($errors,"email id is required"); }
if(empty($region)){array_push($errors,"region is required"); }
if(empty($password)){array_push($errors,"password is required"); }
if(empty($confirm_password)){array_push($errors,"confirm password is required"); }

if($password != $confirm_password){ array_push($errors,"The passwords do not match.Please re-enter"); }

$voter_check_query = "SELECT * FROM voter WHERE voter_id='$voter_id' OR email='$email_id'";

$query = mysqli_query($conn , $voter_check_query);

if (mysqli_num_rows($query) > 0) 
{
  // output data of each row
  $row = mysqli_fetch_assoc($query);
  if ($voter_id==$row['voter_id'])
  {
       array_push($errors,"voter Id already exits");
  }
  else if($email_id==$row['email']) // change it to just else
  {

      array_push($errors,"Email Id already exists");
  }

}
  
if(count($errors) == 0)
	 {
    echo "yes";
		 
	  $q = "INSERT INTO voter (voter_id,first_name,last_name,DOB,mobile_no,gender,email,region,password) 
    VALUES('$voter_id','$first_name','$last_name','$DOB','$mobile_no','$gender','$email_id','$region','$password')";
   
	 	mysqli_query($conn,$q); 
    
   
		 echo "<script type='text/javascript'> alert('You are now registered successfully.Please login to continue'); </script>";
     
     echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
    

  }   
   
}
?>

<!--register form code  -->


<!DOCTYPE html>
<html>
<head>
<title>
voter registration 
</title>
<style>
<?php include('errors.php'); ?>


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
}

input[type=reset]:hover 
{
    background-color: #D80000;
}
</style>

<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<a href="welcomepage.php" >
  <button type="button" style="position:absolute;right:0px;" class="button">Return to main page</button>
</a>
   <!--<div class="container">-->
  
   
      <form action="registration1.php" method="post">
      
      <table width="880" style="background-color: rgb(0, 51, 204, 0.5);margin-top: 40px;border-radius:50px;box-shadow: 10px 10px 5px grey;" align="center" cellpadding="3px" >
      
      <tr><th colspan="2" height="5" style="align:center;" class="t1">
      <img src="images/avatar.svg" style="width:150px;height:150px;margin-top: -40px;">
      <br>
      
        <font size="7">Register Here</font><br/><br/>
        <p> <small><i> Please fill up the form.</small></i> </p> <br> 
        <?php include('errors.php'); ?> 
      </th></tr>

    <tr><td  style="padding:3px 35px;" ><br/> 
    <label for="VOTER ID"><b>VOTER ID:</b></label> <br/>
    <input type="text" name="vid" placeholder="Enter First three letters of your name and year of birth" size="35" title="Enter First three letters of your name and year of birth"
    pattern="[A-Za-z0-9]{7,7}" autofocus required> 
	  </td>
    </tr>
             
    <tr><td style="padding:3px 35px;">
    <label for="FIRST NAME"><b>FIRST NAME:</b></label> <br/>
    <input type="text" name="fname" placeholder="Enter your first name" size="30" required> 
    </td>     
    
    <td> </br>
    <label for="LAST NAME"><b>LAST NAME:</b></label><br/>
    <input type="text" name="lname" placeholder="Enter your last name" size="30">
    <br/> <br/> </td></tr>
           

    
    <tr>
    <td style="padding:3px 35px;">
    <label for="GENDER" required><b>GENDER: </b> </label> 
                   <input type="radio" name="gender" value="male"> 
                     <label for="male">Male </label>
                   <input type="radio" name="gender" value="female">
                     <label for="female">Female </label>
                   <input type="radio" id="others" name="gender" value="others"> 
                     <label for="others">Others </label> <br/> <br/>
    </td>
    <td>
    <label for="DOB"><b>DOB:</b></label> <br/>
    <input type="date" name="DOB" size="30" required> <br/> <br/>
    </td>
    
    
    </tr>   

    <tr>
    <td style="padding:3px 35px;">
    <label for="mobile no"><b>MOBILE NO:</b></label> <br/>
    <input type="text" name="mobile_no" placeholder="Enter mobile no" size="30" pattern="[0-9]{10}" title="Input a 10 digit valid number"  required> 
    <br/><br/></td>
    <td> 
    <label for="email"><b>E-MAIL ID:</b></label> <br/>
    <input type="email" name="email" placeholder="Enter email-id" size="30"required>        
    <br/><br/> </td> 
    </tr>
                     
                  
    <tr><td style="padding:3px 35px;"> 
    <label for="region"><b>REGION :</b></label> <br/>
    <input type="text" name="region" placeholder="Enter region" size="30"required>        
    <br/><br/> </td> </tr>    



    <tr><td style="padding:3px 35px;">
    <label for="password"><b>PASSWORD:</b></label> </br>
    <input type="password" name="password" placeholder="Type your password" size="30" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  required>           
    <br/><br/></td>   
   
    <td>
    <label for="confirm password"><b>CONFIRM PASSWORD:</b></label><br/>
    <input type="password" name="confirm_password" 
    placeholder="Type your password again" size="30" required> 
    <br/><br/></td></tr>
                 
    <tr><td colspan="2" align="center">
    <input type="submit" value="submit" name="submit"> 
	  <input type="reset" value="Reset">
    
	  <br/><br/>
	  <b><i>Already a member? <br> Click here: </i></b> <a href="login.php">Login</a><br/></td></tr>
    


</table>    
</div>  
</form>


</body>

</html>

