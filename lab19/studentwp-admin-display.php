<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://wordpress.loc
 * @since      1.0.0
 *
 * @package    Studentwp
 * @subpackage Studentwp/admin/partials
 */
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<!--<form method="post">
<input type="number" name="id">
    <input type="text" name="group">
    <input type="number" name="year">
    <input type="text" name="theme">
    <input type="text" name="leader">
    <button type="submit" name="sand">send</button>

</form>-->
<?php
/*function DBP_insert_data() {
    global $wpdb;
    $table_name = $wpdb->prefix.'diploma_theme';

    $DBP_id = $_POST['id'];
    $DBP_group = $_POST['group'];
    $DBP_year= $_POST['year'];
    $DBP_theme = $_POST['theme'];
    $DBP_leader = $_POST['leader'];

if(isset($_POST['sand'])) {
    $wpdb->insert($table_name,
        array(
            'id' => $DBP_id,
            'group' => $DBP_group,
            'year' => $DBP_year,
            'theme' => $DBP_theme,
            'leader' => $DBP_leader

        ),
        array(

            '%s',
            '%s',
            '%s',
            '%s'


        )


    );
}
}*/
?>


<?php
$connect = mysqli_connect('localhost','root','root','wordpress');
if(!$connect) {
    die ('Error connect to database');
}
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
        <td>group</td>
        <td>year_of_protection</td>
        <td>theme</td>
        <td>leader_of_diploma</td>
    </tr>

    <?php

    $diploma_themes = mysqli_query($connect,"Select * from wp_diploma_theme");
    $diploma_themes = mysqli_fetch_all($diploma_themes);
    foreach ($diploma_themes as $diploma_theme) {
        ?>

        <tr>
            <td><?= $diploma_theme[0] ?></td>
            <td><?= $diploma_theme[1] ?></td>
            <td><?= $diploma_theme[2] ?></td>
            <td><?= $diploma_theme[3] ?></td>
            <td><?= $diploma_theme[4] ?></td>
            <td><?= $diploma_theme[5] ?></td>
        </tr>
        <?php


    }

    ?>
</table>
<h3>Add new diploma_theme</h3>
<form method="post">
    <p>name</p>
    <input type="text" name="name">
    <p>group</p>
    <input type="text" name="group">
    <p>year_of_protection</p>
    <input type="number" name="year_of_protection">
    <p>theme</p>
    <input type="text" name="theme">
    <p>leader_of_diploma</p>
    <input type="text" name="leader_of_diploma">
    <p><button type="submit">Add new theme</button></p>

</form>

<h3>look for a year of protection</h3>

<form method="post">
    <p><input type="number" name="enter_year"> </p>
    <p><input type="submit" name="find" value="find"></p>
</form>

</body>
</html>
<?php
$name = $_POST['name'];
$group = $_POST['group'];
$year_of_protection = $_POST['year_of_protection'];
$theme = $_POST['theme'];
$leader_of_diploma = $_POST['leader_of_diploma'];
mysqli_query($connect, "INSERT INTO `wp_diploma_theme`(`name`, `group`, `year_of_protection`, `theme`, `leader_of_diploma`) VALUES ('$name','$group','$year_of_protection','$theme','$leader_of_diploma')");
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
            <td>group</td>
            <td>year_of_protection</td>
            <td>theme</td>
            <td>leader_of_diploma</td>
        </tr>
<?php
$enter_year = $_POST['enter_year'];
if(isset($_POST['find'])) {
    $find = mysqli_query($connect, "Select * from wp_diploma_theme where (`year_of_protection` = '$enter_year' )");
    while ($year = mysqli_fetch_assoc($find)) {
        ?>
        <tr>
        <td><?= $year['id'] ?></td>
        <td><?= $year['name'] ?></td>
        <td><?= $year['group'] ?></td>
        <td><?= $year['year_of_protection'] ?></td>
        <td><?= $year['theme'] ?></td>
        <td><?= $year['leader_of_diploma'] ?></td>
        </tr>
    <?php
    }
}
?>
    </table>
