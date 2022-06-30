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

$count=0;

if($o1=="공책")
{
    $count+=1;
}
if($o2=="의자")
{
    $count+=1;
}
if($o3=="전화")
{
    $count+=1;
}
if($o4=="연필")
{
    $count+=1;
}
if($o5=="책")
{
    $count+=1;
}
if($o6=="책상")
{
    $count+=1;
}

if($o7=="요코는 일본 사람입니다")
{
    $count+=1;
}
if($o8=="요코는 학생입니다")
{
    $count+=1;
}
if($o9=="장민수는 한국 사람입니다")
{
    $count+=1;
}
if($o10=="장민수는 은행원입니다")
{
    $count+=1;
}
if($o11=="소피는 프랑스 사람입니다")
{
    $count+=1;
}
if($o12=="소피는 영화배우입니다")
{
    $count+=1;
}
if($o13=="나타샤는 러시아 사람입니다")
{
    $count+=1;
}
if($o14=="나타샤는 주부입니다")
{
    $count+=1;
}
if($o15=="바트는 몽골 사람입니다")
{
    $count+=1;
}
if($o16=="바트는 요리사입니다")
{
    $count+=1;
}
if($o17=="크리스는 호주 사람입니다")
{
    $count+=1;
}
if($o18=="크리스는 의사입니다")
{
    $count+=1;
}





$connection=mysqli_connect("localhost","admin","","alina_diplom");
$a=$_SESSION['user']['id'];
$check_user = mysqli_query($connection, "UPDATE `first_kurs` SET `sub_16`='$count' WHERE id='$a'");



$_SESSION['otv']=$count;

$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");