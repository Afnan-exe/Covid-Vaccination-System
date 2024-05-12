<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" type="text/css" href="login-css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login-css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="login-css/style.css">
    <link rel="stylesheet" type="text/css" href="login-css/main.css">
    <link rel="icon" href="images/favicon.png">
</head>
<?php include_once('config.php') ?>
<body>
    <div class="form-body without-side">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="login-images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content new">
                    <div class="form-items">
                        <h3>Register new account</h3>
                      
                        <form method="post">
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                            <input class="form-control" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="text" name="address" placeholder="Address" required>
                            <input class="form-control" type="number" name="age" placeholder="Age" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>

                            <select class="form-control" name="u_type">
					
						
                                <option class="form-control" value="1" >PATIENT</option>
                                    <option class="form-control" value="2" >HOSPITAL</option>
			
					</select>
            
                    <p id="msg" class="mt-1 msg"></p>
                            <div class="form-button">
                                <button name="submit" id="submit" type="submit" class="ibtn">Register</button>
                                <a href="login.php">Back to login</a>
                            </div>
                        </form>
                       
                        <div class="page-links">
                            <a href="index.php" class="mt-4">Don't want to register?</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                $u_type = $_POST['u_type'];
                if($u_type == 2){
                    $insert1 = "INSERT INTO `hospital` VALUES(NULL,'$name','$address')";
                    $result = mysqli_query($con,$insert1);
                }

                
                $select = "SELECT * FROM `users` where `EMAIL`='$email'";
                $result = mysqli_query($con,$select);
                $count=mysqli_num_rows($result);
                if($count==0){
                    $insert = "INSERT INTO `users` VALUES(NULL,'$name','$email',$age,'$address','$password',$u_type)";
                    $res = mysqli_query($con,$insert);
                    if($res){
                        echo '<script>alert("REGISTERED")
                         window.location.href="login.php"
                         </script>';
                     }
                }
                else{
                    echo '<script>document.getElementById("msg").innerHTML="*already have an account!"</script>';
                }
               }
            ?>
        </div>
    </div>
<script src="login-js/jquery.min.js"></script>
<script src="login-js/popper.min.js"></script>
<script src="login-js/bootstrap.min.js"></script>
<script src="login-js/main.js"></script>
</body>
