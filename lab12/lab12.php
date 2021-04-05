<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Контактна інформація</title>
</head>
<body>
<?php
$errors = [];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$mailIndex = $_POST['mailIndex'];
$favoriteSubject = $_POST['favoriteSubject'];
if(!empty($_POST)){
    if(empty ($name)){
        $errors[] = 'поле Ім`я не заповнене';
    }
    if(empty($surname)){
        $errors[] = 'поле Прізвище не заповнене';
    }
    if(empty($email)){
        $errors[] = 'поле email не заповнене';
    }
    if(empty($mailIndex)){
        $errors[] = 'поле поштовий індекс не заповнене';
    }
    if(empty($favoriteSubject)){
        $errors[] = 'поле улюблений предмет не заповнене';
    }
    if(empty($errors)){
        echo "<h2>Дякуємо! Слідуюча інформація була успішно надіслана</h2>";
        echo "<b>Контактна інформація</b><br>";
        echo htmlspecialchars($name),"<br>";
        echo htmlspecialchars($surname),"<br>";
        echo htmlspecialchars($email),"<br>";
        echo htmlspecialchars($mailIndex),"<br>";
        echo htmlspecialchars($favoriteSubject);
        exit();
    }
}
if(!empty($errors)){
    foreach ($errors as $err){
        echo "<span style = 'color:red'>$err</span><br>";
    }
}
?>
<form method="post">
    <table  border="3" cellspacing="3" cellpadding="3" width="20%" bgcolor="red" align="left">
        <tr>
            <td>Ім`я студента</td>
            <td><input type="text" name="name" value="<?php htmlspecialchars($_POST['name'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Ім`я студента</td>
            <td><input type="text" name="surname" value="<?php htmlspecialchars($_POST['surname'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php htmlspecialchars($_POST['email'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Поштова індекс</td>
            <td><input type="text" name="mailIndex" value="<?php htmlspecialchars($_POST['mailIndex'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Улюблений предмет</td>
            <td><input type="text" name="favoriteSubject" value="<?php htmlspecialchars($_POST['favoriteSubject'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Send"></td>
            <td><input type="reset" value="cancel"></td>
        </tr>
    </table>
</form>
</body>
</html>



