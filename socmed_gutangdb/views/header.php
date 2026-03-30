<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gutang</title>
        <link href="views/res/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="navbar">
            <?php if (isset($_SESSION['aid'])) { ?>
                <ul class="left-nav">
                    <a href="timeline.php"><li class="logo">&nbsp;</li></a>
                    <a href="timeline.php"><li>Gutang</li></a>
                </ul>
                <ul class="right-nav">
                    <a href="profile.php">
                        <li><?= $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></li>
                    </a>
                    <a href="models/logout_account.php">
                        <li>logout</li>
                    </a>
                </ul>
            <?php } else { ?>
                <ul class="left-nav">
                    <a href="login.php"><li class="logo">&nbsp;</li></a>                   </a>
                    <a href="login.php"><li>Gutang</li></a>
                </ul>
                <ul class="right-nav">
                    <a href="login.php"><li>Login</li></a>
                    <a href="index.php"><li>Signup</li></a>
                </ul> 
            <?php } ?>
        </div>