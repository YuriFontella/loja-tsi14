<?php

	// declaração da constante da URL base da aplicação

  $server = $_SERVER['SERVER_NAME'];
  $uri = $_SERVER ['REQUEST_URI'];

  $endereco = explode('/', $uri);

	define('URL_BASE', 'http://' . $server . '/' . $endereco[1] . '/');

	// declaração das constantes de acesso ao banco de dados
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '123456');
	define('DB', 'loja');

  //Definindo o template padrão
	define('template_admin', '../layout/template_admin.php');
        
  // isso vai fazer sumir os erros do wamp em relaçao ao mysqli e PDO....

  error_reporting(E_ERROR);