<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?PHP include_once('admin-config.php') ?>
<body>
    <?php

$id = $_GET['id'];
$Change = "UPDATE `appointment` SET `STATUS` = 1 WHERE id = $id";

// Prepare the SQL statements
$stmt_name = "SELECT `NAME` FROM `appointment` JOIN `users` ON users.id=appointment.user_id WHERE appointment.ID = $id";
$stmt_hospital_name = "SELECT `HOSPITAL_NAME` FROM `appointment` JOIN `hospital` ON hospital.id=appointment.hospital_id  WHERE appointment.ID = $id";
$stmt_vaccine = "SELECT `VACCINE` FROM `appointment` JOIN `vaccination` ON vaccination.id=appointment.vaccine_id  WHERE appointment.ID = $id";
$stmt_any_disease = "SELECT `ANY_DISEASE` FROM `appointment` WHERE ID = $id";
$stmt_gender = "SELECT `GENDER` FROM `appointment` WHERE ID = $id";

// Execute the SQL statements
$res_name = mysqli_query($con, $stmt_name);
$res_hospital_name = mysqli_query($con, $stmt_hospital_name);
$res_vaccine = mysqli_query($con, $stmt_vaccine);
$res_any_disease = mysqli_query($con, $stmt_any_disease);
$res_gender = mysqli_query($con, $stmt_gender);

// Fetch results
$row_name = mysqli_fetch_assoc($res_name);
$row_hospital_name = mysqli_fetch_assoc($res_hospital_name);
$row_vaccine = mysqli_fetch_assoc($res_vaccine);
$row_any_disease = mysqli_fetch_assoc($res_any_disease);
$row_gender = mysqli_fetch_assoc($res_gender);

$name = $row_name['NAME'];
$hospital_name = $row_hospital_name['HOSPITAL_NAME'];
$vaccine = $row_vaccine['VACCINE'];
$any_disease = $row_any_disease['ANY_DISEASE'];
$gender = $row_gender['GENDER'];

// Insert into approved_appointment table
$insert = "INSERT INTO `approved_appointment` VALUES (null,'$name', '$hospital_name', '$vaccine', '$any_disease', '$gender')";
$res_insert = mysqli_query($con, $insert);


if ($res_insert) {
    $result = mysqli_query($con,$Change);
    echo '<script>alert("APPOINTMENT HAS BEEN APPROVED"); window.location.href="appointments.php"; </script>';
}
else{
    echo $insert;
}
    ?>
</body>
</html>