<?php
session_start();
include('dbconnection.php');

if(strlen($_SESSION['vlogin'])== 0)
{   
header('location:adminlogin.php');
}

else
{
    $q= "SELECT * from election where id=3";

    $query=mysqli_query($conn,$q);  

    $row =  mysqli_fetch_array($query);

    $m=$row['econtrol'];
    if($m==1)
    {
        header('location:stopelection.php');
    }
}



?>


<html>
<head>
<title>
Admin Home Page
</title>
<style>
<?php include('style1.css'); ?>
.i {
    width: 500px;
    height: 330px;
    position: absolute;
      bottom: 0px;
      left: 0px;
    
  }

input[type=submit]{
    width:20%;
    height:30%;
	background-color: #0033cc;
	color:white;
	border: 1px outset grey;
    border-radius: 100px;
	padding:  30px 40px;
	cursor: pointer;
	font-size: 40px;
  margin-left: 800px;
  margin-top:110px;
  text-align:center;
  box-shadow: 10px 10px 5px grey;
  
}

input[type=submit]:hover
{
    background-color: #ddd;
  color: black;
}
</style>


</head>
<img class="i" src="images/election.svg">
<body style="background-color:#FFFFFF;">
<div class="topnav" style="background-color:#0033cc;">
  <a class="active" href="adminhome.php"><b>Home</b></a>
  <a href="voterlist.php"><b>Voter List</b></a>
  <a href="admincandidates.php"><b>Candidates</b></a>
  <a href="election.php"><b>Election</b></a> <t/>
  <a href="aresults.php"><b>Results </b></a>
  
  <a class="z" href="logout.php"><b>Logout</b></a>
  </div>
  <br/>
  <br>

 
  
   <br/>
   <br/>
   

<div class="c">

<form  method="post" action="control.php">
          <input   type="submit" name="start" value="START" >
        
        </div>

 
</body>

</html>
