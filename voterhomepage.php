<?php
session_start();
include('dbconnection.php');

if(strlen($_SESSION['vid'])==0)
    {   
header('location:login.php');
}
$c=$_SESSION['vid'];
$sql= "Select first_name from voter where voter_id='$c'";
$query=mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($query);
?>

<html>
<head>
<title>
Voter Home Page
</title>
<style>
<?php include('style1.css'); ?>
.container {
    width: 90px;
    height: 90px;
    
}

/* resize images */
.container img {
    width: 550px;
    height: 800px;
    margin-left : 700px;
    
}


</style>


</head>
<body style="background-color:#FFFFFF;">
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
<form id="updateform" method="post" action="voterhomepage.php">
 <br/>
</br>
<div style="color: #0033cc;font-size:15px;">
<h1><b>openSOFT EVOTE</b></h1><br>
</div>
<br>
<div style = "margin-left:60px;">
<h1><b> WELCOME <?php echo $r['first_name'] ?>  </b></h1> <br/><br/><br/><br/>
</div>
<div style="margin-left:100px;color: #0033cc;font-size:20px; font-family: Times New Roman , Times, serif;">
<h2><i>Keep calm and choose your leader wisely.</i></h2>
</div>
<div class="container">
<img src="images/wvote3.svg">
</div>
<br>
<br>
<br>
<div style="text-align: center;color: #0033cc;font-size:25px;">
<b><i> "If you don't vote, you loose the right to complain" - George Carlin </i></b>
</div>
</body>

</html>
