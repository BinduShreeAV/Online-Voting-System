<?php
$errors = array();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_vote";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "connection successful";
}
else
{
die("connection failed beacuse".mysqli_connect_error());
}

?>