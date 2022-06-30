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

        <div class="name">입니다, 입니까 Задания</div>

        <div class="video">
            <form action="js/otvet.php" method="post">
            <div class="zadanie">1. Составьте предложения в соответствии с  приведенным примером</div>
            <div class="box">
                <div class="img_block" style="background-image: url(img/mag.png);background-size: 100% 100%;"></div>

                <div class="input_box_1" >
                    <div class="input_1">책입니까?</div>
                    <div class="input_1" >책입니다</div>
                </div>
            </div>
            <div class="txt"> (책)</div>

            <div class="box">
                <div class="img_block" style="background-image: url(img/tea.png);background-size: 100% 100%;"></div>

                <div class="input_box">
                    <input class="input" placeholder="_____?" name="3">
                    <input class="input" placeholder="_____." name="4">
                </div>
            </div>
            <div style="font-family: 'Montserrat', sans-serif;font-size: 24px;margin-left:62px;">(선생님)</div>
            <div class="box">
                <div class="img_block" style="background-image: url(img/stul.png);background-size: 100% 100%;"></div>

                <div class="input_box">
                    <input class="input" placeholder="_____?" name="5">
                    <input class="input" placeholder="_____." name="6">
                </div>
            </div>
            <div style="font-family: 'Montserrat', sans-serif;font-size: 24px;margin-left:75px;"> (의자)</div>
            <div class="box">
                <div class="img_block" style="background-image: url(img/tel.png);background-size: 100% 100%;"></div>

                <div class="input_box">
                    <input class="input" placeholder="_____?" name="7">
                    <input class="input" placeholder="_____." name="8">
                </div>
            </div>
            <div style="font-family: 'Montserrat', sans-serif;font-size: 24px;margin-left:75px;"> (전화)</div>
            <div class="box">
                <div class="img_block" style="background-image: url(img/pen.png);background-size: 100% 100%;"></div>

                <div class="input_box">
                    <input class="input" placeholder="_____?" name="9">
                    <input class="input" placeholder="_____." name="10">
                </div>
            </div>
            <div style="font-family: 'Montserrat', sans-serif;font-size: 24px;margin-left:75px;"> (연필)</div>
            <div class="box">
                <div class="img_block" style="background-image: url(img/bag.png);background-size: 100% 100%;"></div>

                <div class="input_box">
                    <input class="input" placeholder="_____?" name="11">
                    <input class="input" placeholder="_____." name="12">
                </div>
            </div>
            <div style="font-family: 'Montserrat', sans-serif;font-size: 24px;margin-left:75px;"> (가방)</div>


        <button name="zaver" class="zav" onclick="location.href=''">Завершить</button>
            </form>
        <button name="reload" class="zav" onclick="location.href=''">Заново</button>
            <?php
            if(isset($_SESSION['otv']))
                echo '<div class="otvet">Баллов набрано: '.$_SESSION['otv'].'/10</div>';
            unset($_SESSION['otv']);

            ?>

        </div>

        <div class="box_btn">
            <button name="kurs" class="kurs" onclick="location.href='\\курсики\\index.php'"> Список уроков</button>
            <button name="next" class="next" onclick="location.href='\\глава2\\глава2_что_такое\\index.php'"> Далее</button>
            <button name="back" class="back" onclick="location.href='\\глава2\\глава2_вторая_грамматика\\index.php'"> Назад</button>



        </div>


	</section>

</body>
</html>