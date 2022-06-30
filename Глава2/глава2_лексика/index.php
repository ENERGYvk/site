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

        <div class="name">Лексика</div>





        <div class="video">
            <form method="post" action="js/otvet.php">
            <div class="txt">1. Впишите название страны в соответствии с ее флагом</div>
            <div class="box_flag">
                <div class="flag"><img src="img/jp.png" width="160px" height="160px"></div>
                <div class="flag"><img src="img/korean.png" width="160px" height="160px"></div>
                <div class="flag"><img src="img/ru.png" width="160px" height="160px"></div>
                <div class="flag"><img src="img/usa.png" width="160px" height="160px"></div>
            </div>
            <div class="box_flag">
            <input class="box_txt" placeholder="?" name="1"></input>
            <input class="box_txt" placeholder="?" name="2">
            <input class="box_txt" placeholder="?" name="3"></input>
            <input class="box_txt" placeholder="?" name="4"></input>
            </div>


            <div class="txt">2. Преобразуйте слово, опираясь на пример</div>

            <div class="box_zad">
            <div class="zad_2">1) 한국</div>
            <div class="tir">---</div>
            <div class="txt_primer">(한국 사람)</div>
            </div>

            <div class="box_zad">
                <div class="zad_2">2) 중국</div>
                <div class="tir">---</div>
                (
                <input class="input_txt" name="5">
                )
            </div>

            <div class="box_zad">
                <div class="zad_2">3) 프랑스</div>
                <div class="tir">---</div>
                (
                <input class="input_txt"  name="6">
                )
            </div>

            <div class="box_zad">
                <div class="zad_2">4) 호주</div>
                <div class="tir">---</div>
                (
                <input class="input_txt"  name="7">
                )
            </div>

            <div class="box_zad">
                <div class="zad_2">5) 러시아</div>
                <div class="tir">---</div>
                (
                <input class="input_txt"  name="8">
                )
            </div>



            <div class="ots"></div>


            <div class="audio">
                <img src="img/а.png" width="35px" height="35px" onclick="play4()">
                <audio id="a4"></audio>
                <script>
                    function play4(){
                        let file='4.mp3';
                        let audio=document.getElementById("a4");
                        audio.src=file;
                        audio.play();
                    }

                </script>
            </div>
            <div class="txt">3. Просулшайте и составьте слово, дополнив недостающие части</div>

            <div class="box_block">
                <div class="txt_primer">1)</div>
                <div class="block">사</div>
                <input class="input_block"  name="9">
                <div class="prob"></div>

                <div class="txt_primer">2)</div>
                <div class="block">회</div>
                <input class="input_block"  name="10">

            </div>

            <div class="box_block">
                <div class="txt_primer">3)</div>
                <input class="input_block"  name="11">
                <div class="block">회</div>

                <div class="prob"></div>

                <div class="txt_primer">4)</div>
                <div class="block">의</div>
                <input class="input_block"  name="12">
            </div>

            <div class="box_block">
                <div class="txt_primer">5)</div>
                <input class="input_block"  name="13">
                <div class="block">게</div>

                <div class="prob"></div>

                <div class="txt_primer">6)</div>
                <div class="block">웨</div>
                <input class="input_block"  name="14">
                <input class="input_block"  name="15">
            </div>


        <button name="zaver" class="zav" onclick="location.href=''">Завершить</button>
            </form>
        <button name="reload" class="zav" onclick="location.href=''">Заново</button>
        <?php
        if(isset($_SESSION['otv']))
            echo '<div class="otvet">Баллов набрано: '.$_SESSION['otv'].'/15</div>';
        unset($_SESSION['otv']);

        ?>


        </div>

        <div class="box_btn">
            <button name="kurs" class="kurs" onclick="location.href='\\курсики\\index.php'"> Список уроков</button>
            <button name="next" class="next" onclick="location.href='..\\php\\sub_10.php'"> Далее</button>
            <button name="back" class="back" onclick="location.href='\\глава2\\глава2_первая_лексика\\index.php'"> Назад</button>



        </div>


	</section>

</body>





</html>