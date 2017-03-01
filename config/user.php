<?php
    session_start();

    function login($name, $id) {
        $_SESSION['name'] = $name;
        $_SESSION['id'] = $id;
    }

    function hasUser() {
        return isset($_SESSION['name']) && isset($_SESSION['id']);
    }

    function getUserId() {
        return $_SESSION['id'];
    }

    function getUserName() {
        return $_SESSION['name'];
    }

    function logout() {
        session_destroy();
        session_start();
    }
