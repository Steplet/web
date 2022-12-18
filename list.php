<?php

require_once 'Data/functions.php';
$data = new DOMDocument();
$data ->load('Data/data.xml');

$users = $data -> getElementsByTagName('users') ->item(0);
?>

<!doctype html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="style.css">
    <title>MegaNetWork</title>
</head>
<body>

    <h2>This is the list of users</h2>

    <div class="container_table">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <tbody>
            <?php $counter = 0;
            $user = $users-> getElementsByTagName('user');
            while (is_object($user -> item($counter ++))){
            ?>
            <tr>

                <td><a href="index.php?id= <?php echo $user -> item($counter - 1) -> getElementsByTagName('id') -> item(0) -> nodeValue;?>"><?php echo $user -> item($counter - 1) -> getElementsByTagName('id') -> item(0) -> nodeValue;?></a></td>
                <td><?php echo $user -> item($counter - 1) -> getElementsByTagName('name') -> item(0) -> nodeValue?></td>
                <td><?php echo $user -> item($counter - 1) -> getElementsByTagName('email') -> item(0) -> nodeValue?></td>
                <td><?php echo $user -> item($counter - 1) -> getElementsByTagName('psw') -> item(0) -> nodeValue?></td>
                <td><a href="update.php?id=<?php echo  $user->item($counter-1)->getElementsByTagName('id')->item(0)->nodeValue; ?>">Редактировать</a></td>
                <td><a onclick="return confirmation('<?php echo $user->item($counter-1)->getElementsByTagName('name')->item(0)->nodeValue;?>')" href= "delete.php?id=<?php echo  $user->item($counter-1)->getElementsByTagName('id')->item(0)->nodeValue; ?>" >Удалить</a></td>
            </tr>
            <?php } ?>

            </tbody>
        </table>

        <a href="create.php">Add new user</a>

    </div>
</body>
</html>
