<?php
session_start();

$o3=$_POST['3'];
$o4=$_POST['4'];
$o5=$_POST['5'];
$o6=$_POST['6'];
$o7=$_POST['7'];
$o8=$_POST['8'];
$o9=$_POST['9'];
$o10=$_POST['10'];
$o11=$_POST['11'];
$o12=$_POST['12'];


$count=0;

if($o3=="선생님입니까?")
{
    $count+=1;
}
if($o4=="선생님입니다")
{
    $count+=1;
}

if($o5=="의자입니까?")
{
    $count+=1;
}
if($o6=="의자입니다")
{
    $count+=1;
}



if($o7=="전화입니까?")
{
    $count+=1;
}
if($o8=="전화입니다")
{
    $count+=1;
}

if($o9=="연필입니까?")
{
    $count+=1;
}
if($o10=="연필입니다")
{
    $count+=1;
}

if($o11=="가방입니까?")
{
    $count+=1;
}
if($o12=="가방입니다")
{
    $count+=1;
}




$connection=mysqli_connect("localhost","admin","","alina_diplom");
$a=$_SESSION['user']['id'];


$proc=(10/100*$count*(100/10));
$check_user = mysqli_query($connection, "UPDATE `first_kurs` SET `sub_13`='$proc' WHERE id='$a'");

$_SESSION['otv']=$count;

$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");