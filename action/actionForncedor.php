<?php 
   echo "<meta charset='utf-8'>";
    require_once 'ClassePessoa/Pessoa.php';
    require_once 'ClassePessoa/Fornecedor.php';


       $fornecedor = new Fornecedor();
       $fornecedor->setNome("Alessandro");
       $fornecedor->setEndereco("Minha casa");
       $fornecedor->setTelefone(96279528);
       $fornecedor->setValorCredito(1000);
       $fornecedor->setValorDivida(500);
       $fornecedor->obterSaldo();
 
?>
<br>
   <table border="1" align='center'>
       <div align='center'><h1>Classe Fornecedor</h1></div>
      <tr>
          <td>Nome: </td>
          <td><?php echo $fornecedor->getNome();?></td>
      </tr>
      <tr>
          <td>Endereço:</td>
          <td><?php echo $fornecedor->getEndereco();?></td>
      </tr>
      <tr>
          <td>Telefone: </td>
          <td><?php echo $fornecedor->getTelefone();?></td>
      </tr>
      <tr>
          <td>Valor do crédito</td>
          <td><?php echo $fornecedor->getValorCredito();?></td>
      </tr>
      <tr>
          <td>Valor da dívida</td>
          <td><?php echo $fornecedor->getValorDivida();?></td>  
      </tr>
      <tr>
          <td>Saldo final</td>
          <td><?php echo $fornecedor->obterSaldo();?></td>
      </tr>
         
</table>