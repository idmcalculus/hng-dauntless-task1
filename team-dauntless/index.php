<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>






<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/404.css">
</head>
<body>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
     


    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    <section style="background: green; color:white;font-size:30px;font-weight:300;text-align:center;">Login was succesful.<br>
    Your username is: <p><strong><?php echo $_SESSION['username']; ?></strong></p>
    
    <a style="color:red;font-weight:400;" href="index.php?logout='1'">Click here</a> to Logout.</section>

    	
    <?php endif ?>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/boots">
</body>
</html>