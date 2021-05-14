<?php
include('dbconnection.php');
session_start();
if(count($_POST)>0)
{
  mysqli_query($conn,"UPDATE candidate SET cand_id='". $_POST['cand_id'] ."' , party_name='". $_POST['party_name'] ."', name='". $_POST['name']."',
  DOB='".$_POST['DOB']."',region='".$_POST['region']."'   WHERE cand_id='". $_POST['cand_id']."'  ");
  $messgae = "Record Modified Successfully.";
}
$result = mysqli_query($conn,"SELECT * FROM candidate WHERE cand_id='".$_GET['cand_id']."'");
$row = mysqli_fetch_array($result);
?>


<html>
<head>
<title>
Admin Home Page
</title>
<style>
<?php include('errors.php'); ?>
button
{
	width:20%;
	background-color: #0033cc;
	color:white;
	border: 1px outset grey;
  border-radius: 8px;
	padding:  13px 22px;
	cursor: pointer;
	font-size: 20px;
	z-index:1;
}

button:hover 
{
    background-color: #D80000;
}
 
 input[type=submit]{
  color:white;
  background-color: #0033cc;
  font-size: 20px;
  width:20%;
  border-radius: 10px;
  padding: 13px 22px;
  cursor: pointer;
  
  
}

input[type=submit]:hover
{
  background-color: #D80000;
}

input[type=button]{
  color:white;
  background-color: #0033cc;
  font-size: 20px;
  width:20%;
  border-radius: 10px;
  padding: 13px 22px;
  cursor: pointer;
  
}

input[type=button]:hover
{
  background-color: #D80000;
}



.error {
  width: 100%; 
  margin: 0px auto; 
  padding: 1px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}


 </style>
</head>
<body>
<a href="admincandidates.php" >
    <button type="button" class="button">Go Back</button> <br/>
</a>


<form method="post" action="updatecandidates.php">


<table width="800" style="background-color: rgb(0, 51, 204, 0.5);margin-top:95px;border-radius: 50px;"  align="center" cellpadding="3px">

<tr><th colspan = "2" style="align:center;"> <font size="7"> <b> Update Candidate:</font><br>
 <p><small><i>Please fill up the form.</b></i></small></p> <br>
<?php include('errors.php'); ?>
 </th></tr>

<tr><td>
<div>
<a href="retrieve.php">Candidate List </a>
</div> <br>
<label for="CANDIDATE ID"><b>CANDIDATE ID:</b></label><br/>
<input type="text" name="cand_id" value="<?php echo $row['cand_id']?>" placeholder="Enter Candidate ID" size="30"  autofocus required>
<br/><br/></td>
<td>
<label for="PARTY NAME"><b>PARTY NAME:</b></label><br/>
<input type="text" name="party_name" value="<?php echo $row['party_name']?>" placeholder="Enter Candidate's Party Name" size="30" required>
<br/><br/>
</td>
</tr>

<tr> <td>
<label for="CANDIDATE NAME"><b>CANDIDATE NAME:</b></label><br/>
<input type="text" name="name" value="<?php echo $row['name']?>" placeholder="Enter Candidate's Name" size="30" required>
<br/><br/></td>

<td>
<label for="DOB"><b>DOB:</b></label><br/>
<input type="text" name="DOB" value="<?php echo $row['DOB']?>" size="30" required>
<br/><br/>
</td>
</tr>
 
<tr><td>
<label for="REGION"><b>REGION:</b></label<br/><br>
<input type="text" name="region" value="<?php echo $row['region']?>" size="30" placeholder="Enter Candidate's Region" required>
<br/><br>
</td></tr>

<tr><td colspan="2" align="center">
<input type="submit" name="update" value="UPDATE" >


<a href="admincandidates.php" >
    <input type="button" name="cancel" value="CANCEL"> <br/>
</a>
<br/><br/><br/></tr></td>
</table>
</form>




</body>
</html>

