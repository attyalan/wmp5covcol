<?php

include_once "models/Covers.class.php";
$cover = new Cover_Table( $db );
$covers = $cover->geefPaars();
$output = include_once "views/kleuren/paars.php";
$output .= include_once "views/overzicht-html.php";
return $output;
