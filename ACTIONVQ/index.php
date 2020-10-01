<?php
	session_start();
	/**
	 * API to call reniec por Franl Moreno Alburqueque
	 */

    if (isset($_SESSION['user_id'])) {
    	header('Content-Type: application/json; charset=utf-8');
    	//header('Access-Control-Allow-Origin: https://api.reniec.cloud/dni/03655166');
    	header('Access-Control-Allow-Origin: *');
    	$dbs='DataBase';
    	$ru0='MORENOKU/';
    	$ru2='../MORENOKU/';
		$cl1='api_reniec';

		require($ru2.$cl1.'.php');
		$_cl1 = new $cl1();

		if (isset($_REQUEST['dni'])) {
			$dni = $_REQUEST['dni'];

			$inf = $_cl1->search($dni);

			echo json_encode($inf);
		}
		if (isset($_POST['dni'])) {
			$dni = $_POST['dni'];

			$inf = $_cl1->search($dni);

			echo json_encode($inf);
		}
    }
?>