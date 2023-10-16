<!-- Eric Rubio Sanchez -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="../Vista/estils.css"> <!-- feu referència al vostre fitxer d'estils -->
    <link rel="stylesheet" href="../Vista/estilForms.css"> <!-- feu referència al vostre fitxer d'estils -->
	<title>Log-IN</title>
</head>
<body>
	<?php include_once'../Controlador/logarse.php' ?>
    <nav>
		<ul>
 			<li><a href="../Vista/index.vista.php">Articles</a></li>
  			<li class="logs active"><a href="../Vista/logarse.vista.php">Logar-se</a></li>
			<li class="logs"><a href="../Vista/enregistrarse.vista.php">Enregistrar-se</a></li>
		</ul>
	</nav>
</body>
</html>