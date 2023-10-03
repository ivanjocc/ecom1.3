<?php
	require_once ('functions.php');
	var_dump($_POST);

	if ($_POST) {
		$name = $_POST('fname');
		if (empty($name)) {
			echo "</br> nom vide";
		} else {
			echo "</br> nom est: " . $name;
		}
	}

	// $nameLengthIsValid = nameLengthIsValide($_POST['fname']);

?>
