<?php

    //Variáveis de Sessão
	session_start();
    $id = $_SESSION['id'];

    //Id do nosso parceiro
    $project_name = $_POST['name'];
    
    //Requerimento das Classes
    require_once('../../classes/db.php');
    $db = new db();

    //Busca do ID das parceirias
    $colunas = " * ";
    $tabela = " project ";
    $condicao = "WHERE iduser = $id";
    $resultado_id = $db->query($colunas, $tabela, $condicao);
    $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
    
    //Inicio da Delecao
    $tabela_del = 'project';
    $condicao_del = "WHERE id = ".$registro['id'];
    $db->delete($tabela_del, $condicao_del);
    
?>