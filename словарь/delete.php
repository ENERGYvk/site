<?php
session_start();

$word=$_POST['rus_word'];
$id=$_SESSION['user']['id'];


$connection=mysqli_connect("localhost","admin","","alina_diplom");

mysqli_query($connection, "DELETE FROM `slovar` WHERE id='$id' and second_word='$word'");

$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");





















?>

