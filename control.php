<?php
session_start();

include('dbconnection.php');

if(isset($_POST['start']))
{

$q= "UPDATE election set econtrol=1  where id=3";

    $query=mysqli_query($conn,$q);  
  

    if($query){
    echo "<script type='text/javascript'> alert('Voting begins!'); </script>";
    echo "<script type='text/javascript'> document.location = 'adminhome.php'; </script>";
    }


}

else if(isset($_POST['stop']))
{
    $q= "UPDATE election set econtrol=0  where id=3";

    $query=mysqli_query($conn,$q);  
  

    if($query){
    echo "<script type='text/javascript'> alert('Voting stopped!'); </script>";
    echo "<script type='text/javascript'> document.location = 'adminhome.php'; </script>";
    }

}

?>