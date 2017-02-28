<?php
    session_start();

    function login($name) {
        $_SESSION['name'] = $name;
    }

    function hasUser() {
        return isset($_SESSION['name']);
    }

    function getUserName() {
        return $_SESSION['name'];
    }

    function logout() {
        session_destroy();
        session_start();
    }
