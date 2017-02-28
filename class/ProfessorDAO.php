<?php

class ProfessorDAO {
    private $con;

    function __construct($con) {
        $this->con = $con;
    }

    function login($matricula, $senha) {
        $senhaMD5 = md5($senha);
        $matriculaEscape = mysqli_real_escape_string($this->con, $matricula);
        $query = "select * from professores where matricula='{$matriculaEscape}' and senha='{$senhaMD5}'";
        $result = mysqli_query($this->con, $query);
        return mysqli_fetch_assoc($result);
    }
}
