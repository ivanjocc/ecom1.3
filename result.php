<?php
	require_once("functions.php");
	var_dump($_POST);

	if ($_POST) {
		$name= $_POST['fname'];
		if (empty($name)) {
			echo "</br>Nom vide";
		}
		else {
			echo "</br>Mon nom est:" . $name;
		}
	$nameLengthIsValid = nameLengthIsValid($_POST['fname']);
	echo'</br>';
	var_dump($nameLengthIsValid);
	if ($nameLengthIsValid['isValid']) {
		
	}
	}
?>