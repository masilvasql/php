<?php
    class Endereco{
        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($a, $b, $c){
            $this->logradouro = $a;
            $this->numero = $b;
            $this->cidade = $c;
        }

        public function __destruct(){
            var_dump("Destruir");
        }

        public function __toString(){
            return $this->logradouro .', '. $this->numero.'- '. $this->cidade;
        }
    }

    $meuEndereco = new Endereco('Rua Arthur Barth ', '123', 'Lebon Régis'); 
    var_dump($meuEndereco);// traz do construtor
    echo($meuEndereco); // traz do toString()
    echo '<br>';
    unset($meuEndereco); //destrói e zera a variável
 
?>