<?php
	include_once 'class/Usuario.class.php';
	include_once 'class/Instituicao.class.php';
	$usuario = new Usuario();
	$usuario->verificacaoLogin();

	$inst = new Instituicao();
	if (!empty($_POST)) {
		$id = $_POST['id_inst'];

		$inst->deletarInst($id);
		//echo '<script>alert("Instituicao excluido com sucesso")</script>';
		header("Location:../admin/index.php");

	}else{
		header("Location:../index.php");
		//echo "O POST veio vazio";
	}