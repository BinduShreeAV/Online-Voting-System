<?php
include('dbconnection.php');
session_start();

if(strlen($_SESSION['vid'])== 0)
    {   
header('location:login.php');
}
else
{
	$sql="SELECT * FROM candidate";
	$r = mysqli_query($conn,$sql);

?>




<html>
<head>
<title>
Voter Home Page
</title>
<style>
<?php include('style1.css'); ?>


</style>


</head>
<body>
 
<div class="topnav" style="background-color:#0033cc;">
  <a class="active" href="voterhomepage.php"><b>Home</b></a>
  <a href="aboutelection.php"><b>About Election</b></a>
  <a href="aboutcandidates.php"><b>Candidates </b></a> <t/>
  <a href="castvote.php"><b>Cast Vote </b> </a>
  <a href="vresults.php"><b>Results </b></a>
  
  <a class="z" href="logout.php"><b>Logout</b></a>
  </div>
  <br/>
  <br>
  <br>
  <div align="center">
  <p style="font-size:50px;font-weight:bold;">Nominated Candidates </p>
</div>
<form id="updateform" method="post" action="aboutcandidates.php">

 <table  border='4' cellpadding='20' cellspacing='10' width="1100px" align="center" style=" box-shadow:0 0 4px;border-radius:20px;border: 5px solid #0033cc;font-size:25px;" >
 <tr style="background-color:rgb(0, 51, 204, 0.2);">
 <th style="border:3px black outset;"> Sl Number </th>
 <th style="border:3px black outset;"> Party Name </th>
 <th style="border:3px black outset;"> Candidate Name </th>
 <th style="border:3px black outset;"> DOB </th>
 <th style="border:3px black outset;"> Region </th>
 </tr>
<?php
$cnt=1;
while($cols=mysqli_fetch_assoc($r))
{
?>
<td align="center"> <?php echo $cnt ?> </td>

<td style="font-weight:bold;font-size:120%;"align="center"><?php echo $cols['party_name'] ?></td>

<td align="center"><?php echo $cols['name'] ?></td>

<td align="center"><?php echo $cols['DOB'] ?></td>

<td align="center"><?php echo $cols['region'] ?></td>
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