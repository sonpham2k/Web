<!DOCTYPE html>
<?php
    session_start();
    include('connect.php');
    if($_SESSION["login"] != true){
        header("location:admin.php");
    }
?>
<html>
<head>
    <title>HOME</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\css_register.css" />
</head>
<body>
         
<form method="post">
        <a href="register.php" target="_self"> <i> Màn hình đăng kí sinh viên </i> </a>
        <a href="logout.php" target="_self"> <i> Logout</i> </a>
</form>
</body>
</html>