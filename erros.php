<?php

//capturando erros

try{
    
    $teste = new Teste();
    echo "Tetando... mas vai dar erro!";
    echo '<br>';
    
} catch(Error $erro){

    echo "Passamos pelo Erro ";
    echo '<br>';

    echo "O erro capiturado foi: $erro";
    echo '<br>';

} finally{
    echo "Chegamos ao final...";
    echo '<br>';
}

//capturando exceptions

try{
    if(!file_exists(!'testando.php')){
        throw new Exception('O arquivo não existe!');
    }

} catch(Exception $exception){

    echo "A exception capiturada foi: $exception";
    echo '<br>';
}

?>