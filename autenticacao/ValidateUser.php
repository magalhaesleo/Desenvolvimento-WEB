<?php
session_destroy();
//session_start();
if (($_POST['login']=='admin')&&($_POST['pass']=='admin'))
{
    $_SESSION['logado'] = "on";
    unset($_SESSION['invalidUser']);
    header("location: ../index.php");
}
else
{
    $_SESSION['invalidUser'] = "on";
    header("location: ../login.php");
}