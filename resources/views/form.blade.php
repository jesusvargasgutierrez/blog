<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="GET" name="form1" action="{{ route(suma) }}">
		<label>Nombre:</label>
		<input type="text" name="name" />

		<label>Edad:</label>
		<input type="text" name="age" />

		<input type="submit" name="submit" value="Enviar" />
	</form>
</body>
</html>