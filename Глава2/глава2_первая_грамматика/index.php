<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("Location: \вход\Login.php");
}
else
{
//    $connection=mysqli_connect("localhost","admin","","alina_diplom");
//    $a=$_SESSION['user']['id'];
//    $user_slovar = mysqli_query($connection, "SELECT * from slovar where id='$a'");


}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>help</title>
</head>
<body>

	<section class='header'>
		
		<section class='logo'><img src="img/logo.png" width=100% height=100%> </section>
	
		
		<section class='navigation' ><a class='navigation_text' href="/../личный кабиннт/kabinet.php">Личный кабинет</a> <a href="/../курсики/index.php" class='navigation_text'> Курсы</a>   <a href="/../словарь/index.php" class='navigation_text'>Словарь</a></section>


		<p class="navigation_name" id="user_name" style="cursor: pointer" onclick="location.href='\\личный кабиннт\\kabinet.php'"><?php echo $_SESSION['user']['name']; ?></p>
		
	</section>
	
	<section class='main'>

        <div class="N_glav">Базовая грамматика</div>

        <div class="name">입니다/습니다</div>


        <div class="video">


            <iframe width="1100" height="650" src="https://www.youtube.com/embed/0nAEciAy_wo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>

        <div class="box_btn">
            <button name="kurs" class="kurs" onclick="location.href='\\курсики\\index.php'"> Список уроков</button>
            <button name="next" class="next" onclick="location.href='..\\php\\sub_11.php'"> Далее</button>
            <button name="back" class="back" onclick="location.href='\\глава2\\глава2_лексика\\index.php'"> Назад</button>



        </div>


	</section>

</body>

</html>