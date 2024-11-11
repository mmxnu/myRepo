<?php
require_once('config/connection.php');
if (isset($_POST['username']) && !empty($_POST['username'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `library`.`users`
    (`id`,
     `username`,
     `email`,
     `login`,
     `password`)
VALUES ('$id',
'$username',
'$email',
'$login',
'$password')";
 $result = mysqli_query($conn, $sql);
}
header( "Location:index.php?status=success");
?>