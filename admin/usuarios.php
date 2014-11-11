<?php

  // importa o código dos scripts
  require_once '../lib/constantes.php';
  require_once '../lib/database.php';
  require_once '../lib/functions.php';

  // se uma ação foi informada na URL
  if (isset($_GET['acao']))
  {
    // captura a ação informada do array superglobal $_GET[]
    $acao = $_GET['acao'];
  }

  // se não foi informada ação
  if(!isset($acao))
  {
    // assume ação padrão (listar)
    $acao = 'listar';
  }

  switch($acao)
  {
  
  case 'listar':
    
    // define o título da página
    $titulo_pagina = 'Lista de usuários';
    //carrega a página com o conteúdo dentro do template
    $content = 'sections/lista_usuarios.php';
    
    $registros = listar_usuarios();
    
    require_once(template); //Definido no arquivo lib/constantes.php

  break;
    
  /* ----//---- */
    
  case 'incluir':
    
    // define o título da página
    $titulo_pagina = 'Novo usuário';
    //carrega a página com o conteúdo dentro do template
    $content =  'sections/form_usuarios.php';
    
    require_once(template); //Definido no arquivo lib/constantes.php

  break;
    
  /* ----//---- */
    
  case 'alterar':
    
    // define o título da página
    $titulo_pagina = 'Alterar usuário';
    //carrega a página com o conteúdo dentro do template
    $content =  'sections/form_usuarios.php';
    
    // captura o id passado na URL
    $id = $_GET['id'];
    
    //chamando a  function para alterar
    $data = alterar_usuario($id);

    require_once(template); //Definido no arquivo lib/constantes.php
    
  break;

  /* ----//---- */
    
  case 'gravar':
    
    //capturar dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = sha1($_POST['senha']);
    
    //function encontrada no arquivo lib/functions.php
    gravar_usuario($nome, $email, $login, $senha);
    
    break;
    
  /* ----//---- */
    
  case 'excluir':
    
    // se não informou id na URL
    if (!isset($_GET['id']))
    {
      // encerra (mata) o script com mensagem de erro
      die('Erro: O código do usuário a alterar não foi informado.');
    }

    // captura o id passado na URL
    $id = $_GET['id'];
    
    //lib/functions.php
    excluir_usuario($id);
    
  break;
    
  /* ----//---- */
    
  default:
    
    // encerra (mata) o script exibindo mensagem de erro
    die('Erro: Ação inexistente!');
    
  	
  } // fim do switch...case
