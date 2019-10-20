<?php
    //Requerimento das Classes
	require_once('../../classes/db.php');
	
	//Variáveis de Sessão
	session_start();
	$id = $_POST['membro'];
	
	//Ojeto de Busca
	$db = new db();
    $colunas = 'id, name, method, iduser, partners';
    $tabela = ' project ';
    $condicao = "WHERE partners = $id";
    $resultado_id = $db->query($colunas, $tabela, $condicao);
    
   if ($resultado_id) {
        echo '
        <div role="heading" class="ui-controlgroup-label"></div>        
        <ul data-filter="true" data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
        <h1 style="text-align: center;">Projetos Participados</h1>';
        while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
        echo '
        <li class="ui-li-has-thumb ui-first-child ui-last-child">
        <a href="#" class="ui-btn ui-btn>
        <img src="#">
        <h2>'.$registro['name'].'</h2>
        <p><strong>Metodologia:</strong>    '.$registro['method'].'</p>
        </a>
        </li>';
        }       
        echo "</ul>";
    }
?>
