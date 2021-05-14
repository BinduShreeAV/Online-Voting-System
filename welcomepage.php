<?php
session_start();
error_reporting(0);
include('dbconnection.php')
?>

<!DOCTYPE html>


<head>
<title>Welcome Page</title>

<script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("myBtn").style.display = "block";
		document.getElementById("div4").style.top = "0";
    } else {
        document.getElementById("myBtn").style.display = "none";
		document.getElementById("div4").style.top = "-120px";
    }
}


function topFunction() {
    
    document.body.scrollTop = 0;
}


</script>
<style>
<?php include('style.css'); ?>
html{
	scroll-behavior: smooth;
}
body{
	height:100%;
	margin:0px;
	
}

table{
border-bottom-width:2px;
border-bottom-style:solid;
border-bottom-color:black;
}
tr{
vertical-align:bottom;
}


button{

	width:10%;
	background-color:#0033cc;
	color:white;
	border: 1px outset grey;
    border-radius: 4px;
	padding:  13px 22px;
	 cursor: pointer;
	  font-size: 20px;
	  z-index:1;
}
button:hover {
    background-color: #D80000;
}
button.bz{

	width:80%;
	background-color:brown;
	color:white;
	border: 1px outset grey;
    border-radius: 4px;
	padding:  6px 10px;
	 cursor: pointer;
	  font-size: 12px;
	  
}
button:hover.bz {
    background-color: #D80000;
}


h2{
color:blue;
margin-left:30px;
}


</style>
</head>

<body >


<div   class="a" id="div4" style="background-color:#0033cc;" >

  
 <table align="center"  cellpadding="6" width="1300px" >
 <tr >
 <td align="left"><img src="images/wvote1.jpg" width="70px"></td>
 <td><a href="#div0" ><button type="button" class="bz" >Home</button></a><br/><br/>
 <td><a href="#div1" ><button type="button" class="bz" >Online Vote Portal</button></a><br/><br/></td>
 <td><a href="#div2" ><button type="button" class="bz">About Us</button><br/><br/></td>
  </tr>
 </table>
</div>

<div class="b" id="div0" style="background-color:#0033cc;" >

<table align="center"  cellpadding="6" id="position0" width="1300px" style="background-color:#0033cc;">
 <tr >
  <td align="left"><img src="images/wvote1.jpg" width="100px"></td>
 
 <td><a href="#div0" ><button type="button" class="bz">Home</button></a><br/><br/></td>
 <td><a href="#div1" ><button type="button" class="bz">Online Vote Portal</button></a><br/><br/></td>
 <td><a href="#div2" ><button type="button" class="bz">About Us</button><br/><br/></td>
  </tr>
 </table>
<p id="position3">
 <hr ></p>
<p id="position"><strong>Welcome to Online<br/>
Vote Portal </strong>
</p>
<p id="position4">An easy and efficient way to cast your valuable vote.</p> 
<p id="position2"><b>Login or sign up to continue</b>
</p>
<p >
<a href="login.php" >
<button style="position:absolute;top:370px;left:850px;">Log in</button>
</a>

</p>
<p ><a href="registration1.php">
<button type="button" style="position:absolute;top:370px;left:1050px;">Sign up</button></a>
</p>


</div> <br/> <br/><br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/><br/><br/>

<button onclick="topFunction()" id="myBtn" title="Go to top">Go to Top </button>

<div class="article" id="div1" ><br/><br/><br/>

<h2>Online Vote Portal</h2>
 <div class="article2" align="justify" size="18px">
  <p>Opensoft eVote is an online vote portal, Web application. The eVote software enables colleges,small oragnisations,Government to speed up Vote processing and being paperless 
  also helps colleges, Government, etc ,to reduce overheads related to Vote processing. With eVote, voters will cast their vote electronically using any Internet-connected device 
  (computer, tablet or smartphone) via the web browser. Votes are then forwarded electronically to the respective approving officers. With the entire vote 
  processing being electronic, eVote is convenient, secure and instant for everybody. </p>
  <p><font size="5">Secure eVote Portal:</font><br/><br/>
        As part of eVote implementation, we will setup an eVote Portal customised to your organisation’s vote policy.
              <ul><li>
             The eVote portal is a secure website;</li>
            <li> Voters have access 24×7 to perform all types of voting actions – Casting vote, view upcoming election events, check election results, etc;</li>
            <li> Admin can start and stop the election event , declare results etc.;</li>
            <li> Remote access to the portal for all voters 24×7.</li></ul>
  </p>
  
  <p>
   <font size="5">eVote is Paperless:</font><br/><br/>
   All voting procedures are done online via the eVote Portal.

  There is no form to print, no papers to fill in, no paperwork to file.
  </b>
  </p>
   <br/>
 <hr>
  </div>
</div>
 <div id="div2"><br/><br/><br/>
 <br/>
 
<h2 >About BMSCW</h2>
<div class="article2" align="justify"><b>

    <p>In the history of Karnataka, the name of late Sri Bhusanayana Mukundadas Sreenivasaiah (BMS) occupies a prominent place in the field of philanthropy. The Maharaja of Mysore honoured him with the title of Raja Karya Prasaktha in 1946.</p>
	<p>After the demise of "Sri. B. M. Sreenivasaiah", his dynamic and enterprising son Sri. B. S. Narayan, took over the reigns of the college. </p>
	<p>BMS College for Women was established by visionary late B.S.Narayan in memory of his philanthropist father Dharmaprakasha Rajakarya Prasaktha late B.M.Sreenivasaiah in 1964.
    The College has been thrice accredited by the NAAC with 'A' Grade in 2004, 2009 and 2016. It is affiliated to Bangalore Central University. The strength of the College is growing by leaps and bounds and is a testimony to its outstanding record of providing quality education.</p>
 <br/></b>
 <hr></div></div><br/>

</div>
	  
</div>

	
</body>
</html>