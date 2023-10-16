<?php 
//Eric Rubio Sanchez
require_once("../Model/BDD.php");

function validarDades($nom,$correu,$password,$password2){
    $errors="";
    if(empty($nom)){
        $errors.="Nom buit <br>";
    }elseif (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
        $errors.= "Nom erroni <br>";
      }
    if(empty($correu)){
        $errors.="Correu buit <br>";
    }elseif (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
        $errors.= "Correu erroni <br>";
      }
    if(empty($password)){
        $errors.="Contrasenya buit <br>";
    }
    if($password!=$password2){
        $errors.="Les contrasenyes han de ser iguals <br>";
    }
    if(empty($password2)){
        $errors.="Has de que tornar a intorduir la contrasenya <br>";
    }
    return $errors;
/*action="<?php echo $_SERVER["PHP_SELF"];?>"id= "form"*/    
}

//Aquesta funcio serveix per evitar l'injeccio de codi treient els espais, les '\' i convertint els caracters especial en entitats HTML.
function tractarDades($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    //Agafem les variables del formulari i les enviem a una funcio del controlador en la que tartem d'evitar l'injeccio de codi.
    $nom = tractarDades($_POST["nom"]);
    $correu = tractarDades($_POST["correu"]);
    $password = tractarDades($_POST["password"]);
    $password2 = tractarDades($_POST["password2"]);

    //Crida la funcio validarDades on em retorna un string amb tots els erros de les validacions.
    $errors=validarDades($nom,$correu,$password,$password2);
    $correcte="";

    if($errors==""){
        $correcte="Totes les dades son correctes";
        $password = hash('sha512',$password);
        try{crearUsuari($nom,$correu,$password);
            $correcte.="Usuari Afegit";}
        catch(PDOException $e){
            echo $e;
            $errors.="Aquest correu ja existeix a la base de dades.";
        }
        
        

    }
    //Un include perque carregui tot l'HTML desde aqui per tenir les variables i el HTML en el mateix lloc.
}

require_once("../Vista/enregistrarse.vista.php");
?>