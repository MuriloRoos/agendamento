<?php

    //incluir o arquivo com a conexão com banco de dados
    include_once './conexao.php';

    //QUERY para recuperar os eventos
    $query_events = "SELECT id, titulo, color, start, end FROM eventos";

    // prepara a query
    $result_events = $conn ->prepare($query_events);

    //executa a query
    $result_events->execute():

    //criar o array que recebe os eventos
    $eventos= [];

    //percorrer a lista de registros retornado do banco de dados
    while($row_events = $result_events->fetch(PDO::FETCH_ASSOC)){
        //extrair o array
        extract($row_events);

        $eventos[]= [
            'id' => $id,
            'titulo' => $titulo,
            'color' => $color,
            'start' => $start,
            'end' => $end,

        ]
    }
?>