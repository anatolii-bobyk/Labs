<?php
include 'connect/connect.php';
include 'crud/create_student.php';

?>

<!doctype html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <title>Student</title>
</head>
<body>
<table border="5">
    <tr>
        <td>ID</td>
        <td>name</td>
        <td>surname</td>
        <td>mathematics_mark</td>
        <td>physics_mark</td>
        <td>informatics_mark</td>
    </tr>

    <?php

    $students = mysqli_query($connect,"Select * from student");
    $students = mysqli_fetch_all($students);
    foreach ($students as $student) {
        ?>

        <tr>
            <td><?=  $student[0] ?></td>
            <td><?=  $student[1] ?></td>
            <td><?=  $student[2] ?></td>
            <td><?=  $student[3] ?></td>
            <td><?=  $student[4] ?></td>
            <td><?=  $student[5] ?></td>
            <td><a href="update_student.php?id=<?=  $student[0] ?>">Update</a></td>
            <td><a href="crud/delete_student.php?id=<?=  $student[0] ?>">Delete</a></td>

        </tr>
        <?php


    }

    ?>
</table>
<h3>Add new student</h3>
<form action="crud/create_student.php" method="post">
    <p>ID</p>
    <input type="number" name="ID">
    <p>name</p>
    <input type="text" name="name">
    <p>surname</p>
    <input type="text" name="surname">
    <p>mathematics_mark</p>
    <input type="number" name="mathematics_mark">
    <p>physics_mark</p>
    <input type="number" name="physics_mark">
    <p>informatics_mark</p>
    <input type="number" name="informatics_mark">
    <p></p>
    <button type="submit">Add new student</button>

</form>

</body>
</html>
