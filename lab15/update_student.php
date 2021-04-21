<?php
include 'connect/connect.php';
$student_id = $_GET['ID'];
$student = mysqli_query($connect,"Select * From student WHERE `id` = '$student_id'");
$student = mysqli_fetch_assoc($student);


?>

<!doctype html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <title>Student</title>
</head>
<body>
<h3>Update student</h3>
<form action="crud/update_student.php" method="post">
    <p>ID</p>
    <input type="number" name="ID" value="<?=$student['ID']?>">
    <p>name</p>
    <input type="text" name="name" value="<?=$student['name']?>">
    <p>surname</p>
    <input type="text" name="surname" value="<?=$student['surname']?>">
    <p>mathematics_mark</p>
    <input type="number" name="mathematics_mark" value=" <?=$student['mathematics_mark']?>">
    <p>physics_mark</p>
    <input type="number" name="physics_mark" value=" <?=$student['physics_mark']?>">
    <p>informatics_mark</p>
    <input type="number" name="informatics_mark" value=" <?=$student['informatics_mark']?>">
    <p></p>
    <button type="submit">Update</button>

</form>
</body>
</html>



