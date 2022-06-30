<?php

session_start();
$connection=mysqli_connect("localhost","admin","","alina_diplom");
$a=$_SESSION['user']['id'];

mysqli_query($connection, "UPDATE first_kurs set sub_3=10 where id='$a'");



header("location: ..\\глава1_согласные_видео\\index.php");