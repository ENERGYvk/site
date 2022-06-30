<?php
session_start();
if(isset($_SESSION['user']))
{
    header("Location: \личный кабиннт\kabinet.php");
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>main</title>
</head>
<body>


	
	<section class='main'>


        <div class="box">
        <div class="fraza">Начни изучение корейского</div>

		<button name="reg" class="navigation_main_reg" onclick="location.href='\\регистрация\\Reg.php'"> Регистрация </button>
		<button name="vhod" class="navigation_main_vhod" onclick="location.href='\\вход\\login.php'"> Вход </button>

        </div>

	</section>

</body>
</html>