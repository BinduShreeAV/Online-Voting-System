<?php
session_start();
include('dbconnection.php');



if(strlen($_SESSION['vlogin'])== 0)
    {   
header('location:adminlogin.php');
}
else
{
	$sql="SELECT COUNT(voter_id) as max1 FROM voter";
    $query = mysqli_query($conn,$sql);
    
    $r = "SELECT COUNT(voter_id) as mvotes FROM vote";
    $q = mysqli_query($conn,$r);

?>


<html>
<head>
<title>
Admin Home Page
</title>
<style>
<?php include('style1.css'); ?>
.container
{
    width: 90px;
    height: 90px;

}

.container img
{
    width: 500px;
    height: 500px;
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
<form id="updateform" method="post" action="adminhome.php">
 <br/>
</br>
<div style="color: #0033cc;font-size:20px;">
<h1><b>WELCOME TO openSOFT EVOTE</b></h1><br>
</div>

<div style="font-size:20px;margin-left:450px;">
<h1>
Admin Space
</h1>
</div>
<br>

<div style="font-size:20px;margin-left:450px;" >
<h2> Track number of votes and take necessary action
</h2>
</div>

<table cellspacing='10' cellpadding='10' border='5' align="center" style="border: 10px solid #0033cc;margin-left:650px;margin-top:60px;">
  <caption><font size="5"><b>Live Stats</b></font></caption>
  <tr>
   <th colspan='10'>Total Voters Registered</th>
   <th colspan='10'>Total Votes </th>
   </tr>
   
       <?php  while($cols=mysqli_fetch_assoc($query))
		  {
			  echo "<td align=center colspan=10'>".$cols['max1']."</td>";
          }
          
          while($rows = mysqli_fetch_assoc($q))
          {
              echo "<td align=center colspan = 10'>".$rows['mvotes']."</td>";

          }
		  
		  echo "<tr>";
		  ?>
</table>
<div class="container">
<img src="images/adminhome.svg">
</div>
</body>

</html>
<?php } ?>