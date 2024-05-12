<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login to account</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <form method="post">
                            <input class="form-control" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <select class="form-control" name="u_type">
                                <?php
                                $select = "SELECT * FROM `user_type`";
                                $res = mysqli_query($con, $select);
                                if ($res) {
                                    while ($show = mysqli_fetch_array($res)) { ?>
                                        <option class="form-control" value="<?php echo $show['ID'] ?>"><?php echo $show['TYPE'] ?></option>
                                <?php }
                                } ?>
                            </select>
                            <p id="msg" class="msg mt-1"></p>
                            <div class="form-button">
                                <button id="submit" type="submit" name="submit" class="ibtn">Login</button>
                            </div>
                        </form>

                        <div class="page-links">
                            <a href="register.php" class="mt-4">Register new account</a>
                        </div>
                    </div>
                </div>
            </div><?php
                    if (isset($_POST['submit'])) {
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $u_type = $_POST['u_type'];
                        $check = "SELECT * FROM `users` WHERE `EMAIL`='$email' AND `PASSWORD`='$password' AND `USER_TYPE_ID`='$u_type'";
                        $res = mysqli_query($con,$check);
                        if ($res) {
                            $count = mysqli_num_rows($res);
                            if($count == 1){
                                $get = mysqli_fetch_array($res);
                                $_SESSION['ID'] = $get['ID'];
                                $_SESSION['USER_TYPE_ID'] = $get['USER_TYPE_ID'];
                                
                                    echo "<script>window.location.href='index.php'</script>";
                                
                            }else{

                                echo "<script>document.getElementById('msg').innerHTML='*invalid Credentials'</script>";
                            }
                        }
                    } ?>
        </div>
    </div>
    <script src="login-js/jquery.min.js"></script>
    <script src="login-js/popper.min.js"></script>
    <script src="login-js/bootstrap.min.js"></script>
    <script src="login-js/main.js"></script>
</body>


</html>