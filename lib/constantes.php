<?php

	// declaração da constante da URL base da aplicação
	define('URL_BASE', 'http://loja.local/');

	// declaração das constantes de acesso ao banco de dados
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '123456');
	define('DB', 'loja');

  //Definindo o template padrão
	define('template', 'layout/template.php');
        
  // isso vai fazer sumir os erros do wamp em relaçao ao mysqli e PDO....

  error_reporting(E_ERROR);