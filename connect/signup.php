<?php
session_start();
require_once 'connect.php';
$fullname = $_POST['fullname'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = MD5($_POST['password']);
$password_c = MD5($_POST['password_c']);
if($password===$password_c)
{
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'. $path))
    {
        $_SESSION['message'] = 'Ошибка загрузки изображения';
        header('location: ../register.php');
    }
    mysqli_query($connect, "INSERT INTO `users` (`user_id`, `fio`, `login`, `Email`, `Password`, `Avatar`) VALUES (NULL, '$fullname', '$login', '$email', '$password', '$path' ) ");
    $_SESSION['message1'] = 'Регистрация прошла успешно!';
    header('Location: ../index.php');
}
else
{
    $_SESSION['message'] = 'Пароли не совпадают!';
    header('Location: ../register.php');
}
