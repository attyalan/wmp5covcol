<?php

include_once "models/Covers.class.php";
$cover = new Cover_Table( $db );
$covers = $cover->geefGroen();
$output = include_once "views/kleuren/groen.php";
$output .= include_once "views/overzicht-html.php";
return $output;
