<?php
    session_start();

    function login($matricula) {
        $_SESSION['matricula'] = $matricula;
    }

    function temUsuario() {
        return isset($_SESSION['matricula']);
    }

    function usuario() {
        return $_SESSION['matricula'];
    }

    function logout() {
        session_destroy();
        session_start();
    }
