<?php

session_start();
 

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
    header("location: welcome.php");
    exit;
}
 

require_once "config.php";
 

$username = $password = "";
$username_err = $password_err = $login_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
 

    if(empty(trim($_POST["username"])))
	{
        $username_err = "Please enter username.";
    } else
	{
        $username = trim($_POST["username"]);
    }
    

    if(empty(trim($_POST["password"])))
	{
        $password_err = "Please enter your password.";
    } 
	else
	{
        $password = trim($_POST["password"]);
    }
    

    if(empty($username_err) && empty($password_err))
	{

        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql))
		{

            mysqli_stmt_bind_param($stmt, "s", $param_username);
            

            $param_username = $username;
            

            if(mysqli_stmt_execute($stmt))
            {

                mysqli_stmt_store_result($stmt);
                

                if(mysqli_stmt_num_rows($stmt) == 1)
                {                    

                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    
					if(mysqli_stmt_fetch($stmt))
					{
                        if(password_verify($password, $hashed_password)){

                            session_start();
                            

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            

                            header("location: welcome.php");
                        } 
						else
						{

                            $login_err = "Invalid username or password.";
                        }
                    }
                } 
				else
				{

                    $login_err = "Invalid username or password.";
                }
            } 
			else
			{
                echo "Oops! Something went wrong. Please try again later.";
            }


            mysqli_stmt_close($stmt);
        }
    }
    

    mysqli_close($link);
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <style>
		.body{
		}
			
			#dmain
			{
				box-shadow: 0px 0px 14px #999999; 
				border-radius:5px;
				border-color: #d3d3d3;
				border-width: 1px;
				border-style: solid;
				background-color:white;
				width:450px;
				height:350px;
				margin-left: 550px;   
				
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
    

      
		</style>
        
        
        
</head>
<body style= "background-image:url('./images/gymmm.jpg');" >

		 <div class="container-fluid">    
                <div class="row">
                        <img src="images/onemore.jpg" width="100%" height = '30%' style="box-shadow: 1px 5px 14px #999999; "></img>
                  </div>
                 </div>    
             </div><br><br><br>
       <div id = "dmain">
	    <center><img src="./images/singin.jpg" width="150px" height="90px" ></center>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group" id = u_id>
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group" id = u_ps>
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group" id = u_sub>
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
			<div class = "form-group" id = u_not>
            <p align = "center">Don't have an account? <a href="resig.php">Sign up now</a>.</p>
			</div>
			</form>
        </div>
    </div>  
       </body>
</html>
