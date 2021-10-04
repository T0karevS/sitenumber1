<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/mycss2.css">
</head>
<body>
<header>
    <img class="avatarka" src="<?php  echo $_SESSION['user']['avatar'];  ?>">


</header>

</body>
</html>
