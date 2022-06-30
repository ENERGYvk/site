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

        <div class="name">Итоговый тест</div>

        <div class="video">
            <form action="js/otvet.php" method="post">
            <div class="zadanie">1. Подпишите картинки</div>


            <div class="box_flag">

                <div class="flag"><img src="img/tet.png" ></div>
                <div class="flag"><img src="img/stul.png" ></div>
                <div class="flag"><img src="img/tel.png" ></div>
                <div class="flag"><img src="img/pen.png" ></div>
                <div class="flag"><img src="img/mag.png" width="150px" height="150px"></div>
                <div class="flag"><img src="img/stol.png" ></div>


            </div>

            <div class="box_flag">

                <input class="txt_b" placeholder="?"  name="1"></input>
                <input class="txt_b" placeholder="?" name="2"></input>
                <input class="txt_b" placeholder="?" name="3"></input>
                <input class="txt_b" placeholder="?" name="4"></input>
                <input class="txt_b" placeholder="?" name="5"></input>
                <input class="txt_b" placeholder="?" name="6"></input>


            </div>






            <div class="zadanie">2. Составьте предложения в соответствии с  приведенным примером</div>
            <div class="box">
                <div class="img_block" style="background-image: url(img/us.png);background-size: 100% 100%;"></div>

                <div class="input_box_1">
                    <div class="input_1" >마이클은 미국 사람입니다</div>
                    <div class="input_1" >마이클은 회사원입니다</div>
                </div>
            </div>
            <div style="font-family: 'Montserrat', sans-serif;font-size: 24px;"> 마이클(미국 사람/회사원)</div>

            <div class="box">
                <div class="img_block" style="background-image: url(img/ja.png);background-size: 100% 100%;"></div>

                <div class="input_box">
                    <input class="input" placeholder="_____?" name="7">
                    <input class="input" placeholder="_____." name="8">
                </div>
            </div>
            <div style="font-family: 'Montserrat', sans-serif;font-size: 24px;">요코(일본 사람/ 학생)</div>


            <div class="box">
                <div class="img_block" style="background-image: url(img/ko.png);background-size: 100% 100%;"></div>

                <div class="input_box">
                    <input class="input" placeholder="_____?"  name="9">
                    <input class="input" placeholder="_____." name="10">
                </div>
            </div>
            <div style="font-family: 'Montserrat', sans-serif;font-size: 24px;">장민수(한국 사람/ 은행원)</div>
            <div class="box">
                <div class="img_block" style="background-image: url(img/fra.png);background-size: 100% 100%;"></div>

                <div class="input_box">
                    <input class="input" placeholder="_____?" name="11">
                    <input class="input" placeholder="_____." name="12">
                </div>
            </div>
            <div style="font-family: 'Montserrat', sans-serif;font-size: 24px;">소피(프랑스 사람/ 영화배우)</div>
            <div class="box">
                <div class="img_block" style="background-image: url(img/ru.png);background-size: 100% 100%;"></div>

                <div class="input_box">
                    <input class="input" placeholder="_____?" name="13">
                    <input class="input" placeholder="_____." name="14">
                </div>
            </div>
            <div style="font-family: 'Montserrat', sans-serif;font-size: 24px;"> 나타샤(러시아 사람/ 주부)</div>
            <div class="box">
                <div class="img_block" style="background-image: url(img/mo.png);background-size: 100% 100%;"></div>

                <div class="input_box">
                    <input class="input" placeholder="_____?" name="15">
                    <input class="input" placeholder="_____." name="16">
                </div>
            </div>
            <div style="font-family: 'Montserrat', sans-serif;font-size: 24px;">바트(몽골 사람/ 요리사)</div>
            <div class="box">
                <div class="img_block" style="background-image: url(img/new.png);background-size: 100% 100%;"></div>

                <div class="input_box">
                    <input class="input" placeholder="_____?" name="17">
                    <input class="input" placeholder="_____." name="18">
                </div>
            </div>
            <div style="font-family: 'Montserrat', sans-serif;font-size: 24px;">크리스(호주 사람/의사)</div>


        <button name="zaver" class="zav" onclick="location.href=''">Завершить</button>
            </form>
        <button name="reload" class="zav" onclick="location.href=''">Заново</button>
            <?php
            if(isset($_SESSION['otv']))
                echo '<div class="otvet">Баллов набрано: '.$_SESSION['otv'].'/18</div>';
            unset($_SESSION['otv']);

            ?>
        </div>

        <div class="box_btn">
            <button name="kurs" class="kurs" onclick="location.href='\\курсики\\index.php'"> Список уроков</button>
            <button name="next" class="next" onclick="location.href='\\курсики\\index.php'"> Далее</button>
            <button name="back" class="back" onclick="location.href='\\глава2\\глава2_выражение\\index.php'"> Назад</button>



        </div>


	</section>

</body>
</html>