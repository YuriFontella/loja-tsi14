<?php

// importa o código dos scripts
require_once 'lib/constantes.php';
require_once 'lib/database.php';

function login($login, $senha)
{
  
  if ($login == null or $senha == null)
  {
    echo "<script>alert('Nenhum campo pode ficar em branco.');history.go(-1);</script>";
  }

  $query = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' LIMIT 1";
  consultar($query);
  var_dump($query);
  
  $resultado = proximo_registro();
  
  if(linhas_afetadas() == 1)
  {
    session_name('loja');
    session_start();
    
    $_SESSION['logado'] = TRUE;
    $_SESSION['id'] = $resultado['id'];
    
    header('Location: usuarios.php');
    
  }
  else
  {
    echo "<script>alert('Login ou senha incorretos, verifique!');history.go(-1);</script>";
  }
  
}

function listar_usuarios() 
{

  // monta a consulta para recuperar a listagem de usuários ordenada pelo nome
  $consulta = "select * from usuarios order by id ASC";
  
  // declara um vetor de registros para passar para a view (gui)
  $registros = array();
  
  // executa a consulta sql
  consultar($consulta);
  // percorre o resultset retornado pela consulta extraindo um a um os registros retornados
  while ($registro = proximo_registro())
  {
    // acrescenta o registro ao vetor
    array_push($registros, $registro);
  }
  
  return $registros;  

}

function alterar_usuario($id)
{
  // se não informou id na URL
  if (!isset($id))
  {
    // encerra (mata) o script com mensagem de erro
    die('Erro: O código do usuário a alterar não foi informado.');
  }
  
  // monta consulta SQL para recuperar os dados do usuário a ser alterado
  $consulta = "select * from usuarios where id = $id";
  // executa a consulta
  consultar($consulta);
  // captura o registro retornado pela consulta
  $registro = proximo_registro();

  // extrai as informações em variáveis avulsas
  $data = array(
    'nome' => $registro['nome'],
    'email' => $registro['email'],
    'login' => $registro['login']
  );
  
  return $data;
  
}

function gravar_usuario($nome, $email, $login, $senha)
{
  if (!isset($_POST['id']))
  {
  // monta consulta sql para realização a inserção
    $consulta = "insert into usuarios (nome, email,	login, senha) values ('$nome', '$email', '$login', '$senha')";
  }
  else
  {
    $consulta = "update usuarios set nome = '$nome', email = '$email', login = '$login',	senha = '$senha' where id = {$_POST['id']}";
  }
  // executa a consulta
  consultar($consulta);
  
  // verifica se a operação foi bem sucedida
  if(linhas_afetadas() > 0)
  {
    // redireciona para a listagem de usuários
    header('location:' . URL_BASE .	'usuarios.php?acao=listar&success=true&message=Parece+que+deu+tudo+certo!');        
  }
  else 
  {
    // exibe mensagem de erro
    header('location:' . URL_BASE .	'usuarios.php?acao=listar&error=true&message=A+operação+não+foi+bem+sucedida!');

  }
  
  exit;
  
}

function excluir_usuario($id) 
{
  // monta consulta SQL para excluir usuário
  $consulta = "delete from usuarios where id = $id";
  // executa a consulta
  consultar($consulta);
  
  // verifica se a exclusão foi bem sucedida
  if(linhas_afetadas() > 0)
  {
    // redireciona para a listagem de usuários
    header('location:' . URL_BASE .	'usuarios.php?acao=listar&success=true&message=Usuário+excluído+com+sucesso!');
  }
  else 
  {				
    // exibe mensagem de erro
    header('location:' . URL_BASE .	'usuarios.php?acao=listar&error=true&message=Não+foi+possível+excluir+o+usuario!');
  }
  
  // finaliza a execução do script
  exit;
  
}


?>
