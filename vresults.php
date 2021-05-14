<?php
session_start();
include('dbconnection.php');

if(strlen($_SESSION['vid'])== 0)
    {   
header('location:login.php');
}
else
{   
  $q= "SELECT * from election where id=4";

  $query=mysqli_query($conn,$q);  

  $row =  mysqli_fetch_array($query);

  $m=$row['econtrol'];

  if($m==0)
  {
    echo "<script type='text/javascript'> alert('Results is yet to announced.'); </script>";
     
    echo "<script type='text/javascript'> document.location = 'voterhomepage.php'; </script>";
  }





try{
    $conn = new PDO("mysql:host=localhost;dbname=online_vote","root","");
}
catch(PDOExecution $e){
    echo $e->getmessage();
}

$sql = "SELECT COUNT(party_name) AS vcount,party_name FROM vote group by party_name";
$stmt = $conn->prepare($sql);
$stmt->execute();
$arr=$stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<html>
<head>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['party_name', '$result'],
          <?php foreach($arr as $key => $val){?>
           ['<?php echo $val['party_name']?>',<?php echo $val['vcount']?>],
          <?php }?>
          
        ]);

        var options = {
          title: 'RESULTS',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


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
    width: 500px;
    height: 500px;
    margin-left : 800px;
    margin-bottom :-100px;
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
  
<form method="post" action="vresults.php">

<br>
<br/>
<div style="margin-left: 100px;">
<h1><small><i><b>The party with highest percentage of votes is the winner.</b><i></small></h1>
</div>
 <div>
 <div id="piechart"  style="width: 900px; height: 500px;"></div>
 
 <div class="container">
 
<img src="images/result.svg">
</div>

</form>
</body>

</html>
<?php } ?>