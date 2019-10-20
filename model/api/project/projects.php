<?php

	//Requerimento das Classes
	require_once('../../classes/db.php');
	
	//Variáveis de Sessão
	session_start();
	$id = $_SESSION['id'];

	//Ojeto de Busca
	$db = new db();
	$colunas = 'id, name, method, iduser, partners';
	$tabela = ' project ';
	$condicao = "WHERE iduser = $id";
	$resultado_id = $db->query($colunas, $tabela, $condicao);

	if ($resultado_id) {
		echo '
		<div role="heading" class="ui-controlgroup-label"></div>		
		<ul data-filter="true" data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">';
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
		echo "<li class='ui-li-has-alt ui-li-has-thumb ui-first-child ui-last-child'>";
				echo "<a  data-id_method=".$registro["method"]." href='#' data-id_project=".$registro['name']." class='ui-btn ui-btn-icon-right ui-icon-carat-r link_method'>";
					echo "<img src='img/user.png'>";
					echo "<h2>".$registro['name']."</h2>";
					echo "<p><strong>Metodologia:</strong>	".$registro['method']."</p>";
					echo "<a href='#solicitacao'
					data-id_method=".$registro["method"]."  data-position-to='window' data-id_project=".$registro['name']." aria-haspopup='true' aria-owns='solicitacao' aria-expanded='false' class='ui-btn ui-btn-icon-notext ui-icon-delete ui-btn-b btn_project_delete'></a>";
				echo '</a>';
			echo '</li>';
		}
		echo '</ul>';
	}
?>
<script src="js/project/define_method.js"></script>
<script src="js/project/delete_project.js"></script>
