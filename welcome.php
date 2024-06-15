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
		.active 
		{
			background-color: #04AA6D;
		}
		.gallery 
		{
			margin: 5px;
			border: 1px solid #ccc;
			float: left;
			width: 180px;
		}
		.gallery img 
		{
			width: 100%;
			height: auto;
		}
		.desc 
		{
			padding: 15px;
			text-align: center;
		}
		.backk
		{
			background-color : pink;
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
			<h1 align = "center">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
		</div><br>
		
		<div class = "backk" >
			<div class="row">
				<div class="col-md-6" id = "bra">
				<img src="images/cardio.jpg" width="100%" height = '200px' ></img>
				<h2 align = "center">-: CARDIO EXERCISE :-</h2>
				</div>
				<div class="col-md-6" id = "bra">
				<img src="images/leg.jpg" width="100%" height = '200px' ></img>
				<h2 align = "center">-: LEG EXERCISE :-</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6" id = "bra">
				<img src="images/gym4.jpg" width="100%" height = '200px' ></img>
				<h2 align = "center">-: BODY BULIDING AREA :-</h2>
				</div>
				<div class="col-md-6" id = "bra">
				<img src="images/gymm.jpg" width="100%" height = '200px' ></img>
				<h2 align = "center">-: EXERCISE AREA :-</h2>
				</div>
			</div>
		</div>
</body>
</html>