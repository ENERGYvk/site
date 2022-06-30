<?php
session_start();

$connection=mysqli_connect("localhost","admin","","alina_diplom");

$username=$_POST['login'];
$pass=md5($_POST['password_login']);


$check_user = mysqli_query($connection, "SELECT * from users where name='$username' and password='$pass'");

if (mysqli_num_rows($check_user)>0)
{
    $user=mysqli_fetch_assoc($check_user);
    $_SESSION['user']=[
        'id'=>$user['id'],
        'name'=>$user['name'],
        'email'=>$user['email'],
        'data'=>$user['data']
    ];

    header("Location: ../../личный кабиннт/kabinet.php");

}
else
{
    $_SESSION['massage']="Неверный логин или пароль!";
    header("Location: ../Login.php");
}
