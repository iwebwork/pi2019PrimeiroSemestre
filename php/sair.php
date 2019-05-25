<?php
	session_start();

	unset($_SESSION['id']);
	header("Location: ../admin/login.php");
	exit;