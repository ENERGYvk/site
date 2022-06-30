<?php
session_start();

if(isset($_SESSION['user']))
{
    header("Location: ../личный кабиннт/kabinet.php");
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Login</title>
</head>
<body>

<form  action="scipts/log.php" method="post" class="log_container">
	<div class="text_welcome">Авторизация</div>
	<div class="text_img"><img src="img/logo.png" width=100% height=100%></div>
	<input placeholder="Логин"  class="log" name="login">
	<input placeholder="Пароль" type="password" class="pass" name="password_login" minlength="6" maxlength="25" >

    <?php
    if(isset($_SESSION['massage'])){
        echo '<p class="msg"> '.$_SESSION['massage'].' </p>';
        unset($_SESSION['massage']);
    }
    ?>	<button class="vhod"  type="submit">Войти</button>

	<a class="new_account" href="\регистрация\Reg.php">Нет аккаунта? Зарегестрироваться</a>


</form>
</body>
</html>