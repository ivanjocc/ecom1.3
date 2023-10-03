<?php
	function nameLengthIsValid($nameToValid){
		//minimum 2 max 10
		$length = strlen($nameToValid);
		$responses=['isValid'=>true,
		'msg'=>''
		];
		if ($length <2) {
			$responses=['isValid'=>false,
			'msg'=>'Nom trop court'
		];
		}
		else if ($length >10) {
			$responses=['isValid'=>false,
			'msg'=>'Nom trop long'
		];
		}
		return $responses;

	}
?>