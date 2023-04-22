<?php 
   class Trabalhador{

    private $nome;
    private $endereco;
    private $telefone;
    
    public function __construct()
    {
        $this->setNome("nome");
        $this->setEndereco("endereco");
        $this->setTelefone(96652596);
    }

    public function setNome($nome){
    $this->nome=$nome;
    }
    public function setEndereco($endereco){
        $this->endereco=$endereco;
    }
    public function setTelefone($telefone){
        $this->telefone=$telefone;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getTelefone(){
        return $this->telefone;
    }

}



?>