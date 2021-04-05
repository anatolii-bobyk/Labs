<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Контактна інформація</title>
</head>
<body>
<?php
define("SURNAME_REG_EXP", '/^[а-яА-ЯёЁ]+$/');
define("EMAIL_REG_EXP",'/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u');
define("PHONE_REG_EXP",'/^\([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}/');
$errors = [];
$name = $_POST['name'];
$surname = $_POST['surname'];
$mathMark = $_POST['mathMark'];
$physicsMark = $_POST['physicsMark'];
$informaticsMark = $_POST['informaticsMark'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
if(!empty($_POST)){
    if(empty ($name)){
        $errors[] = 'поле Ім`я не заповнене';
    }
    if(!preg_match(SURNAME_REG_EXP, $surname)){
        $errors[] = 'Прізвище не відповідає заданим критеріям';
    }
    if(!preg_match(EMAIL_REG_EXP, $email)){
        $errors[] = 'email не відповідає заданим критеріям';
    }
    if(!preg_match(PHONE_REG_EXP, $phoneNumber)){
        $errors[] = 'номер телефону не відповідає заданим критеріям';
    }
    if(empty($mathMark)){
        $errors[] = 'поле оцінка з математики не заповнене';
    }
    if(empty($physicsMark)){
        $errors[] = 'поле оцінка з фізики не заповнене';
    }
    if(empty($informaticsMark)){
        $errors[] = 'поле оцінка з інформатики не заповнене';
    }

    if(empty($errors)){
        echo "<h2>Дякуємо! Слідуюча інформація була успішно надіслана</h2>";
        echo "<b>Контактна інформація</b><br>";
        echo htmlspecialchars($name),"<br>";
        echo htmlspecialchars($surname),"<br>";
        echo "Оцінка з математики:",' ',htmlspecialchars($mathMark),"<br>";
        echo "Оцінка з фізики:",' ',htmlspecialchars($physicsMark),"<br>";
        echo "Оцінка з інформатики:",' ',htmlspecialchars($informaticsMark),"<br>";
        echo "Email:",' ',htmlspecialchars($email),"<br>";
        echo "номер телефону:",' ',htmlspecialchars($phoneNumber);
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
            <td>Прізвище студента</td>
            <td><input type="text" name="surname" value="<?php htmlspecialchars($_POST['surname'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Оцінка з математики</td>
            <td><input type="number" name="mathMark" value="<?php htmlspecialchars($_POST['mathMark'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Оцінка з фізики</td>
            <td><input type="number" name="physicsMark" value="<?php htmlspecialchars($_POST['physicsMark'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Оцінка з інформатики</td>
            <td><input type="number" name="informaticsMark" value="<?php htmlspecialchars($_POST['informaticsMark'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php htmlspecialchars($_POST['email'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Номер телефону</td>
            <td><input type="text" name="phoneNumber" value="<?php htmlspecialchars($_POST['phoneNumber'],ENT_QUOTES); ?>"></td>
        </tr>

        <tr>
            <td><input type="submit" value="Send"></td>
            <td><input type="reset" value="cancel"></td>
        </tr>
    </table>
</form>
</body>
</html>