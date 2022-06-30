<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("Location: \вход\Login.php");
}
else
{   $connection=mysqli_connect("localhost","admin","","alina_diplom");
    $a=$_SESSION['user']['id'];
    $user_progress_db = mysqli_query($connection, "SELECT * from progress where id='$a'");
    $user_proggres=mysqli_fetch_assoc($user_progress_db);

    $first=round(($user_proggres['firs_pro']+$user_proggres['second_pro']+$user_proggres['third_pro'])/3);

    $_SESSION['user_progress']=[
        'first_kurs'=>$first,
        'second_kurs'=>0
    ];


}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">

	<title>kabinet</title>

</head>

<body>

	<section class='header'>
		
		<section class='logo'><img src="img/logo.png" width=100% height=100%> </section>

        <section class='navigation'> <a class='navigation_text' href="/../личный кабиннт/kabinet.php">Личный кабинет</a> <a href="/../курсики/index.php" class='navigation_text'> Курсы</a>   <a href="/../Словарь/index.php" class='navigation_text'>Словарь</a></section>

		<p class="navigation_name" style="cursor: pointer" onclick="location.href='\\личный кабиннт\\kabinet.php'"><?php echo $_SESSION['user']['name']?></p>

	</section>

	<section class='main'>

		<div class="info">

			<div class="info_txt">Информация о пользователе</div>
            <?php
			echo '<div class="info_mail">E-mail: <div class="ots"></div><div class="info_block">'.$_SESSION['user']['email'].'</div></div>';
			echo '<div class="info_name">Имя:<div class="ots"></div><div class="info_block">'.$_SESSION['user']['name'].'</div> </div>';
			echo '<div class="info_phone">Дата регистрации:<div class="ots"></div><div class="info_block">'.$_SESSION['user']['data'] .' </div></div>';
			?>


            <a class="logout" href="logout.php">Выход</a>
		</div>

		<div class="progress">

			<div class="progress_text">Общий прогресс</div>

			<div class="progress_bar1">
				<div class="value_cont"><?php echo $_SESSION['user_progress']['first_kurs']?></div>
			</div>

			<div class="progress_bar2">
				<div class="value_cont2"><?php echo $_SESSION['user_progress']['second_kurs']?></div>
			</div>
<div class="text_block">

	<div class="text1">Курс 1</div>
	<div class="text2">Курс 2</div>

</div>

		</div>


	</section>

</body>
<script src="css/script.js"></script>
</html>