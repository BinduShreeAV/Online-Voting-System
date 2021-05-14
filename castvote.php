<?php
include('dbconnection.php');
session_start();

if(strlen($_SESSION['vid'])== 0)
    {   
header('location:login.php');
}
else
{   
  $q= "SELECT * from election where id=3";

  $query=mysqli_query($conn,$q);  

  $row =  mysqli_fetch_array($query);

  $m=$row['econtrol'];

  if($m==0)
  {
    echo "<script type='text/javascript'> alert('Election is yet to begin.'); </script>";
     
    echo "<script type='text/javascript'> document.location = 'voterhomepage.php'; </script>";
  }



  $m = $_SESSION['vid'];
    $f="SELECT * FROM vote WHERE voter_id = '$m' ";
    $h = mysqli_query($conn,$f);
    $u = mysqli_fetch_assoc($h);
    if($u)
    {
        
        echo "<script type='text/javascript'> alert('You have already casted your vote.'); </script>";
     
        echo "<script type='text/javascript'> document.location = 'voterhomepage.php'; </script>";
    }
    
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

.c{
  background-color:#0033cc;
  width: 110%;
  font-size: 20px;
  color:white;
  text-align: center;
  margin-left:-10px;
  margin-bottom: -10px;
}
.c:hover
{
  background-color: #ddd;
  color: black;
}


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
  <p style="font-size:50px;font-weight:bold;">Cast Vote </p>
</div>


 <table  border='4' cellpadding='20' cellspacing='10' width="1100px" align="center" style=" box-shadow:0 0 4px;border-radius:20px;border: 5px solid #0033cc;font-size:25px;" >
 <tr style="background-color:rgb(0, 51, 204, 0.2);">
 <th style="border:3px black outset;"> Sl Number </th>
 <th style="border:3px black outset;"> Party Name </th>
 <th style="border:3px black outset;"> Candidate Name </th>
 <th style="border:3px black outset;"> Candidate Id</th>
 <th style="border:3px black outset;"> Choose Your Candidate </th>
 </tr>

<?php
$cnt=1;

while($cols=mysqli_fetch_assoc($r))
{
?>
<tr>
<td align="center"> <?php echo $cnt ?> </td>

<form method="post" action="voteprocess.php">

<td style="font-weight:bold;font-size:120%;"align="center"><?php echo $cols['party_name'] ?></td>

<td align="center"><?php echo $cols['name'] ?></td>

<td align="center"><?php echo $cols['cand_id'] ?></td>

<input type="hidden" name="party_name" value="<?php echo $cols['party_name'] ?>" />
<input type="hidden" name="cand_id" value="<?php echo $cols['cand_id'] ?>" />
<input type="hidden" name="vid" value="<?php echo $_SESSION['vid'] ?>" />

<td> <input type="submit" name="submit" class="c" value="Cast"/> </td>
</tr>

</form>
<?php
$cnt++;
}
?>

</table>

<div>

</div>

</body>
</html>
<?php } ?>