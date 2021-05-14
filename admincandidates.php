<?php
session_start();
include('dbconnection.php');

if(strlen($_SESSION['vlogin'])== 0)
    {   
header('location:adminlogin.php');
}
else
{
	$sql="SELECT * FROM candidate";
	$r = mysqli_query($conn,$sql);

?>



<html>
<head>
<title>
Admin Home Page
</title>
<style>
<?php include('style1.css'); ?>

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
  margin-left: 20px;
}

button:hover 
{
  background-color: #ddd;
  color: black;
}

.d{
  background-color:#0033cc;
  width: 110%;
  font-size: 20px;
  color:white;
  text-align: center;
  margin-left:-4px;
  margin-bottom: -10px;
}
.d:hover
{
  background-color: #D80000;
  
  color: white;
}

.u{
  background-color:#0033cc;
  width: 110%;
  font-size: 20px;
  color:white;
  text-align: center;
  margin-left:-4px;
  margin-bottom: -10px;
}
.u:hover
{
  background-color: #ddd;
  color: black;
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
  <br/>
  <br>

 <br/>
</br>
<br>
<br>
<div >
<a href=addcandidates.php> <button type="button"  class="button">ADD CANDIDATE</button> </a>
</div>
<br><br>
<table  border='4' cellpadding='10' width="1100px" cellspacing="7" align="center" style="border: 5px solid #0033cc;" >
 <tr style="background-color:rgb(0, 51, 204, 0.2);">
 <th>Sl Number</th>
 <th colspan='2'>Candidate Id</th>
 <th colspan='3'>Party Name</th>
 <th colspan='2'>Candidate Name</th>
 <th colspan='3'>DOB</th>
 <th colspan='2'>Region</th>
 <th colspan='2'style="background-color:rgb(0, 51, 204, 0.5);">Update</th>
 <th colspan='3' style="background-color:rgb(0, 51, 204, 0.5);">Delete</th>
 
 </tr>
 <?php
$cnt=1;

while($cols=mysqli_fetch_assoc($r)){

?>
<td align="center"> <?php echo $cnt ?> </td>

<td colspan='2'  align="center"><?php echo $cols['cand_id'] ?></td>
	
	<td style="font-weight:bold;font-size:250%;" align="center" colspan='3'><?php echo $cols['party_name']?></td>
	
	<td colspan='2'  align="center"><?php echo $cols['name'] ?></td>
	
	<td colspan='3'  align="center"><?php echo $cols['DOB']?></td>
	
  <td colspan='2'  align="center"><?php echo $cols['region']?></td>

  <td colspan='2' align="center">
  <form action="updatecandidate.php" method="post">
  <input type="submit" name="update" class="u" value="Update"/> 
  <input type="hidden" name="var" value="<?php echo $cols['cand_id']; ?>" />
  </form>      
  </td>       

  <td align="center">
  <form action="deletecandidate.php" method="post">
  <input type="submit" name="delete" class="d" value="Delete"/> 
  <input type="hidden" name="var" value="<?php echo $cols['cand_id']; ?>" />
  </form>      
  </td>      
	
  
</tr>
<?php
	$cnt++;
}
?>

</body>

</html>
<?php } ?>