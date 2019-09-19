
<?php
    session_start();
    // Include createdb file
    require_once "createdb.php";
    // initializing variables
    $name   = "";
    $email  = "";
    $errors = array(); 

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'hngusers');

    //reate user
    if(isset($_POST['create'])) {
         //recieve all input values from the form
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);


    }
     //first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE name='$name'  OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);


    if($user) { //if user exist
        if($user['name'] === $name) {
            array_push($errors, "Name already exist");
         }
         if($user['email'] === $email) {
            array_push($errors, "Email already exist");
         }
    }



    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
    $password = md5($password); //encrypt the password before saving in the database
    $query = "INSERT INTO users (name,  email, password) VALUES ('$name','$email', '$password')";
    mysqli_query($db, $query); 
    }   

        //Login user
     if (isset($_POST['Submit'])) {
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(empty($name)) {
            array_push($errors, "Username is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        if (count($errors) == 0) {
            $password = md5($password); //encrypt the password before saving in the database
            $query = "SELECT * FROM users WHERE name = '$name' AND password ='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $name;
                $_SESSION['success'] = "You are now logged in";
                header('location:index.php');
            }else{ 
                array_push($errors, "Wrong username/password combination"); 
            }
        }
    }
?>