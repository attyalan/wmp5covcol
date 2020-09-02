<?php

include_once "models/Covers.class.php";
$cover = new Cover_Table( $db );
$covers = $cover->geefOranje();
$output = include_once "views/kleuren/oranje.php";
$output .= include_once "views/overzicht-html.php";
return $output;
