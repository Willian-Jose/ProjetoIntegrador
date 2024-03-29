<?php 
if($this->session->userdata("usuario_logado")==null){
	redirect('/');
}  ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?= base_url("bootstrap/css/style.css") ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Projeto Integrador</title>
<link rel="shortcut icon" href="<?= base_url("bootstrap/img/logo.png")?>"/>
</head>
<body>

	<div id="page">
		
		<nav>
	        <div">
	        	<img class="logo" src="<?= base_url("bootstrap/img/logo.png")?>">
	            <ul>
	           	   	<li><?= anchor('Login/home', 'Início', 'title="Inicio"'); ?></li>
					<?php if($_SESSION['usuario_logado']['nivel'] == 2){ ?>
						<li><?= anchor('Grupo_crud/index', 'Cadastro de Grupos', 'title="Grupos"'); ?></li>
					<?php
					}
					?>
					<?php if($_SESSION['usuario_logado']['nivel'] == 3){ ?>
						<li><?= anchor('User/index', 'Gerência de Usuários', 'title="Grupos"'); ?></li>
					<?php
					}
					?>
	                <li><?= anchor('Grupo/index', 'Grupos', 'title="Grupos"'); ?></li>
					<li><?= anchor('Usuario/perfil', 'Perfil', 'title="Perfil"'); ?></li> 	
					<?php
					if (isset($_SESSION)) {
					?>
						<li style="float: right;">
						<?= anchor('Login/logout', 'Logout', 'title="Logout"'); ?>
						</li>
					<?php	
					}
					?>
	            </ul>
	        </div>
	    </nav>
	    <div id="main">