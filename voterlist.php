<?php
session_start();
include('dbconnection.php');



if(strlen($_SESSION['vlogin'])== 0)
    {   
header('location:adminlogin.php');
}
else
{
	$sql="SELECT * FROM voter";
	$r = mysqli_query($conn,$sql);

?>


<html>
<head>
<title>
Admin Home Page
</title>
<style>
<?php include('style1.css'); ?>

.d{
  background-color:#0033cc;
  width: 110%;
  font-size: 20px;
  color:white;
  text-align: center;
  margin-left:-4px;
  margin-bottom: -10px;
  border:3px grey outset;
}
.d:hover
{
  background-color: #D80000;
  
  color: white;
}

</style>


</head>
<body style="background-color:#FFFFFF;">
<div class="topnav" style="background-color:#0033cc;">
  <a class="active" href="adminhome.php"><b>Home</b></a>
  <a href="voterlist.php"><b>Voter List</b></a>
  <a href="admincandidates.php"><b>Candidates</b></a>
  <a href="election.php"><b>Election</b></a> <t/>
  <a href="aresults.php"><b>Results </b></a>
  
  <a class="z" href="logout.php"><b>Logout</b></a>
  </div>
<br>
<br>
<br>
<br>
  <h1><u>Registered Voters Details</u></h1>

<form id="updateform" method="post" action="voterlist.php">


 <br/>
<table  border='4' cellpadding='10' cellspacing='7' width="1100px" align="center" style="border: 5px solid #0033cc;" >
 <tr style="background-color:rgb(0, 51, 204, 0.2);">
 <th>Sl Number</th>
 <th colspan='2'>Voter Id</th>
 <th colspan='3'>First Name</th>
 <th colspan='2'>Last Name</th>
 <th colspan='3'>Email ID</th>
 <th colspan='10'>Phone Number</th>
 <th colspan='2'>Region</th>
 <th colspan='3'style="background-color:rgb(0, 51, 204, 0.5);">Delete Voter</th>
 
 </tr>
 <?php
$cnt=1;

while($cols=mysqli_fetch_assoc($r)){

?>
<td align="center"> <?php echo $cnt ?> </td>

<td colspan='2'><?php echo $cols['voter_id'] ?></td>
	
	<td colspan='3'><?php echo $cols['first_name']?></td>
	
	<td colspan='2'><?php echo $cols['last_name'] ?></td>
	
	<td colspan='3'><?php echo $cols['email']?></td>
	
	<td align="center" colspan='10'><?php echo $cols['mobile_no']?></td>
	
  <td colspan='2'><?php echo $cols['region']?></td>

  <td  align="center"><a href="deletevoter.php?voter_id=<?php echo $cols['voter_id'];?>" class="d">Delete </a> </td>
	
  
</tr>
<?php
	$cnt++;
}
?>

</table>
</form>
</body>

</html>
<?php } ?>