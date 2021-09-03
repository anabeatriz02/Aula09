<?php

//recebe nome do arquivo
function lerArquivo($nomeArquivo){
    //lê o nome como string
    $arquivo = file_get_contents($nomeArquivo);
    
    //transforma a string como array
    $jsonArray = json_decode($arquivo);

    //devolve o array
    return $jsonArray;
}

//busca o aluno dentro da lista e 
//devolve uma lista com os alunos encntrados
function buscarAluno($alunos, $nome){

    $alunosFiltro = [];
    foreach($alunos as $aluno){
        if($aluno->nome == $nome){
            $alunosFiltro[] = $aluno;
        }
    }
    return $alunosFiltro;
}


?>