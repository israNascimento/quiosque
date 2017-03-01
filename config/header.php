<html>
<?php
    session_start();
    spl_autoload_register(function($className) {
        require_once("../class/".$className.".php");
    });
    require_once("../config/connect.php");
    require_once("../config/user.php");
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
            <div class="navbar navbar-inverse">
        		<div class="container">
        			<div class="navbar-header">
        				<a class="navbar-brand" href="index.php">Quiosque</a>
        			</div>
        			<div>
        				<ul class="nav navbar-nav">
        					<li><a href="nota.php">Notas</a></li>
        					<li><a href="produto-lista.php">Arquivos</a></li>
        					<li><a href="contato.php">Aulas</a></li>
        				</ul>
        			</div>
        		</div>
        	</div>
            <?php
                if(isset($_SESSION['success'])) { ?>
                    <p class="text-success">
                        <?=$_SESSION['success']?>
                    </p>
            <?php }
                if(isset($_SESSION['error'])) { ?>
                    <p>
                        <?=$_SESSION['error']?>
                    </p>
            <?php }
                unset($_SESSION['success']);
                unset($_SESSION['error']);
            ?>
