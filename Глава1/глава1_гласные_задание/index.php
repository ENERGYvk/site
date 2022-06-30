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

        <div class="N_glav">Алфавит</div>

        <div class="name">Гласные. Задания</div>



        <div class="video">
            <div class="audio">
                <img src="img/а.png" width="35" height="35" onclick="play1()">
                <audio id="a1"></audio>
                <script>
                    function play1(){
                        let file2='1.mp3';
                        let audio2=document.getElementById("a1");
                        audio2.src=file2;
                        audio2.play();
                    }

                </script>
            </div>
            <div class="zad_1">1. Прослушайте и выберите верное написание слога</div>

            <div class="zad_1_box">

            <div class="zad_1_1_0">1)</div>
            <div class="zad_1_1_1" id="1_1">오어</div>
            <div class="zad_1_1_2" id="1_2">오아</div>
            <div class="zad_1_1_3" id="1_3">어오</div>

            </div>

            <div class="zad_1_box">

                <div class="zad_1_1_0">2)</div>
                <div class="zad_1_1_1" id="2_1">유우</div>
                <div class="zad_1_1_2" id="2_2">으유</div>
                <div class="zad_1_1_3" id="2_3">우유</div>

            </div>
            <div class="zad_1_box">

                <div class="zad_1_1_0">3)</div>
                <div class="zad_1_1_1" id="3_1">여유</div>
                <div class="zad_1_1_2" id="3_2">요유</div>
                <div class="zad_1_1_3" id="3_3">야유</div>

            </div>
            <div class="zad_1_box">

                <div class="zad_1_1_0">4)</div>
                <div class="zad_1_1_1" id="4_1">어여</div>
                <div class="zad_1_1_2" id="4_2">오요</div>
                <div class="zad_1_1_3" id="4_3">아야</div>

            </div>
            <div class="zad_1_box">

                <div class="zad_1_1_0">5)</div>
                <div class="zad_1_1_1" id="5_1">이아</div>
                <div class="zad_1_1_2" id="5_2">아이</div>
                <div class="zad_1_1_3" id="5_3">아아</div>

            </div>



        <div class="audio_b"><img src="img/а.png" width="35" height="35" onclick="play()">
            <audio id="a2"></audio>
            <script>
                function play(){
                    let file='2.mp3';
                    let audio=document.getElementById("a2");
                    audio.src=file;
                    audio.play();
                }

            </script>
        </div>
        <div class="zad_2">2. Прослушайте и дополните слова</div>

            <div class="zad_2_box">
                <div class="zad_1_2_0">1)</div>
                <div class="zad_1_2_1" >우</div>
                <div class="zad_1_2_2" id="zone_1"></div>

                <div class="zad_1_2_0">2)</div>
                <div class="zad_1_2_1">여</div>
                <div class="zad_1_2_2" id="zone_2"></div>
            </div>

            <div class="zad_2_box">
                <div class="zad_1_2_0">3)</div>
                <div class="zad_1_2_1" id="zone_3"></div>
                <div class="zad_1_2_2" >이</div>

                <div class="zad_1_2_0 ">4)</div>
                <div class="zad_1_2_1" id="zone_4"></div>
                <div class="zad_1_2_2">이</div>
            </div>

            <div class="zad_3_box">
                <div id="block_1" draggable="true" class="zad_1_2_2_o">오</div>
                <div id="block_2" draggable="true" class="zad_1_2_2_o">유</div>
                <div id="block_3" draggable="true" class="zad_1_2_2_o">아</div>
                <div id="block_4" draggable="true" class="zad_1_2_2_o">우</div>
            </div>
            <div class="ots"></div>
            <form action="js/otvet.php" method="post">
                <input id="otv_1" name="otv_1" type="hidden">
                <input id="otv_2" name="otv_2" type="hidden">
                <input id="otv_3" name="otv_3" type="hidden">
                <input id="otv_4" name="otv_4" type="hidden">
                <input id="otv_5" name="otv_5" type="hidden">
                <input id="otv_6" name="otv_6" type="hidden">
                <input id="otv_7" name="otv_7" type="hidden">
                <input id="otv_8" name="otv_8" type="hidden">
                <input id="otv_9" name="otv_9" type="hidden">
            <button name="zaver" class="zav" ">Завершить</button>
            </form>
            <button name="reload" class="zav" onclick="location.href=''">Заново</button>
            <?php
            if(isset($_SESSION['otv']))
                echo '<div class="otvet">Баллов набрано: '.$_SESSION['otv'].'/9</div>';
                unset($_SESSION['otv']);

            ?>

        </div>

        <div class="box_btn">
            <button name="kurs" class="kurs" onclick="location.href='\\курсики\\index.php'"> Список уроков</button>
            <button name="next" class="next" onclick="location.href='\\глава1\\глава1_дифтонги_видео\\index.php'"> Далее</button>
            <button name="back" class="back" onclick="location.href='\\глава1\\глава1_гласные\\index.php'"> Назад</button>



        </div>


	</section>

</body>

<script src="js/drag_drop.js"></script>
<script src="js/otvet.js"></script>

<script>
    let first=document.getElementById("1_1");
    let second=document.getElementById("1_2");
    let third=document.getElementById("1_3");
    let otv1=document.getElementById("otv_1");

    first.onclick=f_v;
    second.onclick=s_v;
    third.onclick=t_v;

    function f_v(){
        otv1.value=first.textContent;
        first.style.color="#e74c3c";
        second.style.color="black";
        third.style.color="black";
    }
    function s_v(){
        otv1.value=second.textContent;
        first.style.color="black";
        second.style.color="#e74c3c";
        third.style.color="black";
    }
    function t_v(){
        otv1.value=third.textContent;
        first.style.color="black";
        second.style.color="black";
        third.style.color="#e74c3c";
    }

</script>
<script>
    let first_2=document.getElementById("2_1");
    let second_2=document.getElementById("2_2");
    let third_2=document.getElementById("2_3");
    let otv2=document.getElementById("otv_2");

    first_2.onclick=f_v;
    second_2.onclick=s_v;
    third_2.onclick=t_v;

    function f_v(){
        otv2.value=first_2.textContent;
        first_2.style.color="#e74c3c";
        second_2.style.color="black";
        third_2.style.color="black";
    }
    function s_v(){
        first_2.style.color="black";
        second_2.style.color="#e74c3c";
        third_2.style.color="black";
        otv2.value=second_2.textContent;
    }
    function t_v(){
        otv2.value=third_2.textContent;
        first_2.style.color="black";
        second_2.style.color="black";
        third_2.style.color="#e74c3c";
    }

</script>
<script>
    let first3=document.getElementById("3_1");
    let second3=document.getElementById("3_2");
    let third3=document.getElementById("3_3");
    let otv3=document.getElementById("otv_3");

    first3.onclick=f_v;
    second3.onclick=s_v;
    third3.onclick=t_v;

    function f_v(){
        otv3.value=first3.textContent;
        first3.style.color="#e74c3c";
        second3.style.color="black";
        third3.style.color="black";
    }
    function s_v(){
        otv3.value=second3.textContent;
        first3.style.color="black";
        second3.style.color="#e74c3c";
        third3.style.color="black";
    }
    function t_v(){
        otv3.value=third3.textContent;
        first3.style.color="black";
        second3.style.color="black";
        third3.style.color="#e74c3c";
    }

</script>
<script>
    let first4=document.getElementById("4_1");
    let second4=document.getElementById("4_2");
    let third4=document.getElementById("4_3");
    let otv4=document.getElementById("otv_4");

    first4.onclick=f_v;
    second4.onclick=s_v;
    third4.onclick=t_v;

    function f_v(){
        otv4.value=first4.textContent;
        first4.style.color="#e74c3c";
        second4.style.color="black";
        third4.style.color="black";
    }
    function s_v(){
        otv4.value=second4.textContent;
        first4.style.color="black";
        second4.style.color="#e74c3c";
        third4.style.color="black";
    }
    function t_v(){
        otv4.value=third4.textContent;
        first4.style.color="black";
        second4.style.color="black";
        third4.style.color="#e74c3c";
    }

</script>
<script>
    let first5=document.getElementById("5_1");
    let second5=document.getElementById("5_2");
    let third5=document.getElementById("5_3");
    let otv5=document.getElementById("otv_5");

    first5.onclick=f_v;
    second5.onclick=s_v;
    third5.onclick=t_v;

    function f_v(){
        otv5.value=first5.textContent;
        first5.style.color="#e74c3c";
        second5.style.color="black";
        third5.style.color="black";
    }
    function s_v(){
        otv5.value=second5.textContent;
        first5.style.color="black";
        second5.style.color="#e74c3c";
        third5.style.color="black";
    }
    function t_v(){
        otv5.value=third5.textContent;
        first5.style.color="black";
        second5.style.color="black";
        third5.style.color="#e74c3c";
    }

</script>



</html>