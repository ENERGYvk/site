<?php
session_start();
if(!isset($_SESSION['user']))
{

    header("Location: \вход\Login.php");

}
else
{

    $connection=mysqli_connect("localhost","admin","","alina_diplom");
    $a=$_SESSION['user']['id'];

    $update = mysqli_query($connection, "SELECT `sub_1`,`sub_2`,`sub_3`,`sub_4`,`sub_5`,`sub_6` FROM `first_kurs` WHERE id ='$a'");
    $n=mysqli_fetch_assoc($update);
    $sum=$n['sub_1']+$n['sub_2']+$n['sub_3']+$n['sub_4']+$n['sub_5']+$n['sub_6'];
    mysqli_query($connection, "UPDATE progress set firs_pro='$sum' where id='$a'");


    $update_2= mysqli_query($connection, "SELECT `sub_7`,`sub_8` FROM `first_kurs` WHERE id ='$a'");
    $n2=mysqli_fetch_assoc($update_2);
    $sum2=$n2['sub_7']+$n2['sub_8'];
    mysqli_query($connection, "UPDATE progress set second_pro='$sum2' where id='$a'");


    $update_3= mysqli_query($connection, "SELECT `sub_9`,`sub_10`,`sub_11`,`sub_12`,`sub_13`,`sub_14`,`sub_15`,`sub_16` FROM `first_kurs` WHERE id ='$a'");
    $n=mysqli_fetch_assoc($update_3);
    $sum2=$n['sub_9']+$n['sub_10']+$n['sub_11']+$n['sub_12']+$n['sub_13']+$n['sub_14']+$n['sub_15']+$n['sub_16'];
    mysqli_query($connection, "UPDATE progress set third_pro='$sum2' where id='$a'");


    $user_progress_first = mysqli_query($connection, "SELECT * from first_kurs where id='$a'");
    $user_progress=mysqli_fetch_assoc($user_progress_first);

    $progress = mysqli_query($connection, "SELECT * from progress where id='$a'");
    $bar=mysqli_fetch_assoc($progress);




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

<div class="curs_1">

	<div class="text_crurs_1">Курс 1</div>
	<div class="box_table">


		<div class="tag" id="tag_1">
			<div class="tag_1_id">1</div>
			<div class="tag_1_name">Алфавит</div>
			<div class="tag_1_logo">
				<div class="progress_bar1">
					<div class="value_cont1"><?php echo $bar['firs_pro']; ?></div>
				</div>

			</div>
		</div>
		<div class="info_tag_1" onclick="location.href='\\глава1\\глава1_гласные\\index.php'" id="1">
			<div class="info_tag_1_id">01</div>
			<div class="info_tag_1_name">Гласные</div>
			<div class="info_tag_1_logo"><?php if($user_progress['sub_1']==10) echo '&#10004'; else echo '&#10006';?></div>
		</div>
		<div class="info_tag_1" id="2" onclick="location.href='\\глава1\\глава1_гласные_задание\\index.php'">
			<div class="info_tag_1_id">02</div>
			<div class="info_tag_1_name">Гласные задание</div>
			<div class="info_tag_1_logo"><?php if($user_progress['sub_2']>=13) echo '&#10004'; else echo '&#10006';?></div>
		</div>
        <div class="info_tag_1"  id="3" onclick="location.href='\\глава1\\глава1_дифтонги_видео\\index.php'">
            <div class="info_tag_1_id">03</div>
            <div class="info_tag_1_name">Дифтонги</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_3']==10) echo '&#10004'; else echo '&#10006';?></div>
        </div>
        <div class="info_tag_1" id="4" onclick="location.href='\\глава1\\глава1_согласные_видео\\index.php'">
            <div class="info_tag_1_id">04</div>
            <div class="info_tag_1_name">Согласные</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_4']==10) echo '&#10004'; else echo '&#10006';?></div>
        </div>
        <div class="info_tag_1" id="5" onclick="location.href='\\глава1\\глава1_дифтонги_и_согласные\\index.php'">
            <div class="info_tag_1_id">05</div>
            <div class="info_tag_1_name">Дифтонги и Согласные</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_5']>=13) echo '&#10004'; else echo '&#10006';?></div>
        </div>
        <div class="info_tag_1" id="6" onclick="location.href='\\глава1\\глава1_итоговый\\index.php'">
            <div class="info_tag_1_id">06</div>
            <div class="info_tag_1_name">Итоговые задания</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_6']>=23) echo '&#10004'; else echo '&#10006';?></div>
        </div>


		<div class="tag" id="tag_2" >
			<div class="tag_1_id">2</div>
			<div class="tag_1_name">Правила чтения</div>
			<div class="tag_1_logo">
				<div class="progress_bar2">
					<div class="value_cont2"><?php echo $bar['second_pro']; ?></div>
				</div>
			</div>
		</div>
        <div class="info_tag_1" id="7" onclick="location.href='\\глава3\\глава3_чтение_падчим\\index.php'">
            <div class="info_tag_1_id">01</div>
            <div class="info_tag_1_name">Падчим</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_7']==50) echo '&#10004'; else echo '&#10006';?></div>
        </div>
        <div class="info_tag_1" id="8" onclick="location.href='\\глава3\\глава3_чтение_двойной_падчим\\index.php'">
            <div class="info_tag_1_id">02</div>
            <div class="info_tag_1_name">Двойной падчим</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_8']==50) echo '&#10004'; else echo '&#10006';?></div>
        </div>

        <div class="tag" id="tag_3">
            <div class="tag_1_id">3</div>
            <div class="tag_1_name">Грамматика</div>
            <div class="tag_1_logo">
                <div class="progress_bar3">
                    <div class="value_cont3"><?php echo $bar['third_pro']; ?></div>
                </div>
            </div>
        </div>
        <div class="info_tag_1" id="9" onclick="location.href='\\глава2\\глава2_первая_лексика\\index.php'">
            <div class="info_tag_1_id">01</div>
            <div class="info_tag_1_name">Первая лексика</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_9']==10) echo '&#10004'; else echo '&#10006';?></div>
        </div>
        <div class="info_tag_1" id="10" onclick="location.href='\\глава2\\глава2_лексика\\index.php'">
            <div class="info_tag_1_id">02</div>
            <div class="info_tag_1_name">Лексика - задание</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_10']>=7) echo '&#10004'; else echo '&#10006';?></div>
        </div>
        <div class="info_tag_1" id="11" onclick="location.href='\\глава2\\глава2_первая_грамматика\\index.php'">
            <div class="info_tag_1_id">03</div>
            <div class="info_tag_1_name">입니다/습니다</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_11']==10) echo '&#10004'; else echo '&#10006';?></div>
        </div>
        <div class="info_tag_1" id="12" onclick="location.href='\\глава2\\глава2_вторая_грамматика\\index.php'">
            <div class="info_tag_1_id">04</div>
            <div class="info_tag_1_name">입니까</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_12']==10) echo '&#10004'; else echo '&#10006';?></div>
        </div>
        <div class="info_tag_1" id="13" onclick="location.href='\\глава2\\глава2_грамматика_задание\\index.php'">
            <div class="info_tag_1_id">05</div>
            <div class="info_tag_1_name">Грамматика - задание</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_13']>=7) echo '&#10004'; else echo '&#10006';?></div>
        </div>
        <div class="info_tag_1" id="14" onclick="location.href='\\глава2\\глава2_что_такое\\index.php'">
            <div class="info_tag_1_id">06</div>
            <div class="info_tag_1_name">Что такое 입니다</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_14']==10) echo '&#10004'; else echo '&#10006';?></div>
        </div>
        <div class="info_tag_1" id="15" onclick="location.href='\\глава2\\глава2_выражение\\index.php'">
            <div class="info_tag_1_id">07</div>
            <div class="info_tag_1_name">Выражения</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_15']==10) echo '&#10004'; else echo '&#10006';?></div>
        </div>
        <div class="info_tag_1" id="16" onclick="location.href='\\глава2\\глава2_грамматика_итоговый\\index.php'">
            <div class="info_tag_1_id">08</div>
            <div class="info_tag_1_name">Итоговые задания</div>
            <div class="info_tag_1_logo"><?php if($user_progress['sub_16']>=23) echo '&#10004'; else echo '&#10006';?></div>
        </div>


	</div>
</div>

<div class="curs_2">

	<div class="text_crurs_2">Курс 2</div>
	<div class="box_table2">

        <img style="width: 170px; height: 150px; margin-top: 20px " src="img\\block.png">
        <a style="margin-top: -300px ;font-family: 'Roboto', sans-serif;	font-weight: normal;" >В разработке</a>

	</div>

</div>

	</section>

</body>
<script src="css/script.js"></script>
<script src="js/curs1_progress_1.js"></script>
<script src="js/curs1_progress_2.js"></script>
<script src="js/curs1_progress_3.js"></script>
<script src="js/curs1_info1.js"></script>
<script src="js/curs1_info2.js"></script>
<script src="js/curs1_info3.js"></script>
</html>