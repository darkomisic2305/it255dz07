<?php 
	$x = 5;
	$y = 16;

	if(isset($_POST['x'])) {
		$x = $_POST['x'];
	}

	if(isset($_POST['y'])) {
		$y = $_POST['y'];
	}
	header("Content-type: application/json");

	$zbir = $x + $y;
	$razlika = $x - $y;
	$proizvod = $x * $y;
	$kolicnik = $x / $y;

	$niz = array(
		'x+y' => $zbir,
		'x-y' => $razlika,
		'x*y' => $proizvod,
		'x/y' => $kolicnik
	);

	echo json_encode($niz);
?>