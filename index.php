<?php

  require_once 'lib/constantes.php';
  require_once 'lib/database.php';
  require_once 'lib/controller_site.php';

  if( ! $_SESSION['carrinho'])
  {
    $_SESSION['carrinho'] = substr(rand(1, 99999999999999) + rand(1, 99999999999999), 0, 10);
  }

  if (isset($_GET['acao']))
  {
    $acao = $_GET['acao'];
  }

  if(!isset($acao))
  {
    $acao = 'index';
  }

  switch($acao)
  {  
   
  case 'index':
    
    $titulo = 'Loja TSI14';
    $chamadas = chamadas($id = null);
    $deptos = departamentos();
    
    $carrinho = listar_carrinho($_SESSION['carrinho']);
    
    $content = 'sections/loja.php';
    require_once('layout/site.php');
    
    
  break;
    
  case 'categoria':
    
    $chamadas = chamadas($_GET['id']);
    $titulo = 'Categoria | ' . $chamadas[0]['nome_departamento'];
    
    $deptos = departamentos();
    $carrinho = listar_carrinho($_SESSION['carrinho']);
    
    $content = 'sections/loja.php';
    require_once('layout/site.php');
    
  break;

  case 'carrinho':

    $titulo = 'Carrinho de compras';    
    $carrinho = listar_carrinho($_SESSION['carrinho']);
    
    $content = 'sections/carrinho.php';
    require_once('layout/site.php');  

  break;
    
  case 'adicionar':
    
    $id_produto = $_GET['produto'];
    $id_session = $_SESSION['carrinho'];
    
    adicionar_carrinho($id_produto, $id_session);
    
  break;
    
  case 'remover':
    
    $id = $_GET['id'];
    $data = remover($id);
    
    if($data == TRUE)
    {
      header('Location: '.URL_BASE.'index.php?acao=carrinho');
    }
    
  break;
  
  case 'produto':
    
    $produto = produto($_GET['id']);
    $titulo = $produto['nome_produto'];
    
    $deptos = departamentos();
    $carrinho = listar_carrinho($_SESSION['carrinho']);
   
    
    require_once('layout/produto.php');
    
  break;
    
  case 'usuario':
    
    if($_SESSION['cliente'])
    {
      header('Location:' . URL_BASE);
    }


    $titulo = 'Login | Cadastro';    
    $carrinho = listar_carrinho($_SESSION['carrinho']);
    
    $content = 'sections/login_cadastro.php';
    require_once('layout/site.php');  

  break;

  case 'cadastrar':

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);

    $data = cadastrar_cliente($nome, $email, $senha);

    if($data == TRUE)
    {
      header('Location: index.php?acao=usuario&success=true&message=Cadastro+realizado+com+sucesso+!');
    }

  break;

  case 'login':

    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);

    $data = login_cliente($email, $senha);

    if($data == TRUE)
    {
      header('Location: index.php?acao=index&success=true&message=Você+está+logado+!');
    }

  break;
    
  case 'finalizar':
    
    if( ! $_SESSION['cliente'])
    {
			
      header('Location: index.php?acao=usuario&error=true&message=É+necessário+que+você+faça+o+login+ou+cadastre-se+primeiro!');
			
    } else {
			
			$id_cliente = $_SESSION['id'];
			$id_session = $_SESSION['carrinho'];
			$data = pedidos($id_cliente, $id_session);
			
			if($data == true)
			{
			  $_SESSION['carrinho'] = substr(rand(1, 99999999999999) + rand(1, 99999999999999), 0, 10);
        header('Location: index.php?acao=carrinho&success=true&message=Sua+compra+foi+finalizada!+Seu+carrinho+foi+esvaziado,+aproveite+que+os+produtos+estão+tudo+de+graça+em+nossa+loja!');
      }
			
		}

  break;
    
  case 'sair':
    
    $_SESSION = array();    
    session_destroy();    
    header('Location: ' . URL_BASE);
    
  break;
    
  }


?>
    
  