<?php
require_once 'Data/functions.php';

$id = $_GET['id'];
$data = new DOMDocument();
$data ->load('Data/data.xml');



?>

<!doctype html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="style.css">
    <title>MegaNetWork</title>
</head>
<body>

<form method="post">
    <div class="container">
        <h1>MegaNetWork</h1>
        <p>Refactor user information</p>
        <hr>

        <label for="user_name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="user_name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <hr>


        <button name="submit" type="submit" class="registerbtn">Accept changes</button>
    </div>

    <div class="container signin">
        <p>List of users <a href="list.php">Click</a>.</p>
    </div>
</form>
</body>
</html>

