<?php
	//print_r($_POST);
	include 'class/Instituicao.class.php';
	$inst = new Instituicao();
	if (!empty($_POST)) {
		$inst->inserirInstituicao($_POST);
	}
?>