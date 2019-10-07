<?php
	//Requerimento das Classes
	require_once('../../classes/db.php');
	
	//Variáveis de Sessão
	session_start();
	$id = $_SESSION['id'];
	
	//Ojeto de Busca
	$db = new db();
	$colunas = 'name, login, number_phone, email';
	$tabela = ' user ';
	$condicao = "u join partner p on p.id_partner = u.id WHERE id_user = '$id'";
	$resultado_id = $db->query($colunas, $tabela, $condicao);

	//Resultado da Busca
	if ($resultado_id) {
		echo "<ul data-role='listview' data-inset='true' class='ui-listview ui-listview-inset ui-corner-all ui-shadow'>";
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			echo "<li class='ui-li-has-thumb ui-first-child'><a href='#parceiro' class='ui-btn ui-btn-icon-right ui-icon-carat-r'>";
					echo "<img src='img/user.png'>";
					echo "<h2>".$registro['name']."</h2>";
					echo "<p>".$registro['email']."</p>";
					echo "<p>".$registro['number_phone']."</p>";
				echo "</a>";
			echo "</li>";
		}
		echo "</ul>";
	}

?>