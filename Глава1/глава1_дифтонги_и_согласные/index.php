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

        <div class="name">Дифтонги и Согласные. Задание</div>





        <div class="video">
            <div class="audio"><img src="img/а.png" width="35" height="35" onclick="play()">
                <audio id="a1"></audio>
                <script>
                    function play(){
                        let file='1.mp3';
                        let audio=document.getElementById("a1");
                        audio.src=file;
                        audio.play();
                    }

                </script></div>
            <div class="zad_1">1. Прослушайте и выберите верное написание слога</div>

            <div class="zad_1_box">

            <div class="zad_1_1_0">1)</div>
            <div class="zad_1_1_1" id="1_1">왜</div>
            <div class="zad_1_1_2_c" id="1_2">위</div>
            <div class="zad_1_1_3_c" id="1_3">애</div>

            </div>

            <div class="zad_1_box">

                <div class="zad_1_1_0">2)</div>
                <div class="zad_1_1_1" id="2_1">쥐</div>
                <div class="zad_1_1_2_c" id="2_2">죄</div>
                <div class="zad_1_1_3_c" id="2_3">줘</div>

            </div>
            <div class="zad_1_box">

                <div class="zad_1_1_0">3)</div>
                <div class="zad_1_1_1" id="3_1">아기</div>
                <div class="zad_1_1_2" id="3_2">얘기</div>
                <div class="zad_1_1_3" id="3_3">애기</div>

            </div>
            <div class="zad_1_box">

                <div class="zad_1_1_0">4)</div>
                <div class="zad_1_1_1" id="4_1">가자</div>
                <div class="zad_1_1_2" id="4_2">과자</div>
                <div class="zad_1_1_3" id="4_3">개자</div>

            </div>
            <div class="zad_1_box">

                <div class="zad_1_1_0">5)</div>
                <div class="zad_1_1_1" id="5_1">서다</div>
                <div class="zad_1_1_2" id="5_2">쉬다</div>
                <div class="zad_1_1_3" id="5_3">세다</div>

            </div>

            <div class="zad_1_box">

                <div class="zad_1_1_0">6)</div>
                <div class="zad_1_1_1" id="6_1">세계</div>
                <div class="zad_1_1_2" id="6_2">시계</div>
                <div class="zad_1_1_3" id="6_3">서계</div>

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
                <div class="zad_1_2_2">사</div>

                <div class="zad_1_2_0">2)</div>
                <div class="zad_1_2_1">가</div>
                <div class="zad_1_2_2" id="zone_2"></div>
            </div>

            <div class="zad_2_box">
                <div class="zad_1_2_0">3)</div>
                <div class="zad_1_2_1" id="zone_3"></div>
                <div class="zad_1_2_2" >사</div>

                <div class="zad_1_2_0 ">4)</div>
                <div class="zad_1_2_1" id="zone_4"></div>
                <div class="zad_1_2_2">자</div>
            </div>

            <div class="zad_2_box">
                <div class="zad_1_2_0">5)</div>
                <div class="zad_1_2_1" id="zone_5"></div>
                <div class="zad_1_2_2" >지</div>

                <div class="zad_1_2_0 ">6)</div>
                <div class="zad_1_2_1" >가</div>
                <div class="zad_1_2_2" id="zone_6"></div>
            </div>



            <div class="zad_3_box">
                <div id="block_1" draggable="true" class="zad_1_2_2_o">회</div>
                <div id="block_2" draggable="true" class="zad_1_2_2_o">돼</div>
                <div id="block_3" draggable="true" class="zad_1_2_2_o">의</div>
                <div id="block_4" draggable="true" class="zad_1_2_2_o">위</div>
                <div id="block_5" draggable="true" class="zad_1_2_2_o">의</div>
                <div id="block_6" draggable="true" class="zad_1_2_2_o">게</div>
            </div>



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
            <div class="zad_2">3. Прослушайте и выберите верное написание слога</div>


            <div class="zad_1_box">

                <div class="zad_1_1_0">1)</div>
                <div class="zad_1_1_1" id="7_1">공</div>
                <div class="zad_1_1_2" id="7_2">곰</div>
                <div class="zad_1_1_3" id="7_3">곡</div>

            </div>

            <div class="zad_1_box">

                <div class="zad_1_1_0">2)</div>
                <div class="zad_1_1_1" id="8_1">밥</div>
                <div class="zad_1_1_2" id="8_2">밤</div>
                <div class="zad_1_1_3" id="8_3">밖</div>

            </div>
            <div class="zad_1_box">

                <div class="zad_1_1_0">3)</div>
                <div class="zad_1_1_1" id="9_1">낮</div>
                <div class="zad_1_1_2" id="9_2">난</div>
                <div class="zad_1_1_3" id="9_3">날</div>

            </div>
            <div class="zad_1_box">

                <div class="zad_1_1_0">4)</div>
                <div class="zad_1_1_1" id="10_1">삭</div>
                <div class="zad_1_1_2" id="10_2">산</div>
                <div class="zad_1_1_3" id="10_3">살</div>

            </div>
            <div class="zad_1_box">

                <div class="zad_1_1_0">5)</div>
                <div class="zad_1_1_1" id="11_1">앞</div>
                <div class="zad_1_1_2" id="11_2">안</div>
                <div class="zad_1_1_3" id="11_3">악</div>

            </div>

            <div class="zad_1_box">

                <div class="zad_1_1_0">6)</div>
                <div class="zad_1_1_1" id="12_1">곧</div>
                <div class="zad_1_1_2" id="12_2">공</div>
                <div class="zad_1_1_3" id="12_3">곱</div>

            </div>

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
            <div class="zad_2">4. Прослушайте и дополните слова</div>

            <div class="zad_2_box">
                <div class="zad_1_2_0">1)</div>

                <div class="zad_1_2_2_1" id="zone_7"></div>

                <div class="zad_1_2_0">2)</div>

                <div class="zad_1_2_2_2" id="zone_8"></div>
            </div>

            <div class="zad_2_box">
                <div class="zad_1_2_0">3)</div>

                <div class="zad_1_2_2_1" id="zone_9"></div>

                <div class="zad_1_2_0 ">4)</div>

                <div class="zad_1_2_2_2" id="zone_10"></div>
            </div>

            <div class="zad_2_box">
                <div class="zad_1_2_0">5)</div>

                <div class="zad_1_2_2_1" id="zone_11"></div>

                <div class="zad_1_2_0 ">6)</div>
                <div class="zad_1_2_1" >부</div>
                <div class="zad_1_2_2" id="zone_12"></div>

            </div>



            <div class="zad_3_box">
                <div id="block_7" draggable="true" class="zad_1_2_2_o">엌</div>
                <div id="block_8" draggable="true" class="zad_1_2_2_o">손</div>
                <div id="block_9" draggable="true" class="zad_1_2_2_o">잎</div>
                <div id="block_10" draggable="true" class="zad_1_2_2_o">밤</div>
                <div id="block_11" draggable="true" class="zad_1_2_2_o">눈</div>
                <div id="block_12" draggable="true" class="zad_1_2_2_o">팔</div>
            </div>

            <form action="js/otvet.php" method="post">
                <input id="1" name="1"  type="hidden">
                <input id="2" name="2" type="hidden" >
                <input id="3" name="3"  type="hidden">
                <input id="4" name="4"  type="hidden">
                <input id="5" name="5"  type="hidden">
                <input id="6" name="6"  type="hidden">
                <input id="7" name="7"  type="hidden">
                <input id="8" name="8"  type="hidden">
                <input id="9" name="9"  type="hidden">
                <input id="10" name="10"  type="hidden">
                <input id="11" name="11"  type="hidden">
                <input id="12" name="12"  type="hidden">
                <input id="13" name="13" type="hidden">
                <input id="14" name="14" type="hidden">
                <input id="15" name="15" type="hidden">
                <input id="16" name="16" type="hidden">
                <input id="17" name="17" type="hidden">
                <input id="18" name="18" type="hidden">
                <input id="19" name="19" type="hidden">
                <input id="20" name="20" type="hidden">
                <input id="21" name="21" type="hidden">
                <input id="22" name="22" type="hidden">
                <input id="23" name="23" type="hidden">
                <input id="24" name="24" type="hidden">

                <button name="zaver" class="zav">Завершить</button>
            </form>


        <button name="reload" class="zav" onclick="location.href=''">Заново</button>
            <?php
            if(isset($_SESSION['otv']))
                echo '<div class="otvet">Баллов набрано: '.$_SESSION['otv'].'/24</div>';
            unset($_SESSION['otv']);

            ?>

        </div>

        <div class="box_btn">
            <button name="kurs" class="kurs" onclick="location.href='\\курсики\\index.php'"> Список уроков</button>
            <button name="next" class="next" onclick="location.href='\\глава1\\глава1_итоговый\\index.php'"> Далее</button>
            <button name="back" class="back" onclick="location.href='\\глава1\\глава1_согласные_видео\\index.php'"> Назад</button>



        </div>


	</section>

</body>

<script src="js/drag_drop.js"></script>
<script src="js/second.js"></script>

<script>
    let first=document.getElementById("1_1");
    let second=document.getElementById("1_2");
    let third=document.getElementById("1_3");

    first.onclick=f_v;
    second.onclick=s_v;
    third.onclick=t_v;

    function f_v(){
        let otv1=document.getElementById('1');
        otv1.value="0";
        first.style.color="#e74c3c";
        second.style.color="black";
        third.style.color="black";
    }
    function s_v(){
        let otv1=document.getElementById('1');
        otv1.value="0";
        first.style.color="black";
        second.style.color="#e74c3c";
        third.style.color="black";
    }
    function t_v(){
        let otv1=document.getElementById('1');
        otv1.value="1";
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
        let otv2=document.getElementById('2');
        otv2.value="1";
        first_2.style.color="#e74c3c";
        second_2.style.color="black";
        third_2.style.color="black";
    }
    function s_v(){
        let otv2=document.getElementById('2');
        otv2.value="0";
        first_2.style.color="black";
        second_2.style.color="#e74c3c";
        third_2.style.color="black";
    }
    function t_v(){
        let otv2=document.getElementById('2');
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
        let otv3=document.getElementById('3');
        otv3.value="0";
        first3.style.color="#e74c3c";
        second3.style.color="black";
        third3.style.color="black";
    }
    function s_v(){
        let otv3=document.getElementById('3');
        otv3.value="1";
        first3.style.color="black";
        second3.style.color="#e74c3c";
        third3.style.color="black";
    }
    function t_v(){
        let otv3=document.getElementById('3');
        otv3.value="0";
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
        let otv4=document.getElementById('4');
        otv4.value="0";
        first4.style.color="#e74c3c";
        second4.style.color="black";
        third4.style.color="black";
    }
    function s_v(){
        let otv4=document.getElementById('4');
        otv4.value="1";
        first4.style.color="black";
        second4.style.color="#e74c3c";
        third4.style.color="black";
    }
    function t_v(){
        let otv4=document.getElementById('4');
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
        let otv5=document.getElementById('5');
        otv5.value="0";
        first5.style.color="#e74c3c";
        second5.style.color="black";
        third5.style.color="black";
    }
    function s_v(){
        let otv5=document.getElementById('5');
        otv5.value="0";
        first5.style.color="black";
        second5.style.color="#e74c3c";
        third5.style.color="black";
    }
    function t_v(){
        let otv5=document.getElementById('5');
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
        let otv6=document.getElementById('6');
        otv6.value="0";
        first6.style.color="#e74c3c";
        second6.style.color="black";
        third6.style.color="black";
    }
    function s_v(){
        let otv6=document.getElementById('6');
        otv6.value="1";
        first6.style.color="black";
        second6.style.color="#e74c3c";
        third6.style.color="black";
    }
    function t_v(){
        let otv6=document.getElementById('6');
        otv6.value="0";
        first6.style.color="black";
        second6.style.color="black";
        third6.style.color="#e74c3c";
    }

</script>
<script>
    let first7=document.getElementById("7_1");
    let second7=document.getElementById("7_2");
    let third7=document.getElementById("7_3");

    first7.onclick=f_v;
    second7.onclick=s_v;
    third7.onclick=t_v;

    function f_v(){
        let otv7=document.getElementById('7');
        otv7.value="0";
        first7.style.color="#e74c3c";
        second7.style.color="black";
        third7.style.color="black";
    }
    function s_v(){
        let otv7=document.getElementById('7');
        otv7.value="0";
        first7.style.color="black";
        second7.style.color="#e74c3c";
        third7.style.color="black";
    }
    function t_v(){
        let otv7=document.getElementById('7');
        otv7.value="1";
        first7.style.color="black";
        second7.style.color="black";
        third7.style.color="#e74c3c";
    }

</script>
<script>
    let first_8=document.getElementById("8_1");
    let second_8=document.getElementById("8_2");
    let third_8=document.getElementById("8_3");

    first_8.onclick=f_v;
    second_8.onclick=s_v;
    third_8.onclick=t_v;

    function f_v(){
        let otv8=document.getElementById('8');
        otv8.value="0";
        first_8.style.color="#e74c3c";
        second_8.style.color="black";
        third_8.style.color="black";
    }
    function s_v(){
        let otv8=document.getElementById('8');
        otv8.value="1";
        first_8.style.color="black";
        second_8.style.color="#e74c3c";
        third_8.style.color="black";
    }
    function t_v(){
        let otv8=document.getElementById('8');
        otv8.value="0";
        first_8.style.color="black";
        second_8.style.color="black";
        third_8.style.color="#e74c3c";
    }

</script>
<script>
    let first9=document.getElementById("9_1");
    let second9=document.getElementById("9_2");
    let third9=document.getElementById("9_3");

    first9.onclick=f_v;
    second9.onclick=s_v;
    third9.onclick=t_v;

    function f_v(){
        let otv9=document.getElementById('9');
        otv9.value="0";
        first9.style.color="#e74c3c";
        second9.style.color="black";
        third9.style.color="black";
    }
    function s_v(){
        let otv9=document.getElementById('9');
        otv9.value="0";
        first9.style.color="black";
        second9.style.color="#e74c3c";
        third9.style.color="black";
    }
    function t_v(){
        let otv9=document.getElementById('9');
        otv9.value="1";
        first9.style.color="black";
        second9.style.color="black";
        third9.style.color="#e74c3c";
    }

</script>
<script>
    let first10=document.getElementById("10_1");
    let second10=document.getElementById("10_2");
    let third10=document.getElementById("10_3");

    first10.onclick=f_v;
    second10.onclick=s_v;
    third10.onclick=t_v;

    function f_v(){
        let otv10=document.getElementById('10');
        otv10.value="1";
        first10.style.color="#e74c3c";
        second10.style.color="black";
        third10.style.color="black";
    }
    function s_v(){
        let otv10=document.getElementById('10');
        otv10.value="0";
        first10.style.color="black";
        second10.style.color="#e74c3c";
        third10.style.color="black";
    }
    function t_v(){
        let otv10=document.getElementById('10');
        otv10.value="0";
        first10.style.color="black";
        second10.style.color="black";
        third10.style.color="#e74c3c";
    }

</script>
<script>
    let first11=document.getElementById("11_1");
    let second11=document.getElementById("11_2");
    let third11=document.getElementById("11_3");

    first11.onclick=f_v;
    second11.onclick=s_v;
    third11.onclick=t_v;

    function f_v(){
        let otv11=document.getElementById('11');
        otv11.value="1";
        first11.style.color="#e74c3c";
        second11.style.color="black";
        third11.style.color="black";
    }
    function s_v(){
        let otv11=document.getElementById('11');
        otv11.value="0";
        first11.style.color="black";
        second11.style.color="#e74c3c";
        third11.style.color="black";
    }
    function t_v(){
        let otv11=document.getElementById('11');
        otv11.value="0";
        first11.style.color="black";
        second11.style.color="black";
        third11.style.color="#e74c3c";
    }

</script>

<script>
    let first12=document.getElementById("12_1");
    let second12=document.getElementById("12_2");
    let third12=document.getElementById("12_3");

    first12.onclick=f_v;
    second12.onclick=s_v;
    third12.onclick=t_v;

    function f_v(){
        let otv12=document.getElementById('12');
        otv12.value="0";
        first12.style.color="#e74c3c";
        second12.style.color="black";
        third12.style.color="black";
    }
    function s_v(){
        let otv12=document.getElementById('12');
        otv12.value="1";
        first12.style.color="black";
        second12.style.color="#e74c3c";
        third12.style.color="black";
    }
    function t_v(){
        let otv12=document.getElementById('12');
        otv12.value="0";
        first12.style.color="black";
        second12.style.color="black";
        third12.style.color="#e74c3c";
    }

</script>


</html>