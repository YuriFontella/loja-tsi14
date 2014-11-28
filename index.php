<?php

  require_once 'lib/constantes.php';
  require_once 'lib/database.php';
  require_once 'lib/controller_site.php';

  session_name('carrinho');
  session_start();

  if( ! $_SESSION['carrinho'])
  {
    $_SESSION['carrinho'] = sha1(rand(0, 9999) + 1234);
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
    $chamadas = chamadas();
    $deptos = departamentos();
    
    $carrinho = listar_carrinho($_SESSION['carrinho']);
    
    $content = 'sections/loja.php';
    require_once ('layout/head.php');
    require_once('layout/site.php');
    
    
  break;

  case 'carrinho':

    $titulo = 'Carrinho de compras';
    
    $carrinho = listar_carrinho($_SESSION['carrinho']);
    
    $content = 'sections/carrinho.php';
    require_once ('layout/head.php');
    require_once('layout/site.php');  

  break;
    
  case 'adicionar':
    
    $id_produto = $_GET['produto'];
    $id_session = $_SESSION['carrinho'];
    
    $data = adicionar_carrinho($id_produto, $id_session);
    
  break;
    
  case 'remover':
    
    $id = $_GET['id'];
    $data = remover($id);
    
    if($data == TRUE)
    {
      header('Location: '.URL_BASE.'index.php?acao=carrinho');
    }
    
  break;
    
      
  }

?>
    
  