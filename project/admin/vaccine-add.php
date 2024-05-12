<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="../images/favicon.png">
    <title>ADD VACCINE</title>
</head>
<body>
<?php include_once('admin-config.php') ?>
<div class="container">
    <h1 class="text-center my-2">ADD VACCINE</h1>
<form method="POST">
<input type="text" name="vaccine" class="form-control myInput input-color " placeholder="Enter vaccine name">
<br>
<input type="submit" name="submit" class="btn btn-success" value="ADD">
</form>

<?php if(isset($_POST['submit'])){
    $vaccine = $_POST['vaccine'];
    $insert = "INSERT INTO `vaccination` VALUES(null,'$vaccine',1)";
    $res = mysqli_query($con,$insert);
    if($res){
        echo '<script>alert("VACCINE ADDED")
        window.location.href="vaccines.php"</script>
        ';
    }

} ?>

</div>
</body>
</html>