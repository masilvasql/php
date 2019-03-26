<?php

    include '../funcaoRetorno.php';
    $deu = new DeuCerto();
    

    class Documento{
        private $numero;
        
        public function getNumero(){
            return $this->numero;
        }

        public function setNumero($n){
            $this->numero = $n;
        }
    }

    class CPF extends Documento{
        public function validar($numero):bool{
            global $deu;

            if($deu->ValidaCpf($numero)){
                return true;
            }else{
                return false;
            } 
        }
    }

    $doc = new CPF();

    $doc->setNumero('08033318945');
    var_dump($doc->validar($doc->getNumero())) ;
    echo '<br>';
    
    echo $doc->getNumero();
    echo '<br>';
    echo $deu->retornaDeuBoa();  
    
?>