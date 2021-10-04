<?php
    session_start();
if (!$_SESSION['user'])
{
    header('location: index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/mycss1.css">
</head>
<body>
<header>
    <img class="avatarka" src="<?php  echo $_SESSION['user']['avatar'];  ?>">
    <h2><?= $_SESSION['user']['fullname'] ?></h2>
    <a href="#"><?= $_SESSION['user']['email']; ?></a>
    <br>
    <a href="connect/logout.php" class="logout"> Выход</a>
</header>

</body>
</html>
