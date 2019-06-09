<?php
	//print_r($_POST);
	if (!empty($_POST['id_inst'])) {
		# code...
		include_once 'class/Instituicao.class.php';
		$inst = new Instituicao();
		$inst->atualizar($_POST);
	}