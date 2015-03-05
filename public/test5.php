<?
	// Test bez poczekalni - branch: Hotfix
	$x = microtime();
	for($i=1; $i<100000000; $i++) {
		$temp = rand(1,1000000);
	}
	$y = microtime();
	
	$x1 = explode(' ', $x);
	$x = (real)$x1[1] + (real)$x1[0];

	$y1 = explode(' ', $y);
	$y = (real)$y1[1] + (real)$y1[0];
	
	echo $y - $x;
	echo ' fix';
?>