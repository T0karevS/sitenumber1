<?php
require_once 'connect.php';
$fullname = $_POST['fullname'];
$login = $_POST['login'];
$email = $_POST['email'];
$file = $_POST['file'];
$password = $_POST['password'];
$password_c = $_POST['password_c'];
if($password===$password_c)
{

}
else
{
    die('пароли не совпадают');
}
?>