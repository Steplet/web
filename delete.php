<?php

$id = $_GET['id'];
$data = new DOMDocument();
$data ->load('Data/data.xml');

$users = $data -> getElementsByTagName('users') ->item(0);
$user = $users->getElementsByTagName('user');

$i=0;

while (is_object($user->item($i++))){
    $prd=$user->item($i-1)->getElementsByTagName('id')->item(0);
    $prd_id= $prd->nodeValue;
    if( $prd_id== $id){
        $users->removeChild($user->item($i-1));
        break;
    }
}

$data->formatOutput=true;
$data->save('Data/data.xml');
?>

<p>List of users <a href="list.php">Click</a>.</p>
