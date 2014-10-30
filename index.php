<?php

  require_once 'lib/constantes.php';
  require_once 'lib/database.php';
  require_once 'lib/functions.php';

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
    
    $titulo = 'Login';
    require_once('layout/login.php');
    
  break;
    
  case 'login':
    
    $login = $_POST['login'];
    $senha = sha1($_POST['senha']);
    
    login($login, $senha);
    
  break;
    
  case 'sair':
    
    $data = array($_SESSION['logado'], $_SESSION['id']);
    
    session_destroy($data);
    session_unset($data);
    header('Location: ' . URL_BASE);
    
  break;
    
  default:
    
    die('Erro: Ação inexistente!');
    
  	
  }