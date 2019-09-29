<?php
	//Requerimento das Classes
	require_once('../../classes/db.php');
	
	//Variáveis de Sessão
	session_start();
	$id = $_SESSION['id'];
	
	//Ojeto de Busca
	$db = new db();
	$colunas = 'id, name, email, number_phone';
	$tabela = ' user ';
	$condicao = "WHERE id <> '$id'";
	$resultado_id = $db->query($colunas, $tabela, $condicao);

	//Resultado da Busca
	if ($resultado_id) {
		echo "<ul data-role='listview' data-split-icon='user' data-filter='true' data-split-theme='b' data-inset='true' class='ui-listview ui-listview-inset ui-corner-all ui-shadow'>";
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			echo "<li id=".$registro['id']." class='ui-li-has-alt ui-li-has-thumb ui-first-child ui-last-child'>";
				echo "<a href='#perfil-membro' class='ui-btn' id='lista_membros'>";
					echo "<img src='../../img/user.png'>";
					echo "<h2>".$registro['name']."</h2>";
					echo "<p>".$registro['email']."</p>";
					echo "<p>".$registro['number_phone']."</p>";
					echo "<a href='#solicitacao' data-rel='popup' data-position-to='window' aria-haspopup='true' aria-owns='solicitacao' aria-expanded='false' class='ui-btn ui-btn-icon-notext ui-icon-user ui-btn-b' title=''></a>";
				echo "</a>";
			echo "</li>";
		}
		echo "</ul>";
	}

?>