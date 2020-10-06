<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Examen umontes</title>
</head>
<body>
	<?php 
	for($i=1; $i<=10; $i++){
		if($i%2){
				echo str_pad("",$i,"1 ")."<br>";}
	}
	for($j=10; $j<=19; $j++){
		if($j%2){
				echo str_pad("",$j,"2 ")."<br>";}
	}
	for($k=20; $k<=27; $k++){
		if($k%2){
				echo str_pad("",$k,"3 ")."<br>";}
	}

	?>

</body>
</html>