<?php

session_start();
if(isset($_SESSION["login"]) || isset($_SESSION["login"]))
{
    session_destroy();
    header("Location: login.php");
    exit;
}
?>