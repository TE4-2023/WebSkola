<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(!isset($_SESSION['uid'])) { //switch this out
    //Going back to login page
    header("location: login.php");
}
else {
    echo($_SESSION['uid']." ");
    ?>
    <a href="Includes/logout.php">Log out</a>
    <?php
}
?>