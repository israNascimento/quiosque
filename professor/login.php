<?php
    require_once("../config/header.php");
    require_once("../config/user.php");

    $matricula = $_POST['matricula'];
    $pass = $_POST['senha'];
    $dao = new ProfessorDAO($con);
    $professor = $dao->login($matricula, $pass);

    if($professor != null) {
        header("Location: index.php");
        login($professor->getNome(), $professor->getId());
        $_SESSION['sucess'] = "Usuario ".$professor->getNome().' logado';
        die();
    } else {
        $_SESSION['error'] = "Erro na validação";
        header("Location: index.php");
        die();
    }
