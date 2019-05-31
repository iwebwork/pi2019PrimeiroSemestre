
<?php
	//print_r($_POST);
	include 'class/Instituicao.class.php';
	include 'class/Usuario.class.php';
	//$Usuario = new Usuario();
	//$Usuario->verificacaoLogin();
	$inst = new Instituicao();
	
	if (!empty($_POST)) {
		//print_r($_POST);
		$inst->inserirInstituicao($_POST);	
		header("Location: ../index.php");
	}else{
		echo "Veio vazio";
		header("Location: ../index.php");
	}