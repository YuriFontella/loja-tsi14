<?php

  require_once '../lib/constantes.php';
  require_once '../lib/database.php';
  require_once '../lib/functions.php';

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

    if($_SESSION['logado'] != TRUE) 
    {
      $titulo = 'Login';
      require_once('../layout/login.php');
    }
    else
    {
      die('<script type="text/javascript">window.location = "usuarios.php"</script>');
    }
    
  break;
    
  case 'login':
    
    $login = $_POST['login'];
    $senha = sha1($_POST['senha']);
    
    login($login, $senha);
    
  break;
    
  case 'sair':

    $_SESSION = array();
    
    session_destroy();
    
    header('Location: ' . URL_BASE . 'admin/');
    
  break;
    
  default:
    
    die('Erro: Ação inexistente!');
    
  	
  }