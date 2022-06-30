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

        <div class="N_glav">    Алфавит</div>

        <div class="name">Итоговый тест</div>




        <form action="js/otvet.php" method="post">
        <div class="video">
            <div class="audio">
                <img src="img/а.png" width="35" height="35" onclick="play()">
                <audio id="a"></audio>
                <script>
                    function play(){
                        let file='1.mp3';
                        let audio=document.getElementById("a");
                        audio.src=file;
                        audio.play();
                    }

                </script>
            </div>
            <div class="zad_1">1. Прослушайте и выберите верное написание слога</div>

            <div class="zad_1_box">

            <div class="zad_1_1_0">1)</div>
            <div class="zad_1_1_1" id="1_1">주</div>
            <div class="zad_1_1_3_a" id="1_2">쭈</div>
            <div class="zad_1_1_3_a" id="1_3">추</div>

            </div>

            <div class="zad_1_box">

                <div class="zad_1_1_0">2)</div>
                <div class="zad_1_1_1" id="2_1">토</div>
                <div class="zad_1_1_3_a" id="2_2">또</div>
                <div class="zad_1_1_3_a" id="2_3">도</div>

            </div>
            <div class="zad_1_box">

                <div class="zad_1_1_0">3)</div>
                <div class="zad_1_1_1" id="3_1">아가</div>
                <div class="zad_1_1_1_p" id="3_2">아카</div>
                <div class="zad_1_1_1_p" id="3_3">아까</div>

            </div>
            <div class="zad_1_box">

                <div class="zad_1_1_0">4)</div>
                <div class="zad_1_1_1" id="4_1">도로</div>
                <div class="zad_1_1_1_p" id="4_2">또로</div>
                <div class="zad_1_1_1_p" id="4_3">토로</div>

            </div>
            <div class="zad_1_box">

                <div class="zad_1_1_0">5)</div>
                <div class="zad_1_1_1" id="5_1">고리</div>
                <div class="zad_1_1_1_p" id="5_2">코리</div>
                <div class="zad_1_1_1_p" id="5_3">꼬리</div>

            </div>

            <div class="zad_1_box">

                <div class="zad_1_1_0">6)</div>
                <div class="zad_1_1_1" id="6_1">바르다</div>
                <div class="zad_1_1_2" id="6_2">빠르다</div>
                <div class="zad_1_1_3" id="6_3">파르다</div>

            </div>





        <div class="audio_b">
            <img src="img/а.png" width="35" height="35" onclick="play2()">
            <audio id="a2"></audio>
            <script>
                function play2(){
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
                <div class="zad_1_2_1" id="zone_1" ></div>
                <div class="zad_1_2_2">다</div>

                <div class="zad_1_2_0">2)</div>
                <div class="zad_1_2_1" id="zone_2"></div>
                <div class="zad_1_2_2_t" id="zone_3"></div>
                <div class="zad_1_2_2" >리</div>
            </div>

            <div class="zad_2_box">
                <div class="zad_1_2_0">3)</div>
                <div class="zad_1_2_1" >아</div>
                <div class="zad_1_2_2" id="zone_4"></div>


                <div class="zad_1_2_0 ">4)</div>
                <div class="zad_1_2_1" id="zone_5"></div>
                <div class="zad_1_2_2">리</div>
            </div>

            <div class="zad_2_box">
                <div class="zad_1_2_0">5)</div>
                <div class="zad_1_2_1" id="zone_6"></div>
                <div class="zad_1_2_2" >개</div>

                <div class="zad_1_2_0 ">6)</div>
                <div class="zad_1_2_1" >토</div>
                <div class="zad_1_2_2" id="zone_7"></div>
            </div>



            <div class="zad_3_box">
                <div id="block_1" draggable="true" class="zad_1_2_2_o">끼</div>
                <div id="block_2" draggable="true" class="zad_1_2_2_o">빠</div>
                <div id="block_3" draggable="true" class="zad_1_2_2_o">꼬</div>
                <div id="block_4" draggable="true" class="zad_1_2_2_o">끼</div>
                <div id="block_5" draggable="true" class="zad_1_2_2_o">찌</div>
                <div id="block_6" draggable="true" class="zad_1_2_2_o">코</div>
                <div id="block_7" draggable="true" class="zad_1_2_2_o">쓰</div>
            </div>

            <div class="ot"></div>

            <div class="audio_b">
                <img src="img/а.png" width="35" height="35" onclick="play3()">
                <audio id="a3"></audio>
                <script>
                    function play3(){
                        let file='3.mp3';
                        let audio=document.getElementById("a3");
                        audio.src=file;
                        audio.play();
                    }

                </script>
            </div>
            <div class="zad_2">3. Прослушайте и впишите недостающие слоги</div>

            <div class="zad_4_box">
                <div class="zad_1_2_0_q">1)</div>

                <div class="zad_1_2_1_q" >책</div>
                <input class="input" name="14">
                <div class="zad_1_2_1_q" >부엌</div>
                <div class="zad_1_2_2">숙</div>
            </div>

            <div class="zad_4_box">
                <div class="zad_1_2_0_q ">2)</div>
                <div class="zad_1_2_1_q" >옷</div>
                <div class="zad_1_2_1_q" >솥</div>
                <input class="input" name="15">
                <div class="zad_1_2_2">있</div>

            </div>
            <div class="zad_4_box">
                <div class="zad_1_2_0_q">3)</div>
                <div class="zad_1_2_1_q" >앞</div>
                <div class="zad_1_2_1_q" >옆</div>
                <div class="zad_1_2_1_q" >삽</div>
                <input class="input"  name="16">
            </div>

            <div class="zad_4_box">
                <div class="zad_1_2_0_q ">4)</div>
                <div class="zad_1_2_1_q" >말</div>
                <input class="input"  name="17">
                <div class="zad_1_2_1_q" >잘</div>
                <div class="zad_1_2_2">알</div>

            </div>
            <div class="zad_4_box">
                <div class="zad_1_2_0_q">5)</div>
                <div class="zad_1_2_1_q" >공</div>
                <div class="zad_1_2_1_q" >강</div>
                <div class="zad_1_2_1_q" >방</div>
                <input class="input"  name="18">
            </div>

            <div class="zad_4_box">
                <div class="zad_1_2_0_q ">6)</div>
                <input class="input"  name="19">
                <div class="zad_1_2_1_q" >문</div>
                <div class="zad_1_2_1_q" >산</div>
                <div class="zad_1_2_2">손</div>

            </div>
            <div class="zad_4_box">
                <div class="zad_1_2_0_q">7)</div>
                <div class="zad_1_2_1_q" >밤</div>
                <div class="zad_1_2_1_q" >몸</div>
                <div class="zad_1_2_1_q" >섬</div>
                <input class="input"  name="20">
            </div>



            <div class="ot"></div>
            <div class="audio_b">
                <img src="img/а.png" width="35" height="35" onclick="play4()">
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
            <div class="zad_2">4. Прослушайте и выберите слова в правильной последовательности</div>
            <div class="zad_4_box">
                <div class="zad_1_2_0_q">1)</div>
                <select class="zad_1_2_2" name="21">
                    <option value="1">토끼</option>
                    <option  value="2">찌개</option>
                    <option value="3">꼬리</option>
                    <option value="4">코끼리</option>
                    <option value="5">예쁘다</option>
                    <option value="6">아빠</option>
                    <option value="7">쓰다</option>
                </select>


                <div class="zad_1_2_0_q">2)</div>
                <select class="zad_1_2_2" name="22">
                    <option value="1">토끼</option>
                    <option  value="2">찌개</option>
                    <option value="3">꼬리</option>
                    <option value="4">코끼리</option>
                    <option value="5">예쁘다</option>
                    <option value="6">아빠</option>
                    <option value="7">쓰다</option>
                </select>
            </div>
            <div class="zad_4_box">
                <div class="zad_1_2_0_q">3)</div>
                <select class="zad_1_2_2" name="23">
                    <option value="1">토끼</option>
                    <option  value="2">찌개</option>
                    <option value="3">꼬리</option>
                    <option value="4">코끼리</option>
                    <option value="5">예쁘다</option>
                    <option value="6">아빠</option>
                    <option value="7">쓰다</option>
                </select>
                <div class="zad_1_2_0_q">4)</div>
                <select class="zad_1_2_2" name="24">
                    <option value="1">토끼</option>
                    <option  value="2">찌개</option>
                    <option value="3">꼬리</option>
                    <option value="4">코끼리</option>
                    <option value="5">예쁘다</option>
                    <option value="6">아빠</option>
                    <option value="7">쓰다</option>
                </select>
                <div class="zad_1_2_0_q">5)</div>
                <select class="zad_1_2_2" name="25">
                    <option value="1">토끼</option>
                    <option  value="2">찌개</option>
                    <option value="3">꼬리</option>
                    <option value="4">코끼리</option>
                    <option value="5">예쁘다</option>
                    <option value="6">아빠</option>
                    <option value="7">쓰다</option>
                </select>
            </div>
            <div class="zad_4_box">
                <div class="zad_1_2_0_q">6)</div>
                <select class="zad_1_2_2" name="26">
                    <option value="1">토끼</option>
                    <option  value="2">찌개</option>
                    <option value="3">꼬리</option>
                    <option value="4">코끼리</option>
                    <option value="5">예쁘다</option>
                    <option value="6">아빠</option>
                    <option value="7">쓰다</option>
                </select>
                <div class="zad_1_2_0_q">7)</div>
                <select class="zad_1_2_2" name="27">
                    <option value="1">토끼</option>
                    <option  value="2">찌개</option>
                    <option value="3">꼬리</option>
                    <option value="4">코끼리</option>
                    <option value="5">예쁘다</option>
                    <option value="6">아빠</option>
                    <option value="7">쓰다</option>
                </select>
            </div>

            <div class="ot"></div>

            <input id="1" name="1"  type="hidden">
            <input id="2" name="2" type="hidden">
            <input id="3" name="3" type="hidden">
            <input id="4" name="4" type="hidden">
            <input id="5" name="5" type="hidden">
            <input id="6" name="6" type="hidden">
            <input id="7" name="7" type="hidden" >
            <input id="8" name="8"  type="hidden">
            <input id="9" name="9"  type="hidden">
            <input id="10" name="10"  type="hidden">
            <input id="11" name="11" type="hidden">
            <input id="12" name="12" type="hidden" >
            <input id="13" name="13"  type="hidden">




        <button name="zaver" class="zav">Завершить</button>
        </form>
        <button name="reload" class="zav" onclick="location.href=''">Заново</button>
        <?php
        if(isset($_SESSION['otv']))
            echo '<div class="otvet">Баллов набрано: '.$_SESSION['otv'].'/27</div>';
        unset($_SESSION['otv']);

        ?>

        </div>


        <div class="box_btn">
            <button name="kurs" class="kurs" onclick="location.href='\\курсики\\index.php'"> Список уроков</button>
            <button name="next" class="next" onclick="location.href='\\..\\глава3\\глава3_чтение_падчим\\index.php'"> Далее</button>
            <button name="back" class="back" onclick="location.href='\\..\\глава1\\глава1_дифтонги_и_согласные\\index.php'"> Назад</button>



        </div>


	</section>

</body>


<script src="js/second.js"></script>

<script>
    let first=document.getElementById("1_1");
    let second=document.getElementById("1_2");
    let third=document.getElementById("1_3");
    let otv1=document.getElementById('1');
    let otv2=document.getElementById('2');
    let otv3=document.getElementById('3');
    let otv4=document.getElementById('4');
    let otv5=document.getElementById('5');
    let otv6=document.getElementById('6');

    first.onclick=f_v;
    second.onclick=s_v;
    third.onclick=t_v;

    function f_v(){
        otv1.value="0";
        first.style.color="#e74c3c";
        second.style.color="black";
        third.style.color="black";
    }
    function s_v(){
        otv1.value="1";
        first.style.color="black";
        second.style.color="#e74c3c";
        third.style.color="black";
    }
    function t_v(){
        otv1.value="0";
        first.style.color="black";
        second.style.color="black";
        third.style.color="#e74c3c";
    }

</script>
<script>
    let first_2=document.getElementById("2_1");
    let second_2=document.getElementById("2_2");
    let third_2=document.getElementById("2_3");

    first_2.onclick=f_v;
    second_2.onclick=s_v;
    third_2.onclick=t_v;

    function f_v(){
        otv2.value="0";
        first_2.style.color="#e74c3c";
        second_2.style.color="black";
        third_2.style.color="black";
    }
    function s_v(){
        otv2.value="1";
        first_2.style.color="black";
        second_2.style.color="#e74c3c";
        third_2.style.color="black";
    }
    function t_v(){
        otv2.value="0";
        first_2.style.color="black";
        second_2.style.color="black";
        third_2.style.color="#e74c3c";
    }

</script>
<script>
    let first3=document.getElementById("3_1");
    let second3=document.getElementById("3_2");
    let third3=document.getElementById("3_3");

    first3.onclick=f_v;
    second3.onclick=s_v;
    third3.onclick=t_v;

    function f_v(){
        otv3.value="0";
        first3.style.color="#e74c3c";
        second3.style.color="black";
        third3.style.color="black";
    }
    function s_v(){
        otv3.value="0";
        first3.style.color="black";
        second3.style.color="#e74c3c";
        third3.style.color="black";
    }
    function t_v(){
        otv3.value="1";
        first3.style.color="black";
        second3.style.color="black";
        third3.style.color="#e74c3c";
    }

</script>
<script>
    let first4=document.getElementById("4_1");
    let second4=document.getElementById("4_2");
    let third4=document.getElementById("4_3");

    first4.onclick=f_v;
    second4.onclick=s_v;
    third4.onclick=t_v;

    function f_v(){
        otv4.value="0";
        first4.style.color="#e74c3c";
        second4.style.color="black";
        third4.style.color="black";
    }
    function s_v(){
        otv4.value="1";
        first4.style.color="black";
        second4.style.color="#e74c3c";
        third4.style.color="black";
    }
    function t_v(){
        otv4.value="0";
        first4.style.color="black";
        second4.style.color="black";
        third4.style.color="#e74c3c";
    }

</script>
<script>
    let first5=document.getElementById("5_1");
    let second5=document.getElementById("5_2");
    let third5=document.getElementById("5_3");

    first5.onclick=f_v;
    second5.onclick=s_v;
    third5.onclick=t_v;

    function f_v(){
        otv5.value="0";
        first5.style.color="#e74c3c";
        second5.style.color="black";
        third5.style.color="black";
    }
    function s_v(){
        otv5.value="0";
        first5.style.color="black";
        second5.style.color="#e74c3c";
        third5.style.color="black";
    }
    function t_v(){
        otv5.value="1";
        first5.style.color="black";
        second5.style.color="black";
        third5.style.color="#e74c3c";
    }

</script>

<script>
    let first6=document.getElementById("6_1");
    let second6=document.getElementById("6_2");
    let third6=document.getElementById("6_3");

    first6.onclick=f_v;
    second6.onclick=s_v;
    third6.onclick=t_v;

    function f_v(){
        otv6.value="0";
        first6.style.color="#e74c3c";
        second6.style.color="black";
        third6.style.color="black";
    }
    function s_v(){
        otv6.value="1";
        first6.style.color="black";
        second6.style.color="#e74c3c";
        third6.style.color="black";
    }
    function t_v(){
        otv6.value="0";
        first6.style.color="black";
        second6.style.color="black";
        third6.style.color="#e74c3c";
    }

</script>


</html>