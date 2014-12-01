<?php

session_name('cliente');
session_start();

function chamadas($id) 
{
    
  if($id)
  {
    $consulta = "SELECT p.id, p.nome as nome_produto, p.detalhes, p.preco, p.id_departamento, d.nome as nome_departamento, i.foto 
                   FROM produtos p
                   LEFT JOIN imagens i ON  p.id = i.id_produto
                   JOIN departamentos d ON d.id = p.id_departamento
                   WHERE p.id_departamento = '$id'
                   ORDER BY p.nome";    
  } else {
    
    $consulta = "SELECT p.id, p.nome as nome_produto, p.detalhes, p.preco, p.id_departamento, d.nome as nome_departamento, i.foto 
                   FROM produtos p
                   LEFT JOIN imagens i ON  p.id = i.id_produto
                   JOIN departamentos d ON d.id = p.id_departamento
                   ORDER BY p.nome";    
  }
  
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
  
  $consulta = "SELECT (SELECT SUM(preco) FROM carrinho c, produtos p WHERE id_session = '$id_session' AND p.id = c.id_produto) AS total, p.id, p.nome, p.preco, p.detalhes, c.id, c.id_produto  
	             FROM carrinho c, produtos p 
							 WHERE id_session = '$id_session' AND c.id_produto = p.id 
							 ORDER BY c.timestamp DESC";
	
  consultar($consulta);

  $registros = array();
  while ($registro = proximo_registro()) {
    array_push($registros, $registro);
  }

  return $registros;
  
}

function adicionar_carrinho($id_produto, $id_session)
{
  $valida = "SELECT * FROM carrinho WHERE id_produto = '$id_produto' AND id_session = '$id_session'";
  consultar($valida);
  
  if(linhas_afetadas() == 1)
  {    
    die('Esse produto já está no seu carrinho!'); 
  }
  
  $query = "INSERT INTO carrinho (id_produto, id_session) VALUES ('$id_produto', '$id_session')";
  consultar($query);
  
  if(linhas_afetadas() == 0)
  {    
    die('Houve algum erro, tente novamente!'); 
  }
  
  return true;
  
}

function remover($id)
{
  $query = "DELETE FROM carrinho WHERE id = '$id'";
  consultar($query);
  
  if(linhas_afetadas() > 0)
  {    
    return true;      
  }
  
}

function cadastrar_cliente($nome, $email, $senha)
{
  
  if ($nome == null or $email == null or $senha == null)
  {
    echo "<script>alert('Nenhum campo pode ficar em branco.');history.go(-1);</script>";
  }
  
  $query = "INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
  consultar($query);
  
  if(linhas_afetadas() > 0)
  {    
    return true;
  }

}

function login_cliente($email, $senha)
{
  
  if ($email == null or $senha == null)
  {
    echo "<script>alert('Nenhum campo pode ficar em branco.');history.go(-1);</script>";
  }

  $query = "SELECT id, email, senha FROM clientes WHERE email = '$email' AND senha = '$senha' LIMIT 1";
  consultar($query);
  
  $resultado = proximo_registro();
  
  if(linhas_afetadas() == 1)
  {    
    $_SESSION['cliente'] = TRUE;
    $_SESSION['id'] = $resultado['id'];
    
    return true;
    
  }
  else
  {
    echo "<script>alert('Login ou senha incorretos, verifique!');history.go(-1);</script>";
  }
  
}

?>
