<?php
    session_start();

    if(!isset($_SESSION['uid'])) { //switch this out
        //Going back to login page
        header("location: index.php"); // This will redirect
        // differently depending on where you use the code, if you include
        // it in a file thats in a folder it will not find index.php.
        // This is because the code is still executed from the original
        // script.
    }
    else {
        //echo($_SESSION['uid']." ");
        
    }
?>


<!DOCTYPE html>
<html lang="se"> <!-- Change to "en" when translated -->
<head>
    <!-- WEBSITE INFORMATION -->
    <link rel="stylesheet" href="homestyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webschool</title>

    <!-- STYLES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Condensed&family=Roboto+Slab:wght@400;600&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/ef1241843c.js" crossorigin="anonymous"></script>

    
</head>

<body>
    <nav>
      <ul>
        <li><img class="bild" src="logga.png" alt="logga" /></li>
        <li>
          <p class="header">Hem</p>
        </li>
      </ul>
    </nav>


    <div class="head" style="width:100vw;">
        <button onclick="toggleSidenavbar()" style="margin-left: 1%;"><ion-icon name="reorder-four" ></ion-icon></button>
    </div>

    <!-- Will contains links to useful pages making it easier to navigate compared to other websites -->
    <div class="sidenav" id="sidenavbar">
        <button onclick="toggleSidenavbar()" id="sidenavtoggle" style="margin-right: 1%; float: right;"><ion-icon name="close"></ion-icon></button><br><br><br>
        
        <a href="#"><img id="imgtoggle" src="logga.png" alt="logga" /></a>

        <a href="./home.php">Hem</a><br>
        <a href="#">Schema</a><br>
        <a href="#">Elevmatris</a><br>
        <a href="#">Inlämningar</a><br>

        <a href="Includes/logout.php" style="vertical-align: bottom;    ">Logga ut</a><br>
    </div>

    <!-- Contains content for the landing page -->
    <div class="content" style="padding:0;">