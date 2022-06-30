<?php

session_start();
$connection=mysqli_connect("localhost","admin","","alina_diplom");
$a=$_SESSION['user']['id'];

mysqli_query($connection, "UPDATE first_kurs set sub_1=10 where id='$a'");



header("location: ..\\глава1_гласные_задание\\index.php");

