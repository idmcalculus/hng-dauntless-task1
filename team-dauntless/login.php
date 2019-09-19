<?php include('server.php');
/*session_start(); // Starts the session
	
	// Check Login form submitted	
	if(isset($_POST['Submit'])){
		// Define username and associated password array 
		$logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');
		
		// Check and assign submitted Username and Password to new variable 
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		//Check Username and Password existence in defined array/		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			// Success: Set session variables and redirect to Protected page  
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			//Unsuccessful attempt: Set error message 
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}*/
?> 
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="./assets/css/form.css">
</head>

<body>
<?php include('errors.php'); ?>

    <section id="image-banner">
        <div id="logo-header">
            <img src="./assets/img/logo.PNG" width="30" alt="logo">
        <h1>DAUNTFAST</h1>
        </div>
        <em>people who love food are usually good people...</em>
    </section>

    <section id="wrapper">
        <div class="form-cards">
            <section id="back">
                <div class="sign-up-container">
                    <form action="" method="post">
                        <h1>Create Account</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your email for registration</span>
                        <input type="text" placeholder="username" name="username" value="<?php echo $username; ?>" required />
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required/>
                        <input type="password" placeholder="Password" name="password_1" required/>
                        <button type="submit" name="reg_user" >Sign Up</button>

                        <h5 class="signing">Wanna <span class="sign-in">Sign in</span> instead?</h5>
                    </form>
                   
                </div>
            </section>
            <section id="front">
                <div class=" sign-in-container">
                    <form action="" method="post" name="Login_Form">
                        <h1>Sign in</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your account</span>
                        
                    
                        <input type="username" placeholder="Username" name="username" required/>
                        <input type="password" placeholder="Password" name="password" required/>
                        <a href="#">Forgot your password?</a>
                        <button type="submit" name="login_user" value="Login">Sign In</button>
                        <h5 class="signing">Wanna <span class="sign-up">Sign up</span> instead?</h5>
                    </form>
                    
                </div>
            </section>
        </div>
    </section>
    <footer><h2>Made By Team Dauntless</h2></footer>
    <script src="./assets/js/form.js"></script>
</body>

</html>

