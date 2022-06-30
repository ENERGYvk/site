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

$count=0;


if($o1=="일본")
{
    $count+=1;
}
if($o2=="한국")
{
    $count+=1;
}
if($o3=="러시아")
{
    $count+=1;
}
if($o4=="미국")
{
    $count+=1;
}


if($o5=="중국 사람")
{
    $count+=1;
}

if($o6=="프랑스 사람")
{
    $count+=1;
}

if($o7=="호주 사람")
{
    $count+=1;
}

if($o8=="러시아 사람")
{
    $count+=1;
}



if($o9=="과")
{
    $count+=1;
}
if($o10=="사")
{
    $count+=1;
}
if($o11=="교")
{
    $count+=1;
}
if($o12=="사")
{
    $count+=1;
}
if($o13=="가")
{
    $count+=1;
}
if($o14=="이")
{
    $count+=1;
}
if($o15=="터")
{
    $count+=1;
}

$connection=mysqli_connect("localhost","admin","","alina_diplom");
$a=$_SESSION['user']['id'];
$check_user = mysqli_query($connection, "UPDATE `first_kurs` SET `sub_10`='$count' WHERE id='$a'");



$_SESSION['otv']=$count;

$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");