<?php 
echo "<meta charset='utf-8'>";

require_once 'ClassePessoa/Pessoa.php';
require_once 'ClassePessoa/Empregado.php';


     $nome = $_POST["nome"];
     $telefone = $_POST["telefone"];
     $endereco = $_POST["endereco"];
     $codSetor = $_POST["setor"];
     $imposto = $_POST["imposto"];
     $salBase = $_POST["salarioBase"];


$empregado = new Empregado();
$empregado->setNome($nome);
$empregado->setTelefone($telefone);
$empregado->setEndereco($endereco);
$empregado->setCodigoSetor($codSetor);
$empregado->setImposto($imposto);
$empregado->setSalarioBase($salBase);
?>

<table border="1" align="center">
<div align='center'><h1>Classe Empregado</h1></div>
  <tr>
      <td>Nome: </td>
      <td><?php echo $empregado->getNome();?></td>
</tr>
<tr>
      <td>Telefone: </td>
      <td><?php echo $empregado->getTelefone();?></td>
</tr>
<tr>
      <td>Endereço: </td>
      <td><?php echo $empregado->getEndereco();?></td>
</tr>
<tr>
      <td>Setor: </td>
      <td><?php echo $empregado->getCodigoSetor();?></td>
</tr>
<tr>
      <td>Imposto: </td>
      <td><?php echo $empregado->getImposto();?></td>
</tr>
<tr>
      <td>Salário base: </td>
      <td><?php echo 'R$ '.number_format($empregado->getSalarioBase(),2, ',', '.');?></td>
</tr>
<tr>
      <td>Novo salário: </td>
      <td><?php echo 'R$ '.number_format($empregado->calculaSalario(),2,',','.');?></td>
</tr>
</table>