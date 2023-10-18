<?php

/**
 * Summary of tractarDades
 *  Aquesta funcio serveix per evitar l'injeccio de codi treient els espais, les '\' i convertint els caracters especial en entitats HTML.
 * @param String $data demana la dada sense tractar
 * @return String retorna la dada tractada
 */
function tractarDades($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * 
 */
function iniciarSession($usuari){
    session_start();
    $_SESSION["newsession"]=$usuari;
    echo $_SESSION["newsession"];

}

/**
 * 
 */
function tancarSession($usuari){
    unset($_SESSION[$usuari]);
}

?>