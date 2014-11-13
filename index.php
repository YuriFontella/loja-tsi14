<?php

  require_once 'lib/constantes.php';
  require_once 'lib/database.php';

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
    
    $titulo = 'Loja TSI 14';
    require_once('layout/site.php');
    
  break;
      
  }

?>
    
  