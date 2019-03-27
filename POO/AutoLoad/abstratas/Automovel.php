<?php

    interface Veiculo{
        public function acelerar($velocidade);
        public function frear($velocidade);
        public function trocarMarcha($marcha);
    }

    abstract class Automovel implements Veiculo{

        public function acelerar($velocidade){ 
            echo "O Veículo acelerou até: ".$velocidade.' km/h';
        }

        public function frear($velocidade){
            echo "O Veículo freou em: ".$velocidade.' km/h';
        }

        public function trocarMarcha($marcha){
            echo "O Veículo trocou de marcha em: ".$marcha.' km/h';
        }

    }

?>