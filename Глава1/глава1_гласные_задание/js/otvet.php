<?php
session_start();
$o1=$_POST['otv_1'];
$o2=$_POST['otv_2'];
$o3=$_POST['otv_3'];
$o4=$_POST['otv_4'];
$o5=$_POST['otv_5'];
$o6=$_POST['otv_6'];
$o7=$_POST['otv_7'];
$o8=$_POST['otv_8'];
$o9=$_POST['otv_9'];
$count=0;

if ($o1=="오아")
{
    $count+=1;
}

if ($o2=="으유")
{
    $count+=1;
}

if ($o3=="여유")
{
    $count+=1;
}

if ($o4=="오요")
{
    $count+=1;
}

if ($o5=="이아")
{
    $count+=1;
}

if ($o6=="유")
{
    $count+=1;
}

if ($o7=="우")
{
    $count+=1;
}

if ($o8=="아")
{
    $count+=1;
}

if ($o9=="오")
{
    $count+=1;
}



$connection=mysqli_connect("localhost","admin","","alina_diplom");
$a=$_SESSION['user']['id'];
$proc=(20/100*$count*(100/9));
$check_user = mysqli_query($connection, "UPDATE `first_kurs` SET `sub_2`='$proc' WHERE id='$a'");



$_SESSION['otv']=$count;



$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");
