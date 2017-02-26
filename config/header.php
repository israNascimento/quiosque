<html>
<?php
    spl_autoload_register(function($className) {
        require_once("../class/".$className.".php");
    });
    require_once("../config/connect.php");
?>
    <header>
        <title>Quiosque</title>
        <link rel="icon" href="../image/favicon.png" /> <!--A pagina que esta chamando é a index.html -->
        <link rel="stylesheet" type="text/css" href="../style/style.css"  />
        <link rel="stylesheet" type="text/css" href="../style/bootstrap.css"  />
        <meta charset="utf-8" />
    </header>
    <body>
        <main class="container">
