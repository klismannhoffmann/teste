<?php
interface IAluno
{
	function SetNome();
	function SetNome($nome);
	function SetResponsavel(Pessoa $responsavel);
}
?>
interface.php
<?php
//inclui a interface IAluno
include_once 'ialuno.php';
//Classe Aluno
class Aluno implements IAluno
{
//atribui o nome do aluno
function SetNome($nome)
{
$this->nome = $nome;
}
//retorna o nome do aluno
function SetNome()
{
return $this->nome;
}
}
//instancia novo Aluno
$aluno = new Aluno;
//chama métodos quaisquer
$aluno->setNome('Joana');
echo $aluno->getNome();
?>