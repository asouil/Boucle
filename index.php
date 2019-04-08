<!DOCTYPE html>
<html>
<head>
	<title>Boucles</title>
</head>
<body>

	<?php
	echo('Exercice 1 <br/>');
	$var=0;
	while($var<10){
		print($var.'; ');
		$var++;
	}
	?>


	<?php
	echo('<br/> Exercice 2 <br/>');
	$var = 0;
	$var2 = 13;
	$var3 = 0; //pas indispensable : echo $var*$var2;
	while($var<=20){
		$var3=$var*$var2;
		print($var3.'; ');
		$var++;
	}
	?>

	<?php
	echo('<br/> Exercice 3 <br/>');
	$var4=100;
	$var5=45;
	$result=0;
	while($var4>10){
		$result=$var4*$var5;
		print($result.'; ');
		$var4--;
	}
	?>

	<?php
	echo('<br/> Exercice 4 <br/>');
	$var6=1;
	while($var6<10){
		print($var6.'<br/>');
		$var6*=1.5;
	}
	?>

	<?php
	echo('Exercice 5 <br/>');
	for($int=1;$int<=15;$int++){
		print("On y arrive presque<br/>");
	}
	?>

	<?php
	echo('Exercice 6 <br/>');
	for($int2=20;$int2>=0;$int2--){
		print("C'est presque bon<br/>");		
	}
	?>

	<?php
	echo('Exercice 7 <br/>');
	for($int3=1;$int3<=100;$int3+=15){
		print("*On tient le bon bout*<br/>");	
	}
	?>

	<?php
	echo('Exercice 8 <br/>');
	for($int4=200;$int4>=0;$int4-=12){
		print('**Enfin!!!!** <br/>');
	}
	?>

</body>
