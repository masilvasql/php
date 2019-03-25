<?php
    class Pessoa{
        public $nome;

        public function falar(){
            return "O meu nome é ". $this->nome;
        }
    }

    $marcelo = new Pessoa();

    $marcelo -> nome = 'Marcelo';

    echo $marcelo->falar();
?>