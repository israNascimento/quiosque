<?php
    abstract class Pessoa {
        private $id;
        private $nome;
        private $matricula;

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }

        public function getMatricula() {
            return $this->matricula;
        }


    }
