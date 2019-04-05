<!DOCTYPE html>
<html>
<head>
	<title>Boucles</title>
</head>
<body>

	<?php
	echo('Exercice 1 <br/>');
		for($var=0;$var<10; $var++){
		print($var.'<br/>');

	}
	?>


	<?php
	echo('Exercice 2 <br/>');
	$var = 0;
	$var2 = 13;
	$var3=0;
	while($var*$var2<20){
		$var3=$var*$var2;
		print($var3.'<br>');
		$var++;
	}
	?>

	<?php
	echo('Exercice 3 <br/>');
	$var=100;
	$var2=45;
	$var3=0;
	while($var>10){
		$var3=$var*$var2;
		print($var3.'<br>');
		$var--;
	}
	?>
	<?php
	echo('Exercice 4 <br/>');
	$var=1;
	while($var<10){
		print($var.'<br/>');
		$var*=1.5;
	}
	?>
	<?php
	echo('Exercice 5 <br/>');
	for($var=0;$var<=15;$var++){
		print("**On y arrive presque**<br/>");
	}
	?>

	<?php
	echo('Exercice 6 <br/>');
	for($var=20;$var!=0;$var--){
		print("**C'est presque bon**<br/>");		
	}
	?>

	<?php
	echo('Exercice 7 <br/>');
	for($var=1;$var<=100;$var+=15){
		print("**On tient le bon bout**<br/>");	
	}
	?>

	<?php
	echo('Exercice 8 <br/>');
	for($var=200;$var>=0;$var-=12){
		print('**Enfin!!!!** <br/>');
	}
	?>

</body>
