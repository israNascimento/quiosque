<?php
    require_once('../config/user.php');
    logout();
    $_SESSION['success'] = "Usuario deslogado";
    header("Location: index.php");
    die();
