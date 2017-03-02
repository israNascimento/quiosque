<?php

class ProfessorDAO {
    private $con;

    function __construct($con) {
        $this->con = $con;
    }

    function login($matricula, $senha) {
        $senhaMD5 = md5($senha);
        $matriculaEscape = mysqli_real_escape_string($this->con, $matricula);
        $query = "select * from professores where matricula='{$matriculaEscape}'
            and senha='{$senhaMD5}'";
        $result = mysqli_query($this->con, $query);
        $prof = mysqli_fetch_assoc($result);
        $professor = new Professor($prof['nome'], $prof['matricula']);
        $professor->setId($prof['id']);
        return $professor;
    }

    function createTurma($item) {
        $turma = new Turma($item['disciplina_id'], $item['disciplina_nome'],
            $item['codigo'], $_SESSION['name']);
        return $turma;
    }

    function getTurmas($profId) {
        $query = "select t.*,
            d.nome disciplina_nome, d.id discipina_id, d.codigo,
            a.*
            from turmas as t
            join disciplinas as d on t.disciplina_id = d.id
            join alunos as a on t.aluno_id=a.id
            where t.professor_id={$profId}
            order by t.disciplina_id";
        $result = mysqli_query($this->con, $query);
        $turmas = array();

        if($result == false) {
            echo mysqli_error($this->con);
        }

        $lastDisciplina = 0;
        $alunos = array();
        $i = 0;
        $len = mysqli_num_rows($result);;

        while($current = mysqli_fetch_assoc($result)) {

            if($lastDisciplina !== $current['disciplina_id']) {
                if($lastDisciplina == 0) {
                    $turma = $this->createTurma($current);
                } else {
                    $turma->setAlunos($alunos);
                    array_push($turmas, $turma);
                    $turma = $this->createTurma($current);
                    unset($alunos);
                    $alunos = array();
                }
                $lastDisciplina = $current['disciplina_id'];
            }
            $aluno = new Aluno($current['nome'], $current['matricula']);
            array_push($alunos, $aluno);

            if($i == $len -1) {
                $turma = $this->createTurma($current);
                $turma->setAlunos($alunos);
                array_push($turmas, $turma);
            }
            $i++;
        }
        return $turmas;
    }


}
