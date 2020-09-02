<?php

include_once "models/Covers.class.php";
$cover = new Cover_Table( $db );
$covers = $cover->geefBlauw();
$output = include_once "views/kleuren/blauw.php";
$output .= include_once "views/overzicht-html.php";
return $output;
