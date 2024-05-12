<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
    <link rel="stylesheet" href="./css/profile.css">
</head>
<?php include_once('header.php') ?>
<?PHP include_once('config.php') ?>
<body>

<div class="container-fluid"></div>
<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                    <img src="https://toppng.com/uploads/preview/cool-avatar-transparent-image-cool-boy-avatar-11562893383qsirclznyw.png" width="100" class="rounded-circle">
                </div>
                <?php 
                $id = $_SESSION['ID'];
                $select = "SELECT * FROM `users` join `user_type` on users.user_type_id = user_type.id WHERE users.ID = $id";
                $res = mysqli_query($con,$select);
                while($show = mysqli_fetch_array($res)){

                ?>
                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 px-4 rounded text-white"><?php echo $show['TYPE'] ?></span>
                    <h5 class="mt-2 mb-0"><?php echo $show['NAME'] ?></h5>
                    <span><?php echo $show['EMAIL'] ?></span>
                    
                    <div class="px-4 mt-1">
                        <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    
                    </div>
                    
                    
                    
                    <div class="buttons">
                        
                        <button href=".//admin/my-appointment.php" class="btn btn-outline-primary px-4">My Appointments</button>
                        
                    </div>
                    
                    
                </div>
                <?php
            }
                ?>
                
                
            </div>
            
        </div>
        
    </div>
    
</div>
</body>
</html>