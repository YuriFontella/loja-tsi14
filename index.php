<?php

  require_once 'lib/constantes.php';
  require_once 'lib/database.php';
  require_once 'sections/controller_site.php';

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
    
    require_once('layout/site.php');
    
  break;
      
  }

?>
    
  