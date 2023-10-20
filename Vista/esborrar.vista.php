<!-- Eric Rubio Sanchez -->
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" type="text/css" href="../Estils/estils.css">
    <link rel="stylesheet" type="text/css" href="../Estils/estilForms.css">
    <title>Esborrar</title>
</head>
<body>
    <?php session_start(); ?>
    <!-- Retorna a la pagina de articles si es tanca la sessió -->
    <?php if( !isset( $_SESSION['newsession'])){
	    header("Location: ../Vista/index.vista.php");
        exit();}
    ?>
    <nav>
		<ul>
			<li ><a href="../Vista/index.vista.php">Articles</a></li>
			<?php if( isset( $_SESSION['newsession'])):?>
				<li><a href="../Vista/index.vista.php">Inserir</a></li>
				<li><a href="../Vista/index.vista.php">Modificar</a></li>
				<li class="active"><a href="../Vista/index.vista.php">Esborrar</a></li>
				<li class="logs"><a href="../Controlador/logout.php">Sortir</a></li>
				<li class="logs"><?php echo("Hola, ".$_SESSION['nom'] );?></li>
			<?php else: ?>
				<li class="logs"><a href="../Vista/logarse.vista.php">Logar-se</a></li>
				<li class="logs"><a href="../Vista/enregistrarse.vista.php">Enregistrar-se</a></li>
            <?php endif; ?>
		</ul>
	</nav>
    <div class="container">
        <div>
        <h1 class="box">Esborrar</h1>
        </div>
        <div class="principalBox">
            <form action="../Controlador/Esborrar.php" method="post">
                <br>
                <label>
                    ID Article:<input type="text" name="id_article" required value="<?php if(isset($idArticle)){echo $idArticle;}?>">
                </label>
                <br>
                <?php if (!empty($errors)):?>
                    <div><?php
                        echo "<p class='errors resultado'>".$errors."</p>";
                        ?>
                    </div>
                <?php endif ?>
                <?php if (!empty($correcte)):?>
                    <div><?php
                        echo "<p class='correcte resultado'>".$correcte."</p>";
                        ?>
                    </div>
                <?php endif ?>
                <br>
                <div>
                    <input type="submit" value="Enviar" onclick="return confirm('Estàs segur que vols esborrar?')">
                </div>
            </form>
                
        </div>
    </div>
</body>
</html>