<?php

function chamadas() 
{
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

function departamentos() 
{
    $consulta = "SELECT * FROM departamentos ORDER BY nome";

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

function listar_carrinho($id_session)
{
  
  $consulta = "SELECT p.id, p.nome, p.preco, p.detalhes, c.id, c.id_produto  FROM carrinho c, produtos p WHERE id_session = '$id_session' AND c.id_produto = p.id ORDER BY c.timestamp DESC";
  consultar($consulta);

  $registros = array();
  while ($registro = proximo_registro()) {
    array_push($registros, $registro);
  }

  return $registros;
  
}

function adicionar_carrinho($id_produto, $id_session)
{
  $query = "INSERT INTO carrinho (id_produto, id_session) VALUES ('$id_produto', '$id_session')";
  consultar($query);
  
  if(linhas_afetadas() > 0)
  {    
    return TRUE;      
  }
  
}

?>
