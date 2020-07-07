<?php 

//Connect to a database

$connection = mysqli_connect('localhost', 'root', 'myObj:php$$$12', 'ajaxtest');

echo 'Processong...';

// Check for POST variable

if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    echo "POST: your name is " . $_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($connection, $query)){
        echo "user added...";
    } else {
        echo 'ERROR: ' . mysqli_error($connection);
    }
}

// Check for GET variable

if(isset($_GET['name'])){
    echo "GET: your name is " . $_GET['name'];
}

?>