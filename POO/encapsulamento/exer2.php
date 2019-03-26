<?php
    class Pessoa{
        public $nome = 'Marcelo'; //visto por todos;
        protected $idade = 27;  // visto pela classe e os herdeiros por herança
        private $senha = '123465'; // visto apenas pela classe, mais protegido que o protected 

        public function verDados(){
            echo $this->nome .'<br>';
            echo $this->idade .'<br>';
            echo $this->senha .'<br>';
        }
    }

    class Programador extends Pessoa{



        public function verDados(){

            echo get_class($this).'<br>';;

            echo $this->nome .'<br>';
            echo $this->idade .'<br>';
            echo $this->senha .'<br>';
        }
    }
    
    $exibe = new Programador();
    $exibe->verDados();
    echo '<br>';
    echo $exibe->nome.'<br>';
    echo $exibe->idade.'<br>';
    echo $exibe->senha.'<br>';
?>