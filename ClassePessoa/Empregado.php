<?php 
require_once 'Pessoa.php';

class Empregado extends Trabalhador{

    private $codigoSetor;
    private $salarioBase;
    private $imposto;

    public function setCodigoSetor($codigoSetor){
       $this->codigoSetor=$codigoSetor;
    }
    public function setSalarioBase($salarioBase){
        $this->salarioBase=$salarioBase;
    }
    public function setImposto($imposto){
        $this->imposto=$imposto;
    }
    public function getCodigoSetor(){
        return $this->codigoSetor;
    }
    public function getSalarioBase(){
        return $this->salarioBase;
    }
    public function getImposto(){
        return $this->imposto;
    }
    public function calculaSalario(){
        return ( $this->getSalarioBase()-$this->getSalarioBase()*$this->imposto);
    }
}


?>