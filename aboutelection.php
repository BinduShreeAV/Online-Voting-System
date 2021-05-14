<?php
include('dbconnection.php');
session_start();
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
<form id="updateform" method="post" action="aboutelection.php">
 <br/>
</br>
<div style = "text-align: center;">
<h1> <b>The current election event is about electing <strong><u>Prime Minister</u></strong>.</b> </h1>
<h2> <u>Roles of Prime Minister in a Country : </u></h2>
</div>

<br>

<div style = "text-align: left;font-size:25px; font-family: Times New Roman ;">
<p>==> <b> <u>The leader of Country:</u></b> The Prime Minister of India is the Chief Head of the Government of India.<br> <br>
==> <b> <u>Official Representative of the country:</u></b> Prime minister represents the country for high-level international meetings and <br> 
he is the ambassador of the country.<br><br>
==> <b><u>Head: </b></u>The Prime Minister is the head of many organisation and programs like Nuclear Command Authority, NITI Aayog, Appointments Committee of the Cabinet, Department of Atomic Energy, Department of Space and Ministry of Personnel, Public Grievances and Pensions.<br><br>
==> <b><u>Chief Advisor:</b></u> He also plays the role of chief advisor to the President.
<br><br>==><b><u>Chairman of the Cabinet:</b></u> The Prime Minister is the chairman of the cabinet and conducts the meetings of the Cabinet. He can impose his decision if there is a crucial opinion difference and conflict among the members. </p>

</div>
</body>


</html>
