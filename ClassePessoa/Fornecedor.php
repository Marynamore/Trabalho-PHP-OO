<?php 
    require_once 'Pessoa.php';

    class Fornecedor extends Trabalhador{
        private $valorCredito;
        private $valorDivida;

       public function setValorCredito($valorCredito){
           $this->valorCredito=$valorCredito;
       } 
       public function setValorDivida($valorDivida){
           $this->valorDivida=$valorDivida;
       }
       public function getValorCredito(){
           return $this->valorCredito;
       }
       public function getValorDivida(){
           return $this->valorDivida;
       }
       public function obterSaldo(){
           return $this->getValorCredito()-$this->getValorDivida();
       }

    }   

?>