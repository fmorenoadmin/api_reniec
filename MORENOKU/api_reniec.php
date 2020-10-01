<?php
	/**
	 * API to call reniec por Franl Moreno Alburqueque
	 */
	class api_reniec
	{
	
		function search($dni){
			$data = file_get_contents("http://dniruc.apisperu.com/api/v1/dni/".$dni."?token=");
			$json = json_decode($data, true);

			return $json;
		}
		function search2($dni){
			$data = file_get_contents("http://api.reniec.cloud/dni/".$dni);
			$json = json_decode($data, true);

			return $json;
		}
	}
?>