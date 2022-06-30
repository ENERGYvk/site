<?php

session_start();
$connection=mysqli_connect("localhost","admin","","alina_diplom");
$a=$_SESSION['user']['id'];

mysqli_query($connection, "UPDATE first_kurs set sub_12=10 where id='$a'");



header("location: ..\\глава2_грамматика_задание\\index.php");