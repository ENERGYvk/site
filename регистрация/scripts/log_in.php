<?php

    session_start();
    $connection=mysqli_connect("localhost","admin","","alina_diplom");

    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];

    if(mysqli_connect_errno())
    {
        $_SESSION['massage']="Ошибка подключения к базе данных!";
        header("Location: ../Reg.php");
    }
    else
    {
        if($username=="" || $email=="" || $pass=="")
        {
            $_SESSION['massage']="Заполните все поля!";
            header("Location: ../Reg.php");

        }
        else {
            if ($pass === $pass2) {
                $pass=md5($pass);
                $result = mysqli_query($connection, "INSERT INTO `users` (`id`, `email`, `password`, `name`, `data`) VALUES (NULL, '$email','$pass','$username', CURRENT_TIMESTAMP)");
                if ($result) {
                    $_SESSION['massage_accept'] = "Регистрация прошла успешно";
                    header("Location: \вход\Login.php");
                } else {
                    $_SESSION['massage'] = "Ошибка регистрации!";
                    header("Location: ../Reg.php");
                }

            } else {
                $_SESSION['massage'] = "Пароли не совпадают!";
                header("Location: ../Reg.php");

            }
        }
    }








