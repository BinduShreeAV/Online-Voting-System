

<?php

include('dbconnection.php');
session_start();
if(isset($_POST['submit'])){
$cand_id=$_POST['cand_id'];
$party_name =$_POST['party_name'];
$name=$_POST['name'];
$DOB=$_POST['DOB'];
$region=$_POST['region'];
$v=$_POST['var'];

$query="UPDATE candidate SET  cand_id='$cand_id', party_name='$party_name', name='$name', DOB='$DOB', region='$region' 
WHERE cand_id='$v'";

$f=mysqli_query($conn,$query);

if($f){

  echo "<script type='text/javascript'> alert('Candidate updated successfully'); </script>";
     
     echo "<script type='text/javascript'> document.location = 'admincandidates.php'; </script>";
}

}


?>