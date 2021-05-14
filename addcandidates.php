<?php
include('dbconnection.php');
session_start();

$cand_id="";
$party_name="";
$name="";
$DOB="";
$region="";

if(isset($_POST['add']))
  {
    $cand_id = isset($_POST['cand_id'])? $_POST['cand_id']:' ';    
    $party_name = isset($_POST['party_name'])? $_POST['party_name']:' ';
    $name = isset($_POST['name'])? $_POST['name']:' ';
    $DOB = isset($_POST['DOB'])? $_POST['DOB']:' ';   
    $region = isset($_POST['region'])? $_POST['region']:' ';
 
    
if(empty($cand_id)){array_push($errors,"Candidate ID is required.");}
if(empty($party_name)){array_push($errors,"Party Name is required.");}
if(empty($name)){array_push($errors,"Candidate Name is required.");}
if(empty($DOB)){array_push($errors,"DOB is required.");}
if(empty($region)){array_push($errors,"Region is required.");}


$candidate_check_query = "SELECT * FROM candidate WHERE cand_id='$cand_id' OR party_name='$party_name'";

$query = mysqli_query($conn,$candidate_check_query);

if(mysqli_num_rows($query)>0)
{
  $row = mysqli_fetch_assoc($query);
  if($cand_id == $row['cand_id'])
  {
    array_push($errors,"Candidate ID already exists");
  }
  else if ($party_name == $row['party_name'])
  {
    array_push($errors,"Party already exists");
  }

}

if(count($errors)==0)
{
  echo "yes";

  $q = mysqli_query($conn,"INSERT INTO candidate(cand_id,party_name,name,DOB,region) 
value('$cand_id','$party_name','$name','$DOB','$region')");
 
if($q)
{ 
echo "<script>alert('Candidate has been has been added successfully.');</script>";
echo "<script>window.location.href ='admincandidates.php'</script>";
}
  
}
  }
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

input[type=reset]{
  color:white;
  background-color: #0033cc;
  font-size: 20px;
  width:20%;
  border-radius: 10px;
  padding: 13px 22px;
  cursor: pointer;

  
}

input[type=reset]:hover 
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


<form method="post" action="addcandidates.php">

<table width="800" style="background-color: rgb(0, 51, 204, 0.5);margin-top:95px;border-radius: 50px;" align="center" cellpadding="3px">

<tr><th colspan = "2" style="align:center;"> <font size="7"> <b> Add Candidate:</font><br>
 <p><small><i>Please fill up the form.</b></i></small></p> <br>
 <?php include('errors.php'); ?>
 </th></tr>
 
<tr><td>
<label for="CANDIDATE ID"><b>CANDIDATE ID:</b></label><br/>
<input type="text" name="cand_id" placeholder="Enter Candidate ID" size="30" autofocus required>
<br/><br/></td>
<td>
<label for="PARTY NAME" required><b>PARTY NAME:</b></label><br/>
<input type="radio" name="party_name" value="Barathiya Kshema">
<label for="Barathiya Kshema">Barathiya Kshema</label> <br>
<input type="radio" name="party_name" value="Janatha Party">
<label for="Janatha Party">Janatha Party</label> <br>
<input type="radio" name="party_name" value="Hindusthan Party">
<label for="Hindusthan Party">Hindusthan Party</label> <br>
<input type="radio" name="party_name" value="JanJeevan Party">
<label for="JanJeevan Party">JanJeevan Party</label>
<br/><br/>
</td>
</tr>

<tr> <td>
<label for="CANDIDATE NAME"><b>CANDIDATE NAME:</b></label><br/>
<input type="text" name="name" placeholder="Enter Candidate's Name" size="30" required>
<br/><br/></td>

<td>
<label for="DOB"><b>DOB:</b></label><br/>
<input type="date" name="DOB" size="30" required>
<br/><br/>
</td>
</tr>
 
<tr><td>
<label for="REGION"><b>REGION:</b></label<br/><br>
<input type="text" name="region" size="30" placeholder="Enter Candidate's Region" required>
<br/><br>
</td></tr>

<tr><td colspan="2" align="center">
<input type="submit" name="add" value="ADD" >
<input type="reset" value="Reset">
<br/><br/><br/></tr></td>
</table>
</form>
</body>
</html>

