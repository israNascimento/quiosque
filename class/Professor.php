<?php
    class Professor extends Pessoa {
        function __construct($nome, $matricula) {
            $this->setNome($nome);
            $this->setMatricula($matricula);
        }
    }
