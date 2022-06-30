<?php

session_start();
$o1=$_POST['1'];
$o2=$_POST['2'];
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
$o13=$_POST['13'];
$o14=$_POST['14'];
$o15=$_POST['15'];
$o16=$_POST['16'];
$o17=$_POST['17'];
$o18=$_POST['18'];
$o19=$_POST['19'];
$o20=$_POST['20'];
$o21=$_POST['21'];
$o22=$_POST['22'];
$o23=$_POST['23'];
$o24=$_POST['24'];
$o25=$_POST['25'];
$o26=$_POST['26'];
$o27=$_POST['27'];


$count=0;


if($o1=="1")
{
    $count+=1;
}
if($o2=="1")
{
    $count+=1;
}
if($o3=="1")
{
    $count+=1;
}
if($o4=="1")
{
    $count+=1;
}
if($o5=="1")
{
    $count+=1;
}
if($o6=="1")
{
    $count+=1;
}
if($o7=="쓰")
{
    $count+=1;
}
if($o8=="코")
{
    $count+=1;
}
if($o9=="끼")
{
    $count+=1;
}
if($o10=="빠")
{
    $count+=1;
}
if($o11=="꼬")
{
    $count+=1;
}
if($o12=="찌")
{
    $count+=1;
}
if($o13=="끼")
{
    $count+=1;
}


if($o14=="밖")
{
    $count+=1;
}
if($o15=="꽃")
{
    $count+=1;
}
if($o16=="밥")
{
    $count+=1;
}
if($o17=="술")
{
    $count+=1;
}
if($o18=="총")
{
    $count+=1;
}
if($o19=="눈")
{
    $count+=1;
}
if($o20=="곰")
{
    $count+=1;
}
if($o21=="1")
{
    $count+=1;
}
if($o22=="2")
{
    $count+=1;
}
if($o23=="4")
{
    $count+=1;
}
if($o24=="6")
{
    $count+=1;
}
if($o25=="3")
{
    $count+=1;
}
if($o26=="7")
{
    $count+=1;
}
if($o27=="5")
{
    $count+=1;
}



$connection=mysqli_connect("localhost","admin","","alina_diplom");
$a=$_SESSION['user']['id'];
$proc=(30/100*$count*(100/27));
$check_user = mysqli_query($connection, "UPDATE `first_kurs` SET `sub_6`='$proc' WHERE id='$a'");

$_SESSION['otv']=$count;

$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");