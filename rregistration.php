<!-- db connection code for register form -->
<?php

include("dbconnection.php");
error_reporting(0);

if(isset($_POST['submit']))
{
$vid = $_POST['vid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$mobile_no = $_POST['mobile_no'];
$email = $_POST['email'];
$password = $_POST['password']; 
$confirm_password = $_POST['confirm_password'];

if($password == $confirm_password)
{ 
  
  $query = "INSERT INTO voter VALUES ('$vid','$fname','$lname','$DOB','$gender','$mobile_no','$email','$password')";
  $data = mysqli_query($conn, $query);


if($data)
{
  echo "registered successfully.";
}
else
{
mysqli_connect_error();
}
}

else
{
  echo "passwords do not match!";

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
<link rel="stylesheet" type="text/css" href="style.css">
</head>
</body>
<body>
   <div class="container">
          
          <div class="header">
             
              <h1> <b> Register Here </b> </h1>
              <p> <small><i> Please fill up the form.</small></i> </p> <br> <br>
              
          </div> 
            
       
          <form action="rregistration.php" method="post">
                <div>
                 
                 <label for="VOTER ID">VOTER ID:</label>
                 <input type="text" name="vid" placeholder="enter voter id" autofocus required> <br> <br>
                 
                </div>
                
                
                <div>
                 
                  <label for="FIRST NAME">FIRST NAME:</label> 
                  <input type="text" name="fname" placeholder="enter your first name" required> 
                  
                  <label for="LAST NAME">LAST NAME:</label>
                  <input type="text" name="lname" placeholder="enter your last name"> <br> <br>
    
                 </div>
                 
                 
                 <div>
                  
                   <label for="DOB">DOB:</label>
                   <input type="date" name="DOB" required> <br> <br>
                   
                 </div>
                 
                 <div>
                 
                    <label for="GENDER" required>GENDER: </label>
                   <input type="radio" name="gender" value="male"> 
                     <label for="male">Male </label>
                   <input type="radio" name="gender" value="female">
                     <label for="female">Female </label>
                   <input type="radio" id="others" name="gender" value="others"> 
                     <label for="others">Others </label> <br> <br>
                   
                 </div>
                 
                 
                 <div>
                     
                   <label for="mobile no">MOBILE NO:</label> 
                   <input type="text" name="mobile_no" placeholder="enter mobile no" required> <br> <br>
                   
                 </div>
                 

                 <div>
                     
                   <label for="email">E-MAIL ID:</label> 
                   <input type="email" name="email" placeholder="enter email-id" required> <br> <br>
                   
                 </div>
                 
                 <div>
                 
                   <label for="password">PASSWORD:</label>
                   <input type="password" name="password" placeholder="type your password" required>
                 
                   <label for="confirm password">CONFIRM PASSWORD:</label>
                   <input type="password" name="confirm_password" placeholder="type your password again"required> <br> <br>
                 
                 </div>
                 
                 
                 <div>
                 
                   <input type="submit" value="submit" name="submit"> 
                   <input type="reset" value="reset">
                 
                 </div>
                 
                 <p> <i>Already a user? <br> click here:</i> <a href="login.php"> <b>Log in</b> </a> </p>
               

</form>






</div>

</body>
</html>

