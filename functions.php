<?php
	function nameLengthIsValide ($nameToValid) {
		$length = strlen($nameToValid);
		
		$response = [
			'isValide' => true,
			'msg' => ''
		];
	
		if ($length < 2) {
			$response = [
				'isValide' => false,
				'msg' => 'nom trop court'
			];
		} elseif ($length > 10) {
			$response = [
				'isValide' => false,
				'msg' => 'nom trop long'
			];
		}
	
		return $response;
	}

?>