<?php

$db_name = 'mysql:host=localhost;dbname=cars';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

//$conn = mysqli_connect('localhost','root','','cars');

?>