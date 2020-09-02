<?php

// Dit is de standaardcode voor de error reporting
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

// hier zetten we alles klaar voor het verbinden met de databank. Pas op, paswoord kan anders zijn als je WAMP gebruikt
$dbInfo = "mysql:host=localhost;dbname=covcol";
$dbUser = "root";
$dbPassword = "";
$db = new PDO( $dbInfo, $dbUser, $dbPassword );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

// Pagina_Data class: eerste deel - de HTML-template integreren, instantiëren, aantal eigenschappen invullen
include_once "models/Pagina_Data.class.php";
$paginaData = new Pagina_Data();
$paginaData->titel = "covcol";
$paginaData->content = include_once "views/navigatie.php"; // view navigatie integreren
$paginaData->css = "<link href='css/reset.css' rel='stylesheet' />"; // reset van enkele CSS eigenschappen
$paginaData->css .= "<link href='css/stijl.css' rel='stylesheet' />"; // integreren van de stylesheet

// de front controller aan het werk: op basis van de url-variabele wordt de in te laden controller bepaald
$navigatieIsClicked = isset($_GET['pagina']);
if ($navigatieIsClicked ) {
    $fileToLoad = $_GET['pagina'];
} else {
    $fileToLoad = "wit";
}

// Pagina_Data class: tweede deel - correcte controller wordt geïntegreerd binnen de content-eigenschap
$paginaData->embeddedStyle = "<style>nav a[href *= '?pagina=$fileToLoad']{font-weight: 500;}</style>"; // met dit stukje code kunnen we de actieve link anders stylen
$paginaData->content .=include_once "controllers/$fileToLoad.php";
$pagina = include_once "views/pagina.php";
echo $pagina;

?>
