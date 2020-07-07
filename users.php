<?php 

$connection = mysqli_connect('localhost', 'root', 'myObj:php$$$12', 'ajaxtest');

$query = 'SELECT * FROM users';

// Get results

$result = mysqli_query($connection, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);
?>