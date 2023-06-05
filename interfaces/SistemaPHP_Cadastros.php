<?php

namespace SistemaPHP_Cadastros;

//inteface pai
interface Cadastro{
    
}
//interface extends da pai
interface CadastroUsuario extends Cadastro{
    public function cadastrarUsuario($login, $senha);
    public function exibirCadastro();
    public function exibirTipoAcesso();
}

?>