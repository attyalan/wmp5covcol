<?php

include_once "models/Covers.class.php";
$cover = new Cover_Table( $db );
$covers = $cover->geefZwart();
$output = include_once "views/kleuren/zwart.php";
$output .= include_once "views/overzicht-html.php";
return $output;
