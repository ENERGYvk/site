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
    $user_slovar = mysqli_query($connection, "SELECT * from slovar where id='$a'");



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
        <div class="slovar">Словарь</div>

        <form action="insert.php" method="post">
        <div class="user_word_box">
            <input class="input" placeholder="Добавить слово" name="1">
            <div class="section_two"></div>
            <input class="input2" placeholder="Добавить перевод" name="2">

            <button class="section_four222"  type="submit">&#10004;</button>

        </div>
        </form>
        <?php
        $rowsCount = mysqli_num_rows($user_slovar);
        if($rowsCount!=0){
            foreach($user_slovar as $row) {
                echo '<form action="delete.php" method="post"><div class="user_word_box"><div class="section_one">' . $row["first_word"] . '</div>
                <div class="section_two"></div><div class="section_three" >' . $row["second_word"] . '</div>
                <button class="section_four"  type="submit">&#10006;</button></div>
                <input type="hidden"  name="rus_word" value=' . $row["second_word"] . '>
                </form>';
            }
        }
        else
            {
                echo '<div class="pusto"> В словаре отсутсвуют слова...&#9785;</div>';
            }



    ?>





	</section>

</body>

</html>