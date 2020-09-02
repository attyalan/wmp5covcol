<?php

// Integreren van de kunstwerken class
include_once "models/Covers.class.php";

// Het effectieve verwijderen van het kunstwerk. Het opgeladen bestand laten we rustig in de folder zitten
$cover = new cover_Table($db);
$cover->verwijderCover( $_GET['id']);

// De volgende 2 regels zorgen ervoor dat gebruiker wordt weggeleid naar de overzichtspagina
header('Location: index.php');
exit;
