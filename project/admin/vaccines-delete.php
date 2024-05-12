<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="../images/favicon.png">
</head>
<body>
    <?php include_once('admin-config.php') ?>
<?php 
    $id = $_GET['id'];
    $delete = "DELETE FROM `vaccination` WHERE id = $id";
    $res = mysqli_query($con,$delete);
    if(isset($res)){
        echo '<script>alert("QUERY HAS BEEN DELETED")
        window.location.href="vaccines.php"
        </script>';
    }
    ?>
</body>
</html>