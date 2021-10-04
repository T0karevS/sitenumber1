<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="a.php" method="post">
    <div class="nums">
        <input type="text" name="num1">
        <input type="text" name="num2">
    </div>
    <div class="znak">
        <input type="text" name="znak">
    </div>
    <button>Ответ</button>
</form>
<?php
$result = (double)0;
$num1 = (double)$_POST['num1'];
$num2 = (double)$_POST['num2'];
$znak = $_POST['znak'];

if(gettype($num1) == "double" ) {
    if (gettype($num2) == "double" ) {
        switch ($znak) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
            default:
                echo("<h1>" . "недопустимое значение" . "</h1>");
                break;
        }
    } else {
        echo("<h1>" . "недопустимое значение" . "</h1>");
    }
}
else
{
    echo("<h1>"."недопустимое значение"."</h1>");
}
?>

<h1>Ответ:</h1>
<p><?php echo($result) ?><p>





</body>
</html>