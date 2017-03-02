<?php
    class Aluno extends Pessoa {
        function __construct($nome, $matricula) {
            $this->setNome($nome);
            $this->setMatricula($matricula);
        }
    }
