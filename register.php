<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/mycss.css">
</head>
<body>
<form action="connect/signup.php" method="post" enctype="multipart/form-data">
    <label>ФИО</label>
    <input type="text" name="fullname" placeholder="Введите свое полное ФИО">
    <label>Login</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Email</label>
    <input type="email" name="email" placeholder="Введите свой Email">
    <label>Изображение профиля</label>
    <input type="file" name="file" placeholder="Ваше фото профиля">
    <label>password</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <label>confirm password</label>
    <input type="password" name="password_c" placeholder="Подтвердите свой пароль">
    <button>Зарегистрироваться</button>
    <p>Уже есть аккаунт? - <a href="index.php">Войти</a></p>
    <p class="msg">
        какое-то сообщение
    </p>
</form>


</body>
</html>