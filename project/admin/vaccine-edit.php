<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT USER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="../images/favicon.png">
</head>
<?php include_once('admin-config.php') ?>
<body>

<?php 
$id = $_GET['id'];
$select = "SELECT * FROM `vaccination` WHERE id = $id";
$res = mysqli_query($con,$select);
if($res){

while($show = mysqli_fetch_array($res)){

?>

<div class="container">
    <h1 class="text-center my-2">EDIT VACCINE</h1>
<form method="POST">
    
<input type="text" name="vaccine" class="form-control myInput input-color " value="<?php echo $show['VACCINE'] ?>" placeholder="Enter brand name">
<br>
<input type="submit" name="submit" class="btn btn-success" value="UPDATE">
</form>
<?php }} ?>

<?php 
 
if(isset($_POST['submit'])){
    $vaccine = $_POST['vaccine'];
$update = "UPDATE `vaccination` SET  VACCINE = '$vaccine' WHERE id = $id" ;
$res = mysqli_query($con,$update);
if($res){
    echo '<script>
    alert("VACCINE UPDATED")
    window.location.href="vaccines.php"
    </script>';
}
}
?>
    
</body>
</html>