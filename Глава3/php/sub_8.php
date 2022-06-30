<?php

session_start();
$connection=mysqli_connect("localhost","admin","","alina_diplom");
$a=$_SESSION['user']['id'];

mysqli_query($connection, "UPDATE first_kurs set sub_8=50 where id='$a'");



header("location: \\глава2\\глава2_первая_лексика\\index.php");