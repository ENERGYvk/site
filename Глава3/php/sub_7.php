<?php

session_start();
$connection=mysqli_connect("localhost","admin","","alina_diplom");
$a=$_SESSION['user']['id'];

mysqli_query($connection, "UPDATE first_kurs set sub_7=50 where id='$a'");



header("location: ..\\глава3_чтение_двойной_падчим\\index.php");