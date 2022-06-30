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
	<title>Reg</title>
</head>
<body>




<form action="scripts/log_in.php" class="log_container" method="POST">
	<div class="text_welcome">Регистрация </div>
	<div class="text_img"><img src="img/logo.png" width=100% height=100%></div>
	<input placeholder="Email"  type="email" class="log" name="email" id="login" >
	<input placeholder="Логин" class="log" name="username" id="name" >
	<input placeholder="Пароль" type="password" class="pass" id="password_reg"  name="pass" minlength="6" maxlength="25" >
    <input placeholder="Повторите пароль" type="password" class="pass" id="password_reg2"  name="pass2" minlength="6" maxlength="25" >
    <?php
    if(isset($_SESSION['massage'])){
        echo '<p class="msg"> '.$_SESSION['massage'].' </p>';
        unset($_SESSION['massage']);

    }
    ?>
	<button class="reg" id="button_reg" type="submit">Зарегистрироваться</button>
    <a class="have_account" href="\вход\Login.php">Есть аккаунт? Войти </a>


</form>



</div>
</body>
</html>