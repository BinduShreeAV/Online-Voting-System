

<?php

include('dbconnection.php');
session_start();

if(isset($_POST['submit'])){
$cand_id=$_POST['cand_id'];
$party_name =$_POST['party_name'];
$voter_id = $_POST['vid'];


$query= "INSERT INTO vote (voter_id,cand_id,party_name) VALUES ('$voter_id','$cand_id','$party_name')";

$f=mysqli_query($conn,$query);

if($f){

  echo "<script type='text/javascript'> alert('Vote Casted Successfully.'); </script>";
     
     echo "<script type='text/javascript'> document.location = 'voterhomepage.php'; </script>";
}

}


?>