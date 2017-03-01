<?php
    class Turma {
        private $id;
        private $nome;
        private $codigo;
        private $professor;
        private $alunos;

        function __construct($id, $nome, $codigo) {
            $this->id = $id;
            $this->nome = $nome;
            $this->codigo = $codigo;
        }

        function getNome() {
            return $this->nome;
        }

        function setAlunos($alunos) {
            $this->alunos = $alunos;
        }

        function getAlunos() {
            return $this->alunos;
        }

        function getId() {
            return $this->id;
        }

        function getCodigo() {
            return $this->codigo;
        }
    }
