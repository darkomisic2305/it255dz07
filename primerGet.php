<?php 
	header("Content-type: application/json");
	$studenti = array(
		array('id' => 0,
		'imePrezime' => 'Darko Misic', 
		'brojIndeksa' => '2305'),
		array('id' => 1,
		'imePrezime' => 'Borko Velinov', 
		'brojIndeksa' => '2501'),
		array('id' => 2,
		'imePrezime' => 'Stefan Mihajlovic', 
		'brojIndeksa' => '2333'),
	);

	echo json_encode($studenti);
?>