<?php

    class Cliente {

        private $id;
        private $nome;
        private $telefone;
        private $endereco;
        private $numero;
        private $bairro;
        private $cidade;
        private $estado;
        private $cep;

        public function __construct(string $nome='', string $telefone='', string $endereco='', string $numero='', string $bairro='', string $cidade='', string $estado='', string $cep='', int $id=-1) {
            $this->id = $id;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->cep = $cep;
        }

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

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        public function getEndereco() {
            return $this->endereco;
        }

        public function setNumero($numero) {
            $this->numero = $numero;
        }

        public function getNumero() {
            return $this->numero;
        }

        public function setBairro($bairro) {
            $this->bairro = $bairro;
        }

        public function getBairro() {
            return $this->bairro;
        }

        public function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        public function getCidade() {
            return $this->cidade;
        }

        public function setEstado($estado) {
            $this->estado = $estado;
        }

        public function getEstado() {
            return $this->estado;
        }

        public function setCep($cep) {
            $this->cep = $cep;
        }

        public function getCep() {
            return $this->cep;
        }
    };