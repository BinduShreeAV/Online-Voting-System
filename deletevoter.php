<?php
include('dbconnection.php');
$delete = "DELETE FROM voter WHERE voter_id = '" .$_GET["voter_id"]."'";
if(mysqli_query($conn,$delete))
{
    echo"<script>alert('successfully deleted');</script>";
    echo "<script>window.location.href='voterlist.php'</script>";
}
else{
    echo "<script>alert('something went wrong');</script>".mysqli_error($conn);
}
mysqli_close($conn);
?>