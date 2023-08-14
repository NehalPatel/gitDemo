<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
if (isset($_GET['lg'])) {
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>Welcome
            <?php echo $_SESSION['username']; ?> | <a href="myhome.php?lg=1">Logout</a>
        </h1>
    </body>

</html>