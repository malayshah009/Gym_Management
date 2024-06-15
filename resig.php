<?php

require_once "config.php";
 

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please enter a username.";
    }
     elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"])))
    {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } 
    else
    {
        
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql))
        {
            
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
           
            $param_username = trim($_POST["username"]);
            
          
            if(mysqli_stmt_execute($stmt))
            {
                
                mysqli_stmt_store_result($stmt);   /* store result */
                
                if(mysqli_stmt_num_rows($stmt) == 1)
				{
                    $username_err = "This username is already taken.";
                } 
                else
                {
                    $username = trim($_POST["username"]);
                }
            } 
            else
            {
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
   
    if(empty(trim($_POST["password"])))
    {
        $password_err = "Please enter a password.";     
    } 
	elseif(strlen(trim($_POST["password"])) < 6)
    {
        $password_err = "Password must have atleast 6 characters.";
    } 
	else
    {
        $password = trim($_POST["password"]);
    }
    
    if(empty(trim($_POST["confirm_password"])))
	{
        $confirm_password_err = "Please confirm password.";     
    } 
	else
	{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password))
		{
            $confirm_password_err = "Password did not match.";
        }
    }
    
   
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
    {
        
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql))
        {
        
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            

            if(mysqli_stmt_execute($stmt))
            {

                header("location: login.php");
            } else
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
        <title></title>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <style type="text/css">
            .inpterr
            {
                border: 1px solid red;
                background: #FFCECE;

            }
            
            .inpterrc
            {
                border: 1px solid black;
                background: white;
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
				height:400px;
				margin-left: 550px;   
				
			}
			#r_id 
			{
				margin-left: 8px;
				margin-right : 8px;
				margin-up : 8px;
			}
			#r_pass
			{
				margin-left: 8px;
				margin-right :8px;
			}
			#r_cpass
			{
				margin-left: 8px;
				margin-right: 8px;
			}
			#r_btn
			{
				margin-left: 155px;
				margin-right: 8px;
			}
			#r_not
			{
				margin-left : 8px; 
				margin-right : 8px;
				align : center;
			}	
        </style>
</head>
<body style= "background-image:url('./images/gymmm.jpg');">
	 <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                        <img src="images/onemore.jpg" width="100%" height = '30%' style="box-shadow: 1px 5px 14px #999999; "></img>
                  </div>
                 </div>    
             </div><br><br><br>
	<div id="dmain">
		<center><img src="./images/signup.jpg" width="150px" height="90px" ></center>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		
            <div class="form-group" id = r_id>
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group" id = r_pass>
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group" id = r_cpass>
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group" id = r_btn>
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
			<div class = "form-group" id = r_not>
            <p align = "center">Already have an account? <a href="login.php">Login here</a>.</p>
			</div>
        </form>  
        </div>
        </form>
    </body>
</html>