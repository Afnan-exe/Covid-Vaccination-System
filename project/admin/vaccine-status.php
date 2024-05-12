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
$q="SELECT * FROM `vaccination`where ID = $id";
$result = mysqli_query($con,$q);
if($result){
	$showed=mysqli_fetch_array($result);
	if($showed['STATUS']==0){
        $update = "UPDATE  `vaccination` SET `STATUS`= 1 WHERE ID = $id";
        $result = mysqli_query($con,$update);


	}else{
    $update = "UPDATE  `vaccination` SET `STATUS`= 0 WHERE ID = $id";
    $result = mysqli_query($con,$update);


    }
    echo '<script>window.location.href="vaccines.php"</script>';
    
}?>
</body>
</html>
