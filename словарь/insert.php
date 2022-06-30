<?php
session_start();

$word_kor=$_POST['1'];
$word_rus=$_POST['2'];
$id=$_SESSION['user']['id'];


$connection=mysqli_connect("localhost","admin","","alina_diplom");

mysqli_query($connection, "INSERT INTO `slovar` (`id`, `first_word`, `second_word`) VALUES ('$id', '$word_kor', '$word_rus')");

$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");