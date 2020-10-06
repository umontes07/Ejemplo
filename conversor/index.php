<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Conversor</title>
</head>
<body>
	<form action="Controllers/conversorControler.php" method="POST">
		<h1>Conversor de unidades</h1>
		<input type="double" name="valor" value="valor" placeholder="Ingrese una cantidad">
		<select name="medida">
			<option value="1">Centimertro</option>
			<option value="2">Metro</option>
			<option value="4">Yarda</option>
			<option value="3">Pulgada</option>

			<option value="5">Gramo</option>
			<option value="6">Kilo</option>
			<option value="7">Onza</option>

			<option value="8">Mililitros</option>
			<option value="9">Litros</option>
			<option value="10">Metro cúbico</option>
		</select>

		<select name="medida2">
			<option value="1">Centimertro</option>
			<option value="2">Metro</option>
			<option value="4">Yarda</option>
			<option value="3">Pulgada</option>

			<option value="5">Gramo</option>
			<option value="6">Kilo</option>
			<option value="7">Onza</option>

			<option value="8">Mililitros</option>
			<option value="9">Litros</option>
			<option value="10">Metro cúbico</option>
		</select><br>
		<input type="submit" value="enviar">
	</form>

</body>
</html>