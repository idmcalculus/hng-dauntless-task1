<?php include('dbcontroller.php')?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DauntFood || Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="./assets/css/form.css">
</head>

<body>
    
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
                        <form action="login.php" method="post" >
                            <h1>Create Account</h1>
                            <div class="social-container">
                                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <span>or use your email for registration</span>
                            <input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>" required />
                            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required />
                            <input type="password" placeholder="Password" name="password" required />
                            <button id = "sign-up-btn" name= "create">Sign Up</button>

                            <h5 class="signing">Want to <span class="sign-in">Sign in</span> instead?</h5>
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
                            <?php if(isset($msg)){?>
                            <span style="color:red;"><?php echo $msg;?></span>
                            <?php } ?>
                            <input type="username" placeholder="Username" name="name" required />
                            <input type="password" placeholder="Password" name="password" required />
                            <a href="#">Forgot your password?</a>
                            <button type="submit" name="Submit" value="Login">Sign In</button>
                            <h5 class="signing">Want to <span class="sign-up">Sign up</span> instead?</h5>
                        </form>

                    </div>
                </section>
            </div>
        </section>
    
    <footer>Made By Team Dauntless</footer>
    <script src="./assets/js/form.js"></script>
</body>

</html>
