<?php
	include 'class/Instituicao.class.php';
	include 'class/Usuario.class.php';
	$Usuario = new Usuario();
	$Usuario->verificacaoLogin();
	$inst = new Instituicao();

	if(!empty($_POST)){
		$inst->liberarInstituicao($_POST['id_inst']);
		header("Location: ../index.php");
	}else{
		echo "Não mandou o id";
	}