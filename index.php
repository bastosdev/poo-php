<?php

//importando a interface de outro pasta (namespace)
require "./interfaces/SistemaPHP_Cadastros.php";
use SistemaPHP_Cadastros\CadastroUsuario;

//depois conferir o recurso 'as' aliasing (apelido)

//class pai implements interface
class Usuario implements CadastroUsuario{
    protected $login = null;
    protected $senha = null;

    public function cadastrarUsuario($login, $senha){
        $this->login = $login;
        $this->senha = $senha;
    }
    public function exibirCadastro(){
        return "LOGIN: ". $this->login ." SENHA: ". $this->senha;
    }
    public function exibirTipoAcesso(){
        return "ACESSO: TOTAL";
    }
}
//class filho extends class pai
class Funcionario extends Usuario{

    private $nome = null;
    private $cargo = null;
    private $salario = null;

    //construtor
    function __construct($nome, $cargo, $salario)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    //setters
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setCargo($telefone){
        $this->cargo = $telefone;
    }
    public function setSalario($filhos){
        $this->salario = $filhos;
    }
    //getters
    public function getNome(){
        return $this->nome;
    }
    public function getCargo(){
        return $this->cargo;
    }
    public function getSalario(){
        return $this->salario;
    }
    //metodos
    public function relatorioFuncionarios(){
        return $this->getNome() ." possui o cargo de ". $this->getCargo() ." com sálario de ". $this->getSalario();
    }
    public function modificarSalario($novoSalario){
        $this->salario += $novoSalario;
    }
    //sobrescrevendo metodo da class pai
    public function exibirTipoAcesso(){
        return "ACESSO: VENDAS";
    }
}
//testando métodos static 
class Calculadora{
    public static function horasExtras($salario, $horasTrabalhadas){
        $salarioHora = ($salario / 30) / 8;
        $totalHorasExtras = $salarioHora * $horasTrabalhadas;
        return $totalHorasExtras;
    }
}
//instanciando objetos 
$novoFuncionario = new Funcionario("Bruno", "Programador", 1000);
echo $novoFuncionario->relatorioFuncionarios();

echo '</br>'; // usando herança
$novoFuncionario->cadastrarUsuario("bastosdev", 123);
echo $novoFuncionario->exibirCadastro();

echo '</br>'; // testando sobrescrita de método
echo $novoFuncionario->exibirTipoAcesso();

echo '</br>'; // testando método státic
echo Calculadora::horasExtras(1000, 5);

echo '<hr>';

echo '</br>'; //verificando namespace
print_r($novoFuncionario);
?>