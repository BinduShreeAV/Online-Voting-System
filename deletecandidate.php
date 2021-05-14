<?php
include('dbconnection.php');

$v=$_POST['var'];
$delete = "DELETE FROM candidate WHERE cand_id = '$v'";
if(mysqli_query($conn,$delete))
{
    echo"<script>alert('successfully deleted');</script>";
    echo "<script>window.location.href='admincandidates.php'</script>";
}
else{
    echo "<script>alert('something went wrong');</script>".mysqli_error($conn);
}
mysqli_close($conn);
?>