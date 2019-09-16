<?php

	include('control/header.html');
	if (isset($_SESSION['usuario'])) {
		include('view/home/home.php');
		include('view/home/perfil-membro.php');
		include('view/home/perfil.php');
		include('view/home/parceiro.php');
		include('view/home/iniciar_projeto.php');
		include('view/home/checar_projetos.php');
		include('view/home/projeto_cascata.php');
	}else{
		include('view/login/login.php');
		include('view/login/cadastrar-se.php');
		include('view/login/esqueci_senha.php');
		include('view/login/codigo.php');
		include('view/login/nova_senha.php');
	}
?>