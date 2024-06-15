<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <style type="text/css">
    <style>
       .head
	   {
		   padding-top : 5px;
		   
	   }
	   ul
	   {
			list-style-type: none;
		    margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: black;
		}
		li 
		{
			float: right;
			border-right: 2px solid black;
		}

		li a 
		{
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		li a:hover 
		{
			background-color: black;
			color : white;
		}
		.active 
		{
			background-color: #04AA6D;
		}
		.service
		{
			text-align : center;
			text-decoration: underline;
			font-family: "Lucida Console", "Courier New", monospace;
		}
		.heading 
		{
			background-color: #ccc;
			text-color : white;
			padding: 30px;
			text-align: center;
			font-size: 35px;
			text-decoration : underline double;
		}
		#column 
		{
			float: left;
			width: 33.33%;
			padding: 10px;
			height: 200px; 
			font-size : px;
			background-color : #ccc;
			text-color : white;
		}
		.branch 
		{
			background-color: white;
			text-color : white;
			padding: 30px;
			text-align: center;
			font-size: 35px;
			text-decoration : underline double;
		}
    </style>
</head>
<body>
		
		<ul>
			 <img src="images/onemore1.jpg" width="15%" height = '50px' style = "float : left"></img>
			<li style = ><a href="logout.php">logout</a></li>
			<li style = ><a href="reset-password.php">Reset Password</a></li>
			<li style = ""><a href="about.php">About Us</a></li>
			<li style = ""><a href="subs.php">Subscription </a></li>
			<li style = ""><a href="welcome.php">Home</a></li>	
		</ul>
		
		<div class= "wel">
			<img src="images/gym10.jpg" width="100%" height = '500px' ></img>
		</div>
		
		
		
		<div class="heading">
			<h1>OUR SERVICES</h1>
		</div>
		<div class="row">
			<div class="col-sm-4" id = "column">
			<h2 align = "center" style = "text-decoration : underline dashed 3px">Group Workout</h2><h4 style = "padding-left : 10px">You can find a group exercise class to fit any and all of your fitness needs.</h4>
			</div>
			<div class="col-sm-4" id = "column">
			<h2 align = "center" style = "text-decoration : underline dashed 3px">Free Style Training</h2><h4 >Freestyle Training class is a social, free-flowing style of fitness session. It enables members to train across multiple exercise.</h4>
			</div>
			<div class="col-sm-4" id = "column">
			<h2 align = "center" style = "text-decoration : underline dashed 3px">Cardio Blast</h2><h4 style = "padding-right : 10px">The class is a form of High Intensity Interval Training (HIIT), which incorporates short intervals of workouts proceeded by levels.</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4" id = "column" >
			<h2 align = "center" style = "text-decoration : underline dashed 3px">Strength Training</h2><h4 style = "padding-left : 10px">You can find a group exercise class to fit any and all of your fitness needs.</h4>
			</div>
			<div class="col-sm-4" id = "column" >
			<h2 align = "center" style = "text-decoration : underline dashed 3px">Boxing Training</h2><h4>Freestyle Training class is a social, free-flowing style of fitness session. It enables members to train across multiple exercise.</h4>
			</div>
			<div class="col-sm-4" id = "column" >
			<h2 align = "center" style = "text-decoration : underline dashed 3px">Upper Chest Training</h2><h4 style = "padding-right : 10px">The class is a form of High Intensity Interval Training (HIIT), which incorporates short intervals of workouts proceeded by levels.</h4>
			</div>
		</div>		
		<div class="branch">
			<h1>OUR BRANCHES</h1>
		</div>
		<div class="row">
			<div class="col-md-6" id = "bra">
			<h2 align = "center" style = "text-decoration : underline double 2px">-: SURAT :-</h2><h4 style = "padding-left : 10px" align = "center">4th Floor, Sargam shopping Center,<br>City Ligth, Surat.<br> Contact no : 9898989898</h4>
			</div>
			<div class="col-md-6" id = "bra">
			<h2 align = "center" style = "text-decoration : underline double 2px">-: SURAT:-</h2><h4 style = "padding-left : 10px" align = "center">2nd Floor, Kataria shopping Center,<br>Pal, Adajan, Surat.<br> Contact no : 9898989898</h4>
			</div>
		</div>
</body>
</html>