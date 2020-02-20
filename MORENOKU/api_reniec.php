<?php
	/**
	 * API to call reniec
	 */
	class api_reniec
	{
	
		function search($dni){
			$data = file_get_contents("https://api.reniec.cloud/dni/".$dni);
			$json = json_decode($data, true);

			return $json;
		}
	}
?>