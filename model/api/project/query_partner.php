<?php

	//Requerimento das Classes
	require_once('../../classes/db.php');
	
	//Variáveis de Sessão
	session_start();
	$id = $_SESSION['id'];
	//Ojeto de Busca
	$db = new db();
	$colunas = 'id,name, method, iduser, partners';
	$tabela = ' project ';
	$condicao = "WHERE partners = $id";
	$resultado_id = $db->query($colunas, $tabela, $condicao);

	if ($resultado_id) {
		echo '
		<div role="heading" class="ui-controlgroup-label"></div>		
		<ul data-filter="true" data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">';
		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
		echo '
        <li class="ui-li-has-thumb ui-first-child ui-last-child">
        <a href="#" data-id_method='.$registro["method"].' class="ui-btn ui-btn-icon-right ui-icon-carat-r >
        <img src="#">
        <h2>'.$registro['name'].'</h2>
        <p><strong>Metodologia:</strong>	'.$registro['method'].'</p>
        </a>
        </li>';
		}		
		echo "</ul>";
	}
?>
<script src="js/project/define_method.js"></script>