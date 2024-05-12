<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once('admin-config.php') ?>
<?php 
    $id = $_GET['id'];
    $Change = "UPDATE `appointment` SET `STATUS` = 2 WHERE id = $id";
    $result = mysqli_query($con,$Change);
    if(isset($result)){
        echo '<script>alert("APPOINTMENT HAS BEEN REJECTED")
        window.location.href="appointments.php"
        </script>';
    }
    ?>
</body>
</html>