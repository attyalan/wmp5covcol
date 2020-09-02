<?php

include_once "models/Covers.class.php";
$cover = new Cover_Table( $db );
$covers = $cover->geefBruin();
$output = include_once "views/kleuren/bruin.php";
$output .= include_once "views/overzicht-html.php";
return $output;
