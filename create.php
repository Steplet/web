<?php
require_once 'Data/functions.php';
$data = new DOMDocument();
$data ->load('Data/data.xml');
$users = $data->getElementsByTagName('users')->item(0);
$user = $users->getElementsByTagName('user');
$length = $user->length;
$id = $user[$length - 1]->getElementsByTagName('id')->item(0)->nodeValue+1;

if (isset($_POST['submit'])){
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];

    $new_user = $data->createElement('user');

    $new_id = $data->createElement('id', $id);
    $new_name = $data->createElement('name', $name);
    $new_email = $data->createElement('email', $email);
    $new_psw = $data->createElement('psw', $psw);

    $new_user->appendChild($new_id);
    $new_user->appendChild($new_name);
    $new_user->appendChild($new_email);
    $new_user->appendChild($new_psw);

    $users->appendChild($new_user);

    $data->formatOutput = true;

    $data->save('Data/data.xml');

}

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
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="user_name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="user_name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <hr>


            <button name="submit" type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>List of users <a href="list.php">Click</a>.</p>
        </div>
    </form>
</body>
</html>

