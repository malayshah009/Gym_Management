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
       #head
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
		#dmain
		{
			box-shadow: 0px 0px 14px #999999; 
			border-radius:5px;
			border-color: #d3d3d3;
			border-width: 1px;
			border-style: solid;
			background-color:white;
			width:50%;
			height:450px;   
			margin-left : 450px;
		}
		#u_id 
		{
			margin-left: 8px;
			margin-right : 8px;
			margin-up : 8px;
		}
		#u_ps
		{
			margin-left: 8px;
			margin-right :8px;
		}
		#u_sub
		{
			margin-left: 190px;
			margin-right: 8px;
		}
		#u_not
		{
			margin-left : 8px; 
			margin-right : 8px;
			align : center;
		}
		#back
		{
			width:1000px;
			height:100px;	
		}	
		.column 
		{
			float: left;
			width: 90%;
		
			height: 200px; 
			font-size : px;
		}
		.branch 
		{
			background-color: white;
			text-color : white;
			padding: 30px;
			text-align: center;
			font-size: 35px;
			background-color : pink;
		}
		.row
		{
			background-color: white;
			text-color : white;
			padding: 30px;
			text-align: center;
			font-size: 35px;
			background-color : lightblue;
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
		
		<div id = "wel">
			<img src="images/gym10.jpg" width="100%" height = '500px' ></img>
		</div><br>
		<div class="branch">
			<h1>-: SUBSCRIPATION FOR YEAR :-</h1>
		</div>
		<div class="row">
			<div class="col-md-6" id = "bra">
			<h2 align = "center" style = "text-decoration : underline double 2px">-: YEARLY :-</h2><h4 style = "padding-left : 10px" align = "center">10000/- rs per year<br>Note :this offer don't gave you personal trainer and it available only one branch that you choose.</h4>
			</div>
			<div class="col-md-6" id = "bra">
			<h2 align = "center" style = "text-decoration : underline double 2px">-: YEARLY :-</h2><h4 style = "padding-left : 10px" align = "center">20000/- rs per year<br>Note :this offer gave you personal trainer and it available for all branches.</h4>
			</div>
		</div>
		<div class="branch">
			<h1>-: SUBSCRIPATION FOR  6 MONTH :-</h1>
		</div>
		<div class="row">
			<div class="col-md-6" id = "bra">
			<h2 align = "center" style = "text-decoration : underline double 2px">-: 6 MONTH :-</h2><h4 style = "padding-left : 10px" align = "center">6500/- rs per year<br>Note :this offer don't gave you personal trainer and it available only one branch that you choose.</h4>
			</div>
			<div class="col-md-6" id = "bra">
			<h2 align = "center" style = "text-decoration : underline double 2px">-: 6 MONTH :-</h2><h4 style = "padding-left : 10px" align = "center">12500/- rs per year<br>Note :this offer gave you personal trainer and it available for all branches.</h4>
			</div>
		</div>
		<div class="branch">
			<h1>-: SUBSCRIPATION FOR 3 MONTH :-</h1>
		</div>
		<div class="row">
			<div class="col-md-6" id = "bra">
			<h2 align = "center" style = "text-decoration : underline double 2px">-: 3 MONTH :-</h2><h4 style = "padding-left : 10px" align = "center">4000/- rs per year<br>Note :this offer don't gave you personal trainer and it available only one branch that you choose.</h4>
			</div>
			<div class="col-md-6" id = "bra">
			<h2 align = "center" style = "text-decoration : underline double 2px">-: 3 MONTH :-</h2><h4 style = "padding-left : 10px" align = "center">10000/- rs per year<br>Note :this offer gave you personal trainer and it available for all branches.</h4>
			</div>
		</div>
		<div class="branch">
			<h1>-: SUBSCRIPATION FOR MONTH :-</h1>
		</div>
		<div class="row">
			<div class="col-md-6" id = "bra">
			<h2 align = "center" style = "text-decoration : underline double 2px">-: MONTH :-</h2><h4 style = "padding-left : 10px" align = "center">2000/- rs per year<br>Note :this offer don't gave you personal trainer and it available only one branch that you choose.</h4>
			</div>
			<div class="col-md-6" id = "bra">
			<h2 align = "center" style = "text-decoration : underline double 2px">-: MONTH :-</h2><h4 style = "padding-left : 10px" align = "center">4500/- rs per year<br>Note :this offer gave you personal trainer and it available for all branches.</h4>
			</div>
		</div>
		<br><br>
        </div>
		
</body>
</html>