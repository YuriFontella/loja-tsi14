<?php

function chamadas() {
    $consulta = "SELECT p.id, p.nome as nome_produto, p.detalhes, p.preco, d.nome as nome_departamento, i.foto 
                   FROM produtos p
                   LEFT JOIN imagens i ON  p.id = i.id_produto
                   JOIN departamentos d ON d.id = p.id_departamento 
                   ORDER BY p.nome";

    // executa a consulta sql
    consultar($consulta);
    // declara um vetor de registros para passar para a view (gui)
    $registros = array();
    // percorre o resultset retornado pela consulta extraindo um a um os registros retornados
    while ($registro = proximo_registro()) {
        // acrescenta o registro ao vetor
        array_push($registros, $registro);
    }

    return $registros;
}
function departamentos() {
    $consulta = "SELECT * FROM departamentos 
                   ORDER BY nome";

    // executa a consulta sql
    consultar($consulta);
    // declara um vetor de registros para passar para a view (gui)
    $registros = array();
    // percorre o resultset retornado pela consulta extraindo um a um os registros retornados
    while ($registro = proximo_registro()) {
        // acrescenta o registro ao vetor
        array_push($registros, $registro);
    }

    return $registros;
}
