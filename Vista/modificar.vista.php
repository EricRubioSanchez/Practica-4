<!-- Eric Rubio Sanchez -->
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" type="text/css" href="../Estils/estils.css">
    <link rel="stylesheet" type="text/css" href="../Estils/estilForms.css">
    <title>Modificar</title>
</head>
<body>
    <?php if( !isset( $_SESSION['newsession'])){session_start();} ?>
    <!-- Retorna a la pagina de articles si es tanca la sessió -->
    <?php if( !isset( $_SESSION['newsession'])){
	    header("Location: ../Vista/index.vista.php");
        exit();}
    ?>
    <nav>
		<ul>
			<li ><a href="../Vista/index.vista.php">Articles</a></li>
			<?php if( isset( $_SESSION['newsession'])):?>
				<li ><a href="../Vista/inserir.vista.php">Inserir</a></li>
				<li class="active"><a href="../Vista/modificar.vista.php">Modificar</a></li>
				<li ><a href="../Vista/esborrar.vista.php">Esborrar</a></li>
				<li class="logs"><a href="../Controlador/logout.php">Sortir</a></li>
                <li class="logs"><a href="../Vista/canviarContrasenya.vista.php">Canviar Contrasenya</a></li>
				<li class="logs"><?php echo("Hola, ".$_SESSION['nom'] );?></li>
            <?php endif; ?>
		</ul>
	</nav>
    <div class="container">
        <div>
        <h1 class="box">Modificar</h1>
        </div>
        <div class="principalBox">
            <form action="../Controlador/modificar.php" method="post">
                <br>
                <label>
                    ID Article:<input type="text" name="id_article" required value="<?php if(isset($idArticle)){echo $idArticle;}?>">
                </label>
                <br>
                <label>
                    Article:<input type="text" name="article" maxlength="50" minlength="3" required value="<?php if(isset($article)){echo $article;}?>">
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
                    <input type="submit" value="Enviar" onclick="return confirm('Estàs segur que vols modificar?')">
                </div>
            </form>
                
        </div>
    </div>
</body>
</html>